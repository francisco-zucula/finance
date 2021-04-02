<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0 text-primary" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/brand/favicon.png') }}" />
            TXENEKA-KOLA
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Página inicial') }}
                    </a>
                </li>
                {{-- Dropdown Histórico--}}
                <li class="nav-item">
                    <a class="nav-link" data-turbolinks="false" href="#navbar-register" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-register">
                        <i class="ni ni-circle-08 text-pink"></i>
                        <span class="nav-link-text">
                            Cadastros
                        </span>
                    </a>

                    <div class="collapse " id="navbar-register">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link" href="{{route('client') }}">
                                    <i class="fas fa-shopping-bag"></i>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="fas fa-shopping-bag"></i>
                                    Colaboradores
                                </a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="far fa-question-circle"></i>
                                    Socios
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="far fa-question-circle"></i>
                        Credores
                    </a>
                </li>

                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="far fa-question-circle"></i>
                        Colaboradores
                    </a>
                </li>

                <!-- Para acrescentar qualquer tipo de conteúdo -->
            </ul>
        </div>
    </div>
</nav>