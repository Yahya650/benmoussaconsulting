<footer class="main-footer">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="">
                                    <a href="{{ route('web.home') }}"><img src="/web/Sans titre-2.png" width="100px"
                                            alt="Logo" title="Logo"></a>
                                </div>
                                <div class="text">
                                    Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience
                                    et une compréhension profonde des complexités de la vie moderne, il offre des
                                    conseils perspicaces et des stratégies pratiques pour aider les individus à
                                    surmonter les obstacles, à développer un état d'esprit positif et à établir des
                                    relations significatives et épanouissantes.
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Pages</h5>
                                <div class="row clearfix">
                                    <!-- Column -->
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-link">
                                            <li><a href="{{ route('web.home') }}">Accueil</a></li>
                                            <li><a href="{{ route('lead_form') }}">Prendre Rendez-Vous</a></li>
                                            {{-- <li><a href="{{ route('web.coaching.types') }}">Types de coaching</a></li> --}}
                                            <li><a href="{{ route('web.contact') }}">Contactez-nous</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <h5>Entrer en contact</h5>
                                <ul class="contact-info-list">
                                    <li><span>Notre bureau</span><a href="#"> 13 Rue Aomr EL KHAYAM Rés Yasmine B
                                            ETG 3 Num 13</a></li>
                                </ul>
                                <ul class="contact-info-list">
                                    <li><span>Email</span><a style="font-size: 15px; text-decoration: underline"
                                            href="mailto:contact@benmoussaconsulting.com">contact@benmoussaconsulting.com</a>
                                    </li>
                                </ul>
                                <ul class="contact-info-list">
                                    <li>
                                        <span>Téléphone</span>
                                        <a style="font-size: 15px; text-decoration: underline"
                                            href="tel:+212520816447">+212 520-816447</a>
                                        <br>
                                        <span class="mt-2">Whatsapp</span>
                                        <a style="font-size: 15px; text-decoration: underline"
                                            href="https://wa.me/212665228542">+212 665-228542</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h5>Nous vous appeler</h5>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <span class="icon flaticon-phone-call"></span>
                                            <input type="text" name="search-field" placeholder="Votre téléphone"
                                                required>
                                            <button type="submit" class="theme-btn submit-btn">Prendre Rendez-Vous<span
                                                    class="arrow flaticon-right-arrow-1"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="footer-bottom">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="copyright">Copyright &copy; <a href="#">Wecodeit</a> - 2023</div>
                </div>
                <div class="pull-right">
                    <div class="payments"><img src="/assets/images/icons/payment.png" alt="" /></div>
                </div>
            </div>
        </div> --}}

    </div>
</footer>
