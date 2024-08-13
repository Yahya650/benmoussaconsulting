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
                                    <form id="footer-form">
                                        <div class="form-group">
                                            <span class="icon flaticon-phone-call"></span>
                                            <input type="text" name="phone_number-footer-form"
                                                placeholder="Votre téléphone">
                                            <span id="phone_number-footer-form-error" class="text text-danger"></span>
                                            <button type="submit" id="footer-form-btn-submit"
                                                class="theme-btn submit-btn">
                                                Prendre Rendez-Vous
                                                <span class="arrow flaticon-right-arrow-1"></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#footer-form').on('submit', function(e) {
                    e.preventDefault();

                    const form = $(this);
                    const submitButton = $('#footer-form-btn-submit');

                    if (!$('input[name=phone_number-footer-form]').val()) {
                        $('input[name=phone_number-footer-form]').addClass('is-invalid');
                        $('#phone_number-footer-form-error').text(
                            "SVP, veuillez entrer votre numéro de telephone");
                        return;
                    } else {
                        $('input[name=phone_number-footer-form]').removeClass('is-invalid');
                        $('#phone_number-footer-form-error').text("");
                    }

                    if ($('input[name=phone_number-footer-form]').val().length != 10 || !/^\d+$/.test($(
                            'input[name=phone_number-footer-form]').val())) {
                        $('input[name=phone_number-footer-form]').addClass('is-invalid');
                        $('#phone_number-footer-form-error').text(
                            "SVP, veuillez entrer un numéro de telephone valide");
                        return;
                    } else {
                        $('input[name=phone_number-footer-form]').removeClass('is-invalid');
                        $('#phone_number-footer-form-error').text("");
                    }

                    submitButton.html(`
                    <i class="fa fa-spinner fa-pulse"></i>
                    `).css("cursor", "not-allowed").attr("disabled", true);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('leads.store') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            // full_name: $('input[name=full_name]').val(),
                            phone_number: $('input[name=phone_number-footer-form]').val(),
                        },
                        success: function(response) {
                            submitButton.html("Prendre Rendez-Vous").attr("disabled", false).css(
                                "cursor",
                                "pointer");
                            Swal.fire({
                                icon: "success",
                                title: "Félicitation",
                                html: "Votre numero de telephone a été envoyé avec succès.",
                            });
                        },
                        error: function(res, status, error) {
                            submitButton.text("Prendre Rendez-Vous").attr("disabled", false).css(
                                "cursor",
                                "pointer");
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                html: res.responseJSON.message,
                            });
                        }
                    });
                });
            });
        </script>

    </div>
</footer>
