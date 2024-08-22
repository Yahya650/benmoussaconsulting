<header class="site-header">
    <div id="header-wrap" class="fixed-header">
        <div class="container">
            <div class="row">
                <!--menu start-->
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo text-dark h2 mb-0"
                            href="{{ route('web.home', ['lang' => session()->get('lang')]) }}">
                            M.Ben<span class="text-primary fw-bold">Moussa</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{ route('web.home', ['lang' => session()->get('lang')]) }}">@lang('header.home')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{ route('lead_form', ['lang' => session()->get('lang')]) }}">@lang('header.take_appointment')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{ route('web.contact', ['lang' => session()->get('lang')]) }}">@lang('header.contact')</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-primary ms-8 d-none d-md-block"
                            href="{{ route('redirect', ['lang' => app()->getLocale() == 'ar' ? 'fr' : 'ar']) }}">
                            @if (app()->getLocale() == 'ar')
                                fr
                            @else
                                ar
                            @endif
                            {{-- {{ request()->lang }} --}}
                        </a>
                    </nav>
                </div>
                <!--menu end-->
            </div>
        </div>
    </div>
</header>
