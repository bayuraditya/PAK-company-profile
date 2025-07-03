<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'whatsapp'  => 'nullable|string',
            'address'   => 'nullable|string',
            'instagram' => 'nullable|string',
        ]);

        if (Contact::count() > 0) {
            return redirect()->route('admin.contact.index')->with('error', 'Kontak sudah ada. Silakan edit.');
        }

        Contact::create($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil disimpan.');
    }

    public function edit()
    {
        $contact = Contact::firstOrFail();
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'whatsapp'  => 'nullable|string',
            'address'   => 'nullable|string',
            'instagram' => 'nullable|string',
        ]);

        $contact = Contact::firstOrFail();
        $contact->update($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil diperbarui.');
    }
}
