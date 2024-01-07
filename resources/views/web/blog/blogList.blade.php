<!DOCTYPE html>

<html lang="en" data-bs-theme-mode="light">

<head>
    <title> Laravel 8 - BlogCMS</title>

    <link rel="shortcut icon" href="http://127.0.0.1:8000/demo1/media/logos/favicon.ico" />
    <meta name="csrf-token" content="WTc6kdiUgLk0ikbar4ImifYtNYz9cz0YIeUrio0B">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="demo1/media/logos/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="demo1/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="demo1/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />




    <link href="demo1/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="demo1/css/style.bundle.css" rel="stylesheet" type="text/css" />



    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>

    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">


    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header  align-items-stretch mb-5 mb-lg-10" data-kt-sticky="true"
                    data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class=" container-xxl  d-flex align-items-center">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                                id="kt_header_menu_mobile_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                        </div>
                        <!--end::Heaeder menu toggle-->

                        <!--begin::Header Logo-->
                        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                            <div class="aside-logo flex-column-auto" id="kt_aside_logo">

                                <a href="http://127.0.0.1:8000/index">
                                    <img alt="Logo" src="http://127.0.0.1:8000/piemsoft/logo/logo.png"
                                        class="h-25px logo">
                                </a>



                                <div id="kt_aside_toggle"
                                    class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                                    data-kt-toggle-name="aside-minimize">

                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr080.svg-->
                                    <span class="svg-icon svg-icon-1 rotate-180"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M9.63433 11.4343L5.45001 7.25C5.0358 6.83579 5.0358 6.16421 5.45001 5.75C5.86423 5.33579 6.5358 5.33579 6.95001 5.75L12.4929 11.2929C12.8834 11.6834 12.8834 12.3166 12.4929 12.7071L6.95001 18.25C6.5358 18.6642 5.86423 18.6642 5.45001 18.25C5.0358 17.8358 5.0358 17.1642 5.45001 16.75L9.63433 12.5657C9.94675 12.2533 9.94675 11.7467 9.63433 11.4343Z"
                                                fill="black"></path>
                                            <path
                                                d="M15.6343 11.4343L11.45 7.25C11.0358 6.83579 11.0358 6.16421 11.45 5.75C11.8642 5.33579 12.5358 5.33579 12.95 5.75L18.4929 11.2929C18.8834 11.6834 18.8834 12.3166 18.4929 12.7071L12.95 18.25C12.5358 18.6642 11.8642 18.6642 11.45 18.25C11.0358 17.8358 11.0358 17.1642 11.45 16.75L15.6343 12.5657C15.9467 12.2533 15.9467 11.7467 15.6343 11.4343Z"
                                                fill="black"></path>
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </div>

                            </div>
                        </div>
                        <!--end::Header Logo-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">

                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                            <!--begin:Menu link--><a href="anasayfa"><span class="menu-link py-3"><span
                                                    class="menu-title">Anasayfa</span><span
                                                    class="menu-arrow d-lg-none"></span></span></a><!--end:Menu link--><!--begin:Menu sub-->
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                                <!--begin:Dashboards menu-->

                                                <!--end:Dashboards menu-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <!--begin:Menu link--><a href="hakkimizda"><span class="menu-link py-3"><span
                                                    class="menu-title">Hakkımızda</span><span
                                                    class="menu-arrow d-lg-none"></span></span></a><!--end:Menu link--><!--begin:Menu sub-->

                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                            <!--begin:Menu link--><a href="blogs"><span class="menu-link py-3"><span
                                                    class="menu-title">Blog</span><span
                                                    class="menu-arrow d-lg-none"></span></span></a><!--end:Menu link--><!--begin:Menu sub-->

                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                            <!--begin:Menu link--><a href="iletisim"><span class="menu-link py-3"><span
                                                    class="menu-title">İletişim</span><span
                                                    class="menu-arrow d-lg-none"></span></span></a><!--end:Menu link--><!--begin:Menu sub-->

                                        </div><!--end:Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->

                            </div>
                            <!--end::Navbar-->


                            <!--begin::Toolbar wrapper-->
                            <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Search-->
                                <div class="d-flex align-items-stretch ms-1 ms-lg-3">

                                    <!--begin::Search-->
                                    <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                        data-kt-search-keypress="true" data-kt-search-min-length="2"
                                        data-kt-search-enter="enter" data-kt-search-layout="menu"
                                        data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                                        <!--begin::Search toggle-->
                                        <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                            id="kt_header_search_toggle">
                                            <div
                                                class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px">
                                                <i class="bi-search"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                        <!--end::Search toggle-->

                                        <!--begin::Menu-->
                                        <div data-kt-search-element="content"
                                            class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                            <!--begin::Wrapper-->
                                            <div data-kt-search-element="wrapper">
                                                <!--begin::Form-->
                                                <form data-kt-search-element="form"
                                                    class="w-100 position-relative mb-3" autocomplete="off">
                                                    <!--begin::Icon-->
                                                    <i
                                                        class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <!--end::Icon-->

                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="search-input  form-control form-control-flush ps-10"
                                                        name="search" value="" placeholder="Search..."
                                                        data-kt-search-element="input" />
                                                    <!--end::Input-->

                                                    <!--begin::Spinner-->
                                                    <span
                                                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                        data-kt-search-element="spinner">
                                                        <span
                                                            class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                    </span>
                                                    <!--end::Spinner-->

                                                    <!--begin::Reset-->
                                                    <span
                                                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                        data-kt-search-element="clear">
                                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></i> </span>
                                                    <!--end::Reset-->

                                                    <!--begin::Toolbar-->
                                                    <div class="position-absolute top-50 end-0 translate-middle-y"
                                                        data-kt-search-element="toolbar">
                                                        <!--begin::Preferences toggle-->
                                                        <div data-kt-search-element="preferences-show"
                                                            class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                            data-bs-toggle="tooltip"
                                                            title="Show search preferences">
                                                            <i class="ki-duotone ki-setting-2 fs-2"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </div>
                                                        <!--end::Preferences toggle-->

                                                        <!--begin::Advanced search toggle-->
                                                        <div data-kt-search-element="advanced-options-form-show"
                                                            class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                            data-bs-toggle="tooltip"
                                                            title="Show more search options">
                                                            <i class="ki-duotone ki-down fs-2"></i>
                                                        </div>
                                                        <!--end::Advanced search toggle-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </form>
                                                <!--end::Form-->

                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200 mb-6"></div>
                                                <!--end::Separator-->
                                                <!--begin::Recently viewed-->
                                                <div data-kt-search-element="results" class="d-none">
                                                    <!--begin::Items-->
                                                    <div class="scroll-y mh-200px mh-lg-350px">
                                                        <!--begin::Category title-->
                                                        <h3 class="fs-5 text-muted m-0  pb-5"
                                                            data-kt-search-element="category-title">
                                                            Users </h3>
                                                        <!--end::Category title-->




                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="/metronic8/demo2/assets/media/avatars/300-6.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                                <span class="fs-7 fw-semibold text-muted">Marketing
                                                                    Manager</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="/metronic8/demo2/assets/media/avatars/300-2.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                                <span class="fs-7 fw-semibold text-muted">Software
                                                                    Engineer</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="/metronic8/demo2/assets/media/avatars/300-9.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                                <span class="fs-7 fw-semibold text-muted">UI/UX
                                                                    Designer</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="/metronic8/demo2/assets/media/avatars/300-14.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                                <span class="fs-7 fw-semibold text-muted">Art
                                                                    Director</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <img src="/metronic8/demo2/assets/media/avatars/300-11.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                                <span class="fs-7 fw-semibold text-muted">System
                                                                    Administrator</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->
                                                        <!--begin::Category title-->
                                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                            data-kt-search-element="category-title">
                                                            Customers </h3>
                                                        <!--end::Category title-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <img class="w-20px h-20px"
                                                                        src="/metronic8/demo2/assets/media/svg/brand-logos/volicity-9.svg"
                                                                        alt="" />
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Company
                                                                    Rbranding</span>
                                                                <span class="fs-7 fw-semibold text-muted">UI
                                                                    Design</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <img class="w-20px h-20px"
                                                                        src="/metronic8/demo2/assets/media/svg/brand-logos/tvit.svg"
                                                                        alt="" />
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Company
                                                                    Re-branding</span>
                                                                <span class="fs-7 fw-semibold text-muted">Web
                                                                    Development</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <img class="w-20px h-20px"
                                                                        src="/metronic8/demo2/assets/media/svg/misc/infography.svg"
                                                                        alt="" />
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Business Analytics
                                                                    App</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">Administration</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <img class="w-20px h-20px"
                                                                        src="/metronic8/demo2/assets/media/svg/brand-logos/leaf.svg"
                                                                        alt="" />
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">EcoLeaf App
                                                                    Launch</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">Marketing</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <img class="w-20px h-20px"
                                                                        src="/metronic8/demo2/assets/media/svg/brand-logos/tower.svg"
                                                                        alt="" />
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div
                                                                class="d-flex flex-column justify-content-start fw-semibold">
                                                                <span class="fs-6 fw-semibold">Tower Group
                                                                    Website</span>
                                                                <span class="fs-7 fw-semibold text-muted">Google
                                                                    Adwords</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->

                                                        <!--begin::Category title-->
                                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                            data-kt-search-element="category-title">
                                                            Projects </h3>
                                                        <!--end::Category title-->


                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span><span
                                                                            class="path5"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU
                                                                    Themes</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">#45670</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6 fw-semibold">Shopix Mobile App
                                                                    Planning</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">#45690</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                                    Discussion</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">#21090</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->



                                                        <!--begin::Item-->
                                                        <a href="#"
                                                            class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <span class="fs-6 fw-semibold">Dashboard Analitics
                                                                    Launch</span>
                                                                <span
                                                                    class="fs-7 fw-semibold text-muted">#34560</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </a>
                                                        <!--end::Item-->


                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Recently viewed-->
                                                <!--begin::Recently viewed-->
                                                <div class="mb-5" data-kt-search-element="main">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                                        <!--begin::Label-->
                                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                        <!--end::Label-->

                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Items-->
                                                    <div class="scroll-y mh-200px mh-lg-325px">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="ki-duotone ki-laptop fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                                    by Keenthemes</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#45789</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                                    API Project Meeting</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#84050</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                                    Monitoring App Launch</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#84250</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                                    Reference FAQ</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#67945</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                                    App Development</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#84250</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                                    Mobile App</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#45690</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40px me-4">
                                                                <span class="symbol-label bg-light">
                                                                    <i
                                                                        class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                                    UI Design" Launch</a>
                                                                <span
                                                                    class="fs-7 text-muted fw-semibold">#24005</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Recently viewed-->
                                                <!--begin::Empty-->
                                                <div data-kt-search-element="empty" class="text-center d-none">
                                                    <!--begin::Icon-->
                                                    <div class="pt-10 pb-10">
                                                        <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </div>
                                                    <!--end::Icon-->

                                                    <!--begin::Message-->
                                                    <div class="pb-15 fw-semibold">
                                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                        <div class="text-muted fs-7">Please try again with a different
                                                            query</div>
                                                    </div>
                                                    <!--end::Message-->
                                                </div>
                                                <!--end::Empty-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Preferences-->
                                            <form data-kt-search-element="advanced-options-form"
                                                class="pt-1 d-none">
                                                <!--begin::Heading-->
                                                <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                                <!--end::Heading-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Contains the word" name="query" />
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <!--begin::Radio group-->
                                                    <div class="nav-group nav-group-fluid">
                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check" name="type"
                                                                value="has" checked="checked" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                                All
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check" name="type"
                                                                value="users" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                Users
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check" name="type"
                                                                value="orders" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                Orders
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check" name="type"
                                                                value="projects" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                Projects
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Radio group-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="assignedto"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Assigned to" value="" />
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="collaborators"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Collaborators" value="" />
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <!--begin::Radio group-->
                                                    <div class="nav-group nav-group-fluid">
                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check"
                                                                name="attachment" value="has"
                                                                checked="checked" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                                Has attachment
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label>
                                                            <input type="radio" class="btn-check"
                                                                name="attachment" value="any" />
                                                            <span
                                                                class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                                Any
                                                            </span>
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Radio group-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <select name="timezone" aria-label="Select a Timezone"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_header_search"
                                                        data-placeholder="date_period"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="next">Within the next</option>
                                                        <option value="last">Within the last</option>
                                                        <option value="between">Between</option>
                                                        <option value="on">On</option>
                                                    </select>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="row mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <input type="number" name="date_number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Lenght" value="" />
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="date_typer" aria-label="Select a Timezone"
                                                            data-control="select2"
                                                            data-dropdown-parent="#kt_header_search"
                                                            data-placeholder="Period"
                                                            class="form-select form-select-sm form-select-solid">
                                                            <option value="days">Days</option>
                                                            <option value="weeks">Weeks</option>
                                                            <option value="months">Months</option>
                                                            <option value="years">Years</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                        data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                                    <a href="/metronic8/demo2/../demo2/utilities/search/horizontal.html"
                                                        class="btn btn-sm fw-bold btn-primary"
                                                        data-kt-search-element="advanced-options-form-search">Search</a>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Preferences-->
                                            <!--begin::Preferences-->
                                            <form data-kt-search-element="preferences" class="pt-1 d-none">
                                                <!--begin::Heading-->
                                                <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                                <!--end::Heading-->

                                                <!--begin::Input group-->
                                                <div class="pb-4 border-bottom">
                                                    <label
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                        <span
                                                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                            Projects
                                                        </span>

                                                        <input class="form-check-input" type="checkbox"
                                                            value="1" checked="checked" />
                                                    </label>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="py-4 border-bottom">
                                                    <label
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                        <span
                                                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                            Targets
                                                        </span>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="1" checked="checked" />
                                                    </label>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="py-4 border-bottom">
                                                    <label
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                        <span
                                                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                            Affiliate Programs
                                                        </span>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="1" />
                                                    </label>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="py-4 border-bottom">
                                                    <label
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                        <span
                                                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                            Referrals
                                                        </span>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="1" checked="checked" />
                                                    </label>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="py-4 border-bottom">
                                                    <label
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                        <span
                                                            class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                            Users
                                                        </span>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="1" />
                                                    </label>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end pt-7">

                                                    <button type="submit"
                                                        class="btn btn-sm fw-bold btn-primary">Kadyet</button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Preferences-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Search-->
                                </div>

                                <div class="d-flex align-items-center ms-1 ms-lg-3">

                                    <!--begin::Menu toggle-->
                                    <a href="#"
                                        class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="bi-list"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span><span class="path6"></span><span
                                                class="path7"></span><span class="path8"></span><span
                                                class="path9"></span><span class="path10"></span></i> <i
                                            class="ki-duotone ki-moon theme-dark-show fs-1"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                    <!--begin::Menu toggle-->

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">

                                        <!--begin::Menu item for guest (not logged in)-->
                                        @guest
                                        <div class="menu-item px-3 my-0">
                                            <a href="{{ theme()->getPageUrl('admin/login') }}" class="menu-link px-3 py-2">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Giriş Yap') }}
                                                </span>
                                            </a>
                                        </div>
                                        @endguest
                                        <!--end::Menu item-->

                                        <!--begin::Menu item for authenticated (logged in) users-->
                                        @auth
                                        <div class="menu-item px-3 my-0">
                                            <a href="{{ theme()->getPageUrl('settings.index') }}" class="menu-link px-3 py-2">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('My Profile') }}
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3 my-0">
                                            <a href="#" data-action="{{ theme()->getPageUrl('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true" class="button-ajax menu-link px-3 py-2">
                                                <span class="menu-icon">
                                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    {{ __('Sign Out') }}
                                                </span>
                                            </a>
                                        </div>
                                        @endauth
                                        <!--end::Menu item-->

                                        <!-- Other menu items... -->

                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <!--end::Theme mode-->


                                <!--begin::Aside mobile toggle-->
                                <!--end::Aside mobile toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <div id="kt_app_content" class="app-content  flex-column-fluid ">


                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container  container-xxl ">
                        <!--begin::Home card-->
                        <div class="card">
                            <!--begin::Body-->
                            <div class="card-body p-lg-20">
                                <!--begin::Section-->
                                <div class="mb-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 mb-7">Blog Yazıları</h3>
                                    <!--end::Title-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-9"></div>
                                    <!--end::Separator-->

                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        @foreach ($blog as $blogs)
                                            <!--end::Feature post-->
                                            <div class="col-md-6 justify-content-between d-flex flex-column">
                                                <!--begin::Post-->
                                                <div class="ps-lg-6 mb-16">
                                                    <!--begin::Body-->
                                                    <div class="mb-6">
                                                        <!--begin::Title-->
                                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                            style="{{ asset($blogs->blog_front_image) }}')"
                                                            data-fslightbox="lightbox-video-tutorials" href="#">

                                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                                                                style="background-image:url({{ asset($blogs->blog_front_image) }})">
                                                            </div>
                                                        </a>
                                                        <a href="{{ route('blog.webShowBlog', ['title' => $blogs->blog_title, 'id' => $blogs->id]) }}"
                                                            class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                            {{ $blogs->blog_title }} </a>
                                                        <!--end::Title-->

                                                        <!--begin::Text-->
                                                        <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">
                                                            {{ $blogs->blog_description }}
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Body-->

                                                    <!--begin::Footer-->
                                                    <div class="d-flex flex-stack flex-wrap">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center pe-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-3">
                                                                <img src="/metronic8/demo1/assets/media/avatars/300-20.jpg"
                                                                    class="" alt="">
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Text-->
                                                            <div class="fs-5 fw-bold">
                                                                <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
                                                                    class="text-gray-700 text-hover-primary">Yazar</a>

                                                                <span class="text-muted">on {{ $blogs->created_at }}</span>
                                                            </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Item-->

                                                        <!--begin::Label-->
                                                        <span
                                                            class="badge badge-light-info fw-bold my-2">{{ $blogs->blog_categories_id }}</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Footer-->
                                                </div>
                                                <!--end::Post-->




                                            </div>
                                        @endforeach


                                        <!--end::Col-->

                                        <!--begin::Col-->

                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Row-->
                                </div>
                                <!--end::Section-->







                                <!--begin::Section-->
                                <div class="mb-17">
                                    <!--begin::Content-->
                                    <div class="d-flex flex-stack mb-5">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-900">Yazılar</h3>
                                        <!--end::Title-->

                                        <!--begin::Link-->
                                        <a href="#" class="fs-6 fw-semibold link-primary">
                                            Tüm Yazıları Göster
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-9"></div>
                                    <!--end::Separator-->

                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        @foreach ($blog as $blogg)
                                            <div class="col-md-4">
                                                <!--begin::Feature post-->
                                                <div class="card-xl-stretch me-md-6">
                                                    <!--begin::Image-->
                                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                        style="{{ asset($blogg->blog_front_image) }}')"
                                                        data-fslightbox="lightbox-video-tutorials" href="#">

                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                                                            style="background-image:url({{ asset($blogg->blog_front_image) }})">
                                                        </div>
                                                    </a>
                                                    <!--end::Image-->

                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('blog.webShowBlog', ['title' => $blogg->blog_title, 'id' => $blogg->id]) }}"
                                                            class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                            {{ $blogg->blog_title }} </a>
                                                        <!--end::Title-->

                                                        <!--begin::Text-->
                                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">
                                                            {{ $blogg->blog_description }}
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bold">
                                                            <!--begin::Author-->
                                                            <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html"
                                                                class="text-gray-700 text-hover-primary">Jane Miller</a>
                                                            <!--end::Author-->

                                                            <!--begin::Date-->
                                                            <span class="text-muted">{{ $blogg->created_at }}</span>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Feature post-->



                                            </div>
                                            <!--end::Col-->
                                        @endforeach
                                        <!--begin::Col-->

                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->









                                <!--begin::latest instagram-->
                                <div class="">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Content-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Title-->
                                            <h3 class="text-gray-900">Son Instagram Postları</h3>
                                            <!--end::Title-->

                                            <!--begin::Link-->
                                            <a href="#" class="fs-6 fw-semibold link-primary">
                                                İnstagrama Git
                                            </a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                                        <!--end::Separator-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Row-->
                                    <div class="row g-10 row-cols-2 row-cols-lg-5">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="/metronic8/demo1/assets/media/stock/900x600/16.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/16.jpg')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="/metronic8/demo1/assets/media/stock/900x600/13.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/13.jpg')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="/metronic8/demo1/assets/media/stock/900x600/19.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/19.jpg')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="/metronic8/demo1/assets/media/stock/900x600/15.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/15.jpg')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="/metronic8/demo1/assets/media/stock/900x600/12.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('/metronic8/demo1/assets/media/stock/900x600/12.jpg')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--begin::Row-->
                                </div>
                                <!--end::latest instagram-->



                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Home card-->

                    </div>
                    <!--end::Content container-->
                </div>






                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-xxl  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">Piemsoft</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->

                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
             </div>


            </div>

        </div>

    </div>



    <!--end::Modal - Users Search--> <!--end::Modals-->
    <script src="http://127.0.0.1:8000/demo1/plugins/global/plugins.bundle.js"></script>
    <script src="http://127.0.0.1:8000/demo1/js/scripts.bundle.js"></script>
    <script src="http://127.0.0.1:8000/demo1/js/custom/widgets.js"></script>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "/metronic8/demo2/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="demo1/plugins/global/plugins.bundle.js"></script>
    <script src="demo1/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="demo1/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="demo1/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="demo1/js/widgets.bundle.js"></script>
    <script src="demo1/js/custom/widgets.js"></script>
    <script src="demo1/js/custom/apps/chat/chat.js"></script>
    <script src="demo1/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="demo1/js/custom/utilities/modals/create-app.js"></script>
    <script src="demo1/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="demo1/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>
