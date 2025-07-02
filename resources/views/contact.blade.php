<!-- Contact Section -->
            <section id="contact" class="contact section" data-aos="fade-up">
                <!-- Section Title -->
                <div class="container section-title">
                    <h2>Contact</h2>
                    <div>
                        <span>Contact</span>
                        <span class="description-title">Us</span>
                    </div>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-info">
                                <div class="contact-card">
                                    <h3>Contact Information</h3>
                                    <p>
                                        Silakan hubungi kami untuk informasi
                                        proyek, penawaran kerja sama, atau
                                        pertanyaan lainnya.
                                    </p>

                                    <div class="contact-details">
                                        <div class="contact-item">
                                            <i class="bi bi-envelope"></i>
                                            <div>
                                                <h4>Email:</h4>
                                                <p>{{$contact->email}}</p>
                                            </div>
                                        </div>

                                        <div class="contact-item">
                                            <i class="bi bi-telephone"></i>
                                            <div>
                                                <h4>Phone:</h4>
                                                <p>{{$contact->whatsapp}}</p>

                                            </div>
                                        </div>

                                        <div class="contact-item">
                                            <i class="bi bi-geo-alt"></i>
                                            <div>
                                                <h4>Address:</h4>
                                                <p>
                                                    {{$contact->address}}
                                                </p>
                                                <!-- <p>Wordsmith City, NY 10001</p> -->
                                            </div>
                                        </div>
                                    </div>

                                 <div class="social-links">
                                    <a href="mailto:{{ $contact->email ?? '#' }}"><i class="bi bi-envelope"></i></a>
                                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $contact->whatsapp ?? '') }}"><i class="bi bi-whatsapp"></i></a>
                                    <a href="{{ $contact->instagram ?? '#' }}" target="_blank"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $contact->linkedin ?? '#' }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="contact-form-wrapper">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d293.0697819409099!2d115.17484329068138!3d-8.78030676324009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd245e6cc902171%3A0x11f2438709c22f7a!2sJl.%20Gigit%20Sari%20No.3%2C%20Jimbaran%2C%20Kec.%20Kuta%20Sel.%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sid!2sid!4v1750645755949!5m2!1sid!2sid"
                                    width="650"
                                    height="350"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Contact Section -->