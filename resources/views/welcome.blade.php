<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Pachislot</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/custom/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--begin::Fontawseome Styleseehts-->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <!--end::Fontawseome Stylesheets-->
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo.png" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-flex align-items-stretch mr-3">
                            <!--begin::Header Logo-->
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="logo-default max-h-40px" />
                                </a>
                            </div>
                            <!--end::Header Logo-->
                        </div>
                        <!--end::Left-->

                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper" style="visibility: hidden;">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                                <!--begin::Header Nav-->
                                <ul class="menu-nav" id="PHeader">
                                    <li class="menu-item menu-item-open" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/" class="menu-link">
                                            <span class="menu-text">ホーム</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/hall-data" class="menu-link">
                                            <span class="menu-text">ホールデータ</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/store" class="menu-link">
                                            <span class="menu-text">出てたお店 </span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/all-systems" class="menu-link">
                                            <span class="menu-text">全台系</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/old-event-date" class="menu-link">
                                            <span class="menu-text">旧イベント日</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="/anniversary" class="menu-link">
                                            <span class="menu-text">周年日</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="menu-link">
                                            <span class="menu-text">情報提供・バグ報告</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Header Nav-->
                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar align-items-center">
                            <div class="">
                                <!-- <a href="/logout" class="btn btn-primary font-weight-bold px-5 py-3 m-2 rounded-10">ログアウト</a> -->
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" class="btn btn-primary font-weight-bold px-5 py-3 m-2 rounded-10"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('ログアウト') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                            
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                @yield('breadcrumb')

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid pb-20" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="row mt-35">
                                <div class="col-sm-12 col-md-9 col-lg-9 pr-20">
                                    <div class="">
                                        <h1 class="color-white fs-5">ホール名から検索</h1>
                                        <div class="divider w-100px"></div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 p-0 mt-10">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="searchRegion" type="text" class="form-control p-input" placeholder="" />
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" id="searchRegionBtn"><i class="flaticon-search ml-2"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-17">
                                        <h1 class="color-white fs-5">都道府県から検索</h1>
                                        <div class="divider w-100px mb-15"></div>
                                    </div>

                                    <div id="regionList">
                                        <div id="allRegionList">
                                            @foreach($areas as $area)
                                                <div class="mt-15">
                                                    <div class="adress-title d-flex align-items-center justify-content-between mb-10">
                                                        <div class="col-4 sub-left-divider"></div>
                                                        <div class="col-4 fs-6 color-white fw-bold text-center">{{ $area->name }}</div>
                                                        <div class="col-4 sub-right-divider"></div>
                                                    </div>
                                                    <div class="adress-list row">
                                                        @foreach($regions as $region)
                                                            @if($region->area_id == $area->id)
                                                                <div class="col-3">
                                                                    <button class="btn btn-outline-white region-btn font-weight-bold py-3 w-100 mb-5 rounded-10" data-region_id="{{ $region->id }}">{{ $region->name }}</button>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        <div id="filteredRegion" class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div>
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/media/logos/logo.png') }}" alt=""></a>
                            </div>
                            <div class="social-link-list mt-7">
                                <a href="#" class="btn btn-icon btn-outline-white btn-circle mr-2">
                                    <i class="fa-brands mt-1 fa-facebook fs-7"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-outline-white btn-circle mr-2">
                                    <i class="fa-brands mt-1 fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-outline-white btn-circle mr-2">
                                    <i class="fa-brands mt-1 fa-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-outline-white btn-circle mr-2">
                                    <i class="fa-brands mt-1 fa-instagram fs-7"></i>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="nav mt-sm-15">
                            <a href="/" class="nav-link pr-3 pl-0 color-white mx-2 font-weight-bold">ホーム</a>
                            <a href="/hall-data" class="nav-link px-3 color-white mx-2 font-weight-bold">ホールデータ</a>
                            <a href="/store" class="nav-link pl-3 pr-0 color-white mx-2 font-weight-bold">出てたお店</a>
                            <a href="/all-systems" class="nav-link pl-3 pr-0 color-white mx-2 font-weight-bold">全台系</a>
                            <a href="/old-event-date" class="nav-link pl-3 pr-0 color-white mx-2 font-weight-bold">旧イベント日</a>
                            <a href="/anniversary" class="nav-link pl-3 pr-0 color-white mx-2 font-weight-bold">周年日</a>
                            <a href="javascript:;" class="nav-link pl-3 pr-0 color-white mx-2 font-weight-bold">情報提供・バグ報告 </a>
                        </div> -->
                    </div>
                    <!--end::Container-->

                    <div class="container">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1 text-center mt-20">
                            <span class="text-muted me-1">Copyright&copy Pachislot. </span>
                            <span class="text-muted me-1">2023 All Rights Reserved.</span>
                        </div>
                        <!--end::Copyright-->
                    </div>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <script src="{{ asset('assets/custom/js/global.js') }}"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors-->

    @yield('add_js')

    <script>
        $(document).ready(function() {

            // Header Active Menu
            const url = window.location.href;
            const pathSegments = url.split('/');
            const secondPathSegment = pathSegments[3];

            switch (secondPathSegment) {
                case "":
                    $("#PHeader").children().eq(0).addClass("menu-item-here");
                    break;
                case "hall-data":
                    $("#PHeader").children().eq(1).addClass("menu-item-here");
                    break;
                case "store":
                    $("#PHeader").children().eq(2).addClass("menu-item-here");
                    break;
                case "all-systems":
                    $("#PHeader").children().eq(3).addClass("menu-item-here");
                    break;
                case "old-event-date":
                    $("#PHeader").children().eq(4).addClass("menu-item-here");
                    break;
                case "anniversary":
                    $("#PHeader").children().eq(5).addClass("menu-item-here");
                    break;
                default:
                    $("#PHeader").children().find("menu-item").removeClass("menu-item-here");
            };

            // Visit Region
            $("#regionList").on("click", ".region-btn", function() {
                window.location.href = "/hall-data/" + $(this).data('region_id');
            });

            // Search Region
            $("#searchRegion").val('');

            $("#searchRegion").keydown(function(event) {
                if(event.which == 13) {
                    $keyword = $("#searchRegion").val();
                    if($keyword) {
                        searchRegion($keyword);
                    }
                }
            });

            $("#searchRegionBtn").click(function() {
                $keyword = $("#searchRegion").val();
                if($keyword) {
                    searchRegion($keyword);
                }
            });

            $("#searchRegion").on('keyup', function(event) {
                if(event.key === 'Delete' || event.key === 'Backspace') {
                    if($(this).val().trim() === '') {
                        $("#filteredRegion").html('');
                        $("#allRegionList").show();
                    }
                }
            });

            function searchRegion($searchTerm) {
                $.ajax({
                    url: "{{ route('search.region') }}",
                    type: "POST",
                    data: {
                        region: $searchTerm,
                    },
                    success: function(response) {
                        $("#allRegionList").hide();
                        if(response) {
                            $("#filteredRegion").html('<div class="col-3"><button class="btn btn-outline-white region-btn font-weight-bold py-3 w-100 mb-5 rounded-10" data-region_id="' + response.id + '">' + response.name + '</button></div>');
                        } else {
                            $("#filteredRegion").html('<p class="fs-7 text-white w-100 text-center">検索した地域はありません。</p>');
                        }
                    },
                    error: function(error) {
                        console.error('Ajax request failed: ', error);
                    }
                });
            }
        });

    </script>
</body>
<!--end::Body-->
</html>

