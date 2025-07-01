<?php

namespace App\Http\Controllers;

use App\Models\Portfolio; // Impor model Portfolio
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk menghapus file gambar

class PortfolioController extends Controller
{
    /**
     * Menampilkan daftar semua item portofolio.
     * Digunakan untuk halaman daftar di admin panel.
     */
    public function index()
    {
        // Mengambil semua portofolio, diurutkan berdasarkan tanggal pembuatan terbaru, dengan paginasi 10 item per halaman.
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Menampilkan formulir untuk membuat item portofolio baru.
     * Digunakan untuk halaman "Tambah Portofolio" di admin panel.
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Menyimpan item portofolio yang baru dibuat ke database.
     * Menerima data dari formulir 'create' dan mengunggah gambar.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk dari request
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar utama (maks 2MB)
            'description' => 'nullable|string',
            'images_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Setiap gambar galeri
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4', // Misalnya, '2023'
            'location' => 'nullable|string|max:255',
            'services_provided' => 'nullable|array', // Harus berupa array (walaupun di form bisa string koma-separated)
            'services_provided.*' => 'nullable|string|max:255', // Setiap item dalam array layanan
            'challenges' => 'nullable|string',
            'solution' => 'nullable|string',
        ]);

        // Ambil semua data dari request kecuali file dan token CSRF
        $data = $request->except(['_token', 'image', 'images_gallery']);

        // --- Penanganan Upload Gambar Utama ---
        if ($request->hasFile('image')) {
            // Simpan gambar ke storage 'public' di folder 'portfolios/main_images'
            $data['image'] = $request->file('image')->store('portfolios/main_images', 'public');
        }

        // --- Penanganan Upload Gambar Galeri ---
        $galleryPaths = [];
        if ($request->hasFile('images_gallery')) {
            foreach ($request->file('images_gallery') as $galleryImage) {
                // Simpan setiap gambar galeri ke storage 'public' di folder 'portfolios/gallery'
                $galleryPaths[] = $galleryImage->store('portfolios/gallery', 'public');
            }
        }
        $data['images_gallery'] = $galleryPaths; // Simpan array path gambar galeri ke kolom database (akan di-cast ke JSON)

        // --- Penanganan Services Provided ---
        // Jika input 'services_provided' diterima sebagai string yang dipisahkan koma,
        // ubah menjadi array. Jika sudah array, biarkan.
        if (is_string($request->input('services_provided'))) {
            $data['services_provided'] = array_map('trim', explode(',', $request->input('services_provided')));
        } else {
            $data['services_provided'] = $request->input('services_provided');
        }

        // Buat item portofolio baru di database
        Portfolio::create($data);

        // Redirect kembali ke daftar portofolio dengan pesan sukses
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item created successfully.');
    }

    /**
     * Menampilkan item portofolio spesifik.
     * Menggunakan Route Model Binding dengan slug, sehingga Laravel secara otomatis menemukan portofolio.
     */
    public function show(Portfolio $portfolio) // Parameter $portfolio akan otomatis terisi oleh Laravel
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Menampilkan formulir untuk mengedit item portofolio.
     * Menggunakan Route Model Binding dengan slug.
     */
    public function edit(Portfolio $portfolio) // Parameter $portfolio akan otomatis terisi oleh Laravel
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Memperbarui item portofolio yang ada di database.
     * Menerima data dari formulir 'edit' dan menangani pembaruan gambar.
     */
    public function update(Request $request, Portfolio $portfolio) // Parameter $portfolio otomatis terisi
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar utama
            'description' => 'nullable|string',
            'images_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar galeri baru
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4',
            'location' => 'nullable|string|max:255',
            'services_provided' => 'nullable|array',
            'services_provided.*' => 'nullable|string|max:255',
            'challenges' => 'nullable|string',
            'solution' => 'nullable|string',
            // 'existing_gallery_images' adalah input hidden untuk gambar galeri yang tidak dihapus
            'existing_gallery_images' => 'nullable|array',
        ]);

        // Ambil semua data kecuali token CSRF, metode PUT, dan file gambar
        $data = $request->except(['_token', '_method', 'image', 'images_gallery', 'existing_gallery_images']);

        // --- Penanganan Update Gambar Utama ---
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada dan file-nya masih ada di storage
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('portfolios/main_images', 'public');
        }

        // --- Penanganan Update Gambar Galeri ---
        // Ambil path gambar galeri yang ada dan dicentang untuk dipertahankan
        $currentGallery = $request->input('existing_gallery_images', []);
        $newGalleryPaths = [];

        // Upload gambar galeri baru
        if ($request->hasFile('images_gallery')) {
            foreach ($request->file('images_gallery') as $galleryImage) {
                $newGalleryPaths[] = $galleryImage->store('portfolios/gallery', 'public');
            }
        }

        // Hapus gambar galeri lama yang TIDAK ada di 'existing_gallery_images'
        // Ini memastikan hanya gambar yang tidak dicentang 'Keep' yang dihapus
        if ($portfolio->images_gallery) {
            foreach ($portfolio->images_gallery as $oldGalleryImage) {
                if (!in_array($oldGalleryImage, $currentGallery) && Storage::disk('public')->exists($oldGalleryImage)) {
                    Storage::disk('public')->delete($oldGalleryImage);
                }
            }
        }

        // Gabungkan gambar lama yang dipertahankan dengan gambar baru
        $data['images_gallery'] = array_merge($currentGallery, $newGalleryPaths);

        // --- Penanganan Services Provided ---
        if (is_string($request->input('services_provided'))) {
            $data['services_provided'] = array_map('trim', explode(',', $request->input('services_provided')));
        } else {
            $data['services_provided'] = $request->input('services_provided');
        }

        // Perbarui item portofolio di database
        $portfolio->update($data);

        // Redirect kembali ke daftar portofolio dengan pesan sukses
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item updated successfully.');
    }

    /**
     * Menghapus item portofolio dari database.
     * Menggunakan Route Model Binding dengan slug.
     */
    public function destroy(Portfolio $portfolio) // Parameter $portfolio otomatis terisi
    {
        // --- Hapus Gambar Utama ---
        // Pastikan ada gambar dan file-nya ada di storage sebelum dihapus
        if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        // --- Hapus Gambar Galeri ---
        // Iterasi setiap gambar di galeri dan hapus dari storage
        if ($portfolio->images_gallery) {
            foreach ($portfolio->images_gallery as $galleryImage) {
                if (Storage::disk('public')->exists($galleryImage)) {
                    Storage::disk('public')->delete($galleryImage);
                }
            }
        }

        // Hapus item portofolio dari database
        $portfolio->delete();

        // Redirect kembali ke daftar portofolio dengan pesan sukses
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item deleted successfully.');
    }
}