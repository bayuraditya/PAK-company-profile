<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row gy-3 align-items-start text-start text-md-left">

            <!-- Logo -->
            <div class="col-lg-3 col-md-6 d-flex justify-content-center justify-content-md-start">
                <div class="address text-center text-md-start">
                    <img src="{{ asset('images/logo pak hitam no bg.png') }}" alt="Logo" style="width: 130px;" />
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong>
                        <span>{{ $contact->whatsapp ?? '-' }}</span><br />
                        <strong>Email:</strong>
                        <span>{{ $contact->email ?? '-' }}</span><br />
                    </p>
                </div>
            </div>

            <!-- Opening Hours -->
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>8AM - 17PM</span><br />
                        <strong>Sunday:</strong> <span>Closed</span>
                    </p>
                </div>
            </div>

            <!-- Social Media -->
            <div class="col-lg-3 col-md-6">
                <h4>Follow Us</h4>
                <div class="social-links d-flex justify-content-center justify-content-md-start">
                    <a href="mailto:{{ $contact->email ?? '#' }}"><i class="bi bi-envelope"></i></a>
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $contact->whatsapp ?? '') }}"><i class="bi bi-whatsapp"></i></a>
                    <a href="{{ $contact->instagram ?? '#' }}" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $contact->linkedin ?? '#' }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="container copyright text-center mt-4">
        <p>
            © <span>Copyright</span>
            <strong class="px-1 sitename">Pt. Pendi Abadi Karya</strong>
            <span>All Rights Reserved</span>
        </p>
        <div class="credits">
            <!-- License & Credits -->
        </div>
    </div>
</footer>
