 <!-- Team Section -->
            <section id="team" class="team section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <div>
                        <span>Check Our</span>
                        <span class="description-title">Expert Team</span>
                    </div>
                </div>
                <!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 800,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "navigation": {
                                    "nextEl": ".swiper-button-next",
                                    "prevEl": ".swiper-button-prev"
                                },
                                "breakpoints": {
                                    "576": {
                                        "slidesPerView": 2
                                    },
                                    "992": {
                                        "slidesPerView": 3
                                    },
                                    "1200": {
                                        "slidesPerView": 4
                                    }
                                }
                            }
                        </script>

                        <div
                            class="swiper-wrapper d-flex justify-content-center"
                        >
                        @php
                        // Path gambar fallback default jika gambar tidak ditemukan atau rusak
                        $defaultImagePath = 'assets/img/person/person-m-8.webp'; 

                        // Data dummy anggota tim
                        $teamMembers = [
                              [
                                'name' => 'Samsuri',
                                'position' => 'Komisaris',
                                'image' => 'images/team/samsuri.png',
                                'description' => 'Pengawas dan penasihat strategis perusahaan, memastikan tata kelola yang baik.',
                                'social_email' => '#',
                                'social_instagram' => '#',
                                'social_linkedin' => '#',
                                'social_whatsapp' => '#',
                            ],
                            [
                                'name' => 'Marta Tobing',
                                'position' => 'Executive Admin',
                                'image' => 'images/team/marta tobing.png',
                                'description' => 'Mendukung operasional harian dengan efisiensi tinggi dan koordinasi yang rapi.',
                                'social_email' => '#',
                                'social_instagram' => '#',
                                'social_linkedin' => '#',
                                'social_whatsapp' => '#',
                            ],
                            [
                                'name' => 'Supandi',
                                'position' => 'Direktur',
                                'image' => 'images/team/supandi.png',
                                'description' => 'Berpengalaman lebih dari 20 tahun di industri, memimpin dengan visi dan inovasi.',
                                'social_email' => '#',
                                'social_instagram' => '#',
                                'social_linkedin' => '#',
                                'social_whatsapp' => '#',
                            ],
                          
                          
                         
                        ];
                    @endphp
                            @foreach($teamMembers as $member)
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-image">
                                        <img
                                            src="{{$member['image']}}"
                                            class="img-fluid"
                                            alt=""
                                            loading="lazy"
                                        />
                                        <div class="team-overlay">
                                           <div class="social-links">
                                            <a href="{{ $member['social_email'] }}"><i class="bi bi-envelope-fill"></i></a>
                                            <a href="{{ $member['social_instagram'] }}"><i class="bi bi-instagram"></i></a>
                                            <a href="{{ $member['social_linkedin'] }}"><i class="bi bi-linkedin"></i></a>
                                            <a href="{{ $member['social_whatsapp'] }}"><i class="bi bi-whatsapp"></i></a>
                                        </div>

                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3>{{$member['name']}}</h3>
                                        <span>{{$member['position']}}</span>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p> -->
                                    </div>
                                </div>
                                <!-- End Team Card -->
                            </div>
                            <!-- End slide item -->
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>
            <!-- /Team Section -->