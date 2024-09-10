
<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        @yield('title')
    </title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="rcCFW4L2PC94SoUDGLm8PbO1j3tAMXx2J8uBLwXM" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('images/logo') . '/' . $company[0]->fav }}" /> --}}

    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet"
        href="{{ asset('assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: "",
            themesPath: "",
            defaultStyle: "light",
            defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
            displayCustomizer: "true",
            lang: "en",
            pathResolver: function(path) {
                var resolvedPaths = {
                    // Core stylesheets
                    "core.css": "{{ asset('assets/css/core.css') }}",
                    "core-dark.css": "{{ asset('assets/css/core-dark.css') }}",

                    // Themes
                    "theme-default.css": "{{ asset('assets/css/theme-default.css') }}",
                    "theme-default-dark.css": "{{ asset('assets/css/theme-default-dark.css') }}",
                    "theme-bordered.css": "{{ asset('assets/css/theme-bordered.css') }}",
                    "theme-bordered-dark.css": "{{ asset('assets/css/theme-bordered-dark.css') }}",
                    "theme-semi-dark.css": "{{ asset('assets/css/theme-semi-dark.css') }}",
                    "theme-semi-dark-dark.css": "{{ asset('assets/css/theme-semi-dark-dark.css') }}",
                };
                return resolvedPaths[path] || path;
            },
            controls: [
                "rtl",
                "style",
                "headerType",
                "contentLayout",
                "layoutCollapsed",
                "layoutNavbarOptions",
                "themes",
            ],
        });
    </script>

    <style>
        #template-customizer{
            display: none !important;
        }
    </style>

    @yield('style')
  </head>

  <body>

    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('layouts.vendor.sidebar')

        <!-- Layout page -->
        <div class="layout-page">
          <!-- BEGIN: Navbar-->
            @include('layouts.vendor.header')
          <!-- END: Navbar-->

          <!-- Content wrapper -->
          <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->

            <!-- Footer -->
            @include('layouts.vendor.footer')
            <!-- / Footer -->
          </div>
          <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->

    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Vendor JS-->
    <script
        src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}">
    </script>
    <script
        src="{{ asset('assets/vendor/libs/popper/popper.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}">
    </script>
    <script
        src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}">
    </script>
    <script
        src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}">
    </script>
    <script
        src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <!-- END: Page JS-->

    @yield('scripts')
  </body>
</html>
