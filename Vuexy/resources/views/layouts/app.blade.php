<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="assets/"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>
    @include('app.includes.head')
    <!-- End : theme-store js -->
</head>

<body>

<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('app.includes.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

           @include('app.includes.header')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('app.includes.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<div class="buy-now">
    <a
        href="https://1.envato.market/vuexy_admin"
        target="_blank"
        class="btn btn-danger btn-buy-now"
    >Buy Now</a
    >
</div>

@include('app.includes.scripts')
@yield('custom-script')
</body>
</html>
