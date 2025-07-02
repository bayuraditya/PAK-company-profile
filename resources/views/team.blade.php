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
                     
                            @foreach($teams as $member)
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-image">
                                        <img
                                            src="{{ asset($member['image_path'] ?? 'images/default-project.jpg') }}"
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