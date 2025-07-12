<div class="header">
    <div class="main-header">
        <div class="header-left active">
            <a href="index.html" class="logo logo-normal">
                <img src="/assets/img/logo.svg" alt="Img">
            </a>
            <a href="index.html" class="logo logo-white">
                <img src="/assets/img/logo-white.svg" alt="Img">
            </a>
            <a href="index.html" class="logo-small">
                <img src="/assets/img/logo-small.png" alt="Img">
            </a>
        </div>
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <ul class="nav user-menu">

            <li class="nav-item nav-searchinputs">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#" class="dropdown">
                        <div class="searchinputs input-group dropdown-toggle" id="dropdownMenuClickable"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <input type="text" placeholder="{{ __('messages.dashboard.header.search.placeholder') }}">
                            <div class="search-addon">
                                <span><i class="ti ti-search"></i></span>
                            </div>
                            <span class="input-group-text">
                                <kbd class="d-flex align-items-center"><img src="/assets/img/icons/command.svg"
                                                                            alt="img" class="me-1">K</kbd>
                            </span>
                        </div>
                        <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                            <div class="search-info">
                                <h6><span><i data-feather="search" class="feather-16"></i></span>{{ __('messages.dashboard.header.search.recent_searches') }}</h6>
                                <ul class="search-tags">
                                    <li><a href="javascript:void(0);">{{ __('messages.dashboard.header.add_new.Product') }}</a></li>
                                    <li><a href="javascript:void(0);">{{ __('messages.dashboard.header.add_new.Sale') }}</a></li>
                                    <li><a href="javascript:void(0);">Applications</a></li>
                                </ul>
                            </div>
                            <div class="search-info">
                                <h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
                                <p>How to Change Product Volume from 0 to 200 on Inventory management</p>
                                <p>Change Product Name</p>
                            </div>
                            <div class="search-info">
                                <h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
                                <ul class="customers">
                                    <li><a href="javascript:void(0);">Aron Varu<img src="/assets/img/profiles/avator1.jpg" alt="Img" class="img-fluid"></a></li>
                                    <li><a href="javascript:void(0);">Jonita<img src="/assets/img/profiles/avatar-01.jpg" alt="Img" class="img-fluid"></a></li>
                                    <li><a href="javascript:void(0);">Aaron<img src="/assets/img/profiles/avatar-10.jpg" alt="Img" class="img-fluid"></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown has-arrow main-drop select-store-dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link select-store" data-bs-toggle="dropdown">
                    <span class="user-info">
                        <span class="user-letter">
                            <img src="/assets/img/store/store-01.png" alt="Store Logo" class="img-fluid">
                        </span>
                        <span class="user-detail">
                            <span class="user-name">{{ __('messages.dashboard.header.stores.Freshmart') }}</span>
                        </span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/store/store-01.png" alt="Store Logo" class="img-fluid">
                        {{ __('messages.dashboard.header.stores.Freshmart') }}
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/store/store-02.png" alt="Store Logo" class="img-fluid">
                        {{ __('messages.dashboard.header.stores.Grocery Apex') }}
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/store/store-03.png" alt="Store Logo" class="img-fluid">
                        {{ __('messages.dashboard.header.stores.Grocery Bevy') }}
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/store/store-04.png" alt="Store Logo" class="img-fluid">
                        {{ __('messages.dashboard.header.stores.Grocery Eden') }}
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown link-nav">
                <a href="javascript:void(0);" class="btn btn-primary btn-md d-inline-flex align-items-center" data-bs-toggle="dropdown">
                    <i class="ti ti-circle-plus me-1"></i>{{ __('messages.dashboard.header.add_new.button') }}
                </a>
                <div class="dropdown-menu dropdown-xl dropdown-menu-center">
                    <div class="row g-2">
                        @foreach(['Category', 'Product', 'Purchase', 'Sale', 'Expense', 'Quotation', 'Return', 'User', 'Customer', 'Biller', 'Supplier', 'Transfer'] as $item)
                            <div class="col-md-2">
                                <a href="#" class="link-item">
                                    <span class="link-icon">
                                        <i class="ti ti-{{ Str::slug($item) }}"></i>
                                    </span>
                                    <p>{{ __('messages.dashboard.header.add_new.' . $item) }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </li>

            <li class="nav-item pos-nav">
                <a href="pos.html" class="btn btn-dark btn-md d-inline-flex align-items-center">
                    <i class="ti ti-device-laptop me-1"></i>{{ __('messages.dashboard.header.pos') }}
                </a>
            </li>

            <li class="nav-item dropdown has-arrow flag-nav nav-item-box">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                    <img src="/assets/img/flags/us-flag.svg" alt="Language" class="img-fluid">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/flags/english.svg" alt="Img" height="16">
                        {{ __('messages.dashboard.header.languages.English') }}
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="/assets/img/flags/arabic.svg" alt="Img" height="16">
                        {{ __('messages.dashboard.header.languages.Arabic') }}
                    </a>
                </div>
            </li>

            {{-- ... Rest of the header (notifications, profile, etc.) goes here --}}
        </ul>
    </div>
</div>
