<header class="u-header">
    <div class="u-header-left">
        <a class="u-header-logo" href="index.html">
            <img class="u-logo-desktop" src="{{ asset('assets/img/logo.png') }}" width="160" alt="Stream Dashboard">
            <img class="img-fluid u-logo-mobile" src="{{ asset('assets/img/logo-mobile.png') }}" width="50"
                 alt="Stream Dashboard">
        </a>
    </div>

    <div class="u-header-middle">
        <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true"
           data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

        <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker"
             data-search-target="#headerSearch">
            <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker"
               href="#!">
                <i class="fa fa-search"></i>
            </a>

            <div id="headerSearch" class="u-header-search-form">
                <form>
                    <div class="input-group">
                        <!-- <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                            <i class="fa fa-search"></i>
                        </button> -->
                        <input class="form-control u-header-search__field" type="search" placeholder="Search">
                        <button type="submit" class="bg-gradient text-white">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="u-header-right">
        <!-- Activities -->
        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
               aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-envelope"></i>
                    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-success"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink"
                 style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Activities</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3"
                                         src="{{ asset('assets/img/avatars/img1.png') }}" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">View all activities</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Activities -->

        <!-- Notifications -->
        <div class="dropdown mr-3">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
               aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-bell"></i>
                    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-danger"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink"
                 style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Notifications</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                        <i class="fab fa-dribbble"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Dribbble</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Notifications -->

        <!-- User Profile -->
        <div class="dropdown ml-2">
            <a class="link-muted d-flex align-items-center us-u-avatar-wrap" href="#!" role="button"
               id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <img class="u-avatar--xs img-fluid rounded-circle mr-2 bg-gradient"
                     src="{{ asset('assets/img/avatars/img1.png') }}" alt="User Profile">
                <span class="d-none d-sm-inline-block text-danger">
                        <small class="fas fa-ellipsis-v"></small>
                    </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink"
                 style="width: 260px;">
                <div class="card">
                    <div class="card-header py-3">
                        <!-- Username -->
                        <h3>{{ Auth::user()->name }}</h3>
                        <p>{{ Auth::user()->email }}</p>
                        <!-- End Username -->
                    </div>

                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="{{ route('profile.show') }}">
                                    <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center link-dark" href="{{ url('/logout') }}">
                                    <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User Profile -->
    </div>
</header>