<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{asset('dashboarde/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('dashboarde/css/core/libs.min.css')}}">
        <!-- Flatpickr css -->
        <link rel="stylesheet" href="{{asset('dashboarde/vendor/flatpickr/dist/flatpickr.min.css')}}">
        <!-- qompac-ui Design System Css -->
        <link rel="stylesheet" href="{{asset('dashboarde/css/qompac-ui.minf700.css?v=1.0.1')}}">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/custom.minf700.css?v=1.0.1') }}">
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{asset('dashboarde/css/dark.minf700.css?v=1.0.1')}}">

        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{asset('dashboarde/css/customizer.minf700.css?v=1.0.1')}}" >

        <!-- RTL Css -->
        <link rel="stylesheet" href="{{asset('dashboarde/css/rtl.minf700.css?v=1.0.1')}}">

        <link rel="stylesheet" href="{{asset('dashboarde/vendor/swiperSlider/swiper-bundle.minf700.css')}}">


        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    </head>
    <body class="dual-compact">
        <div id="app">
            @yield('main-content')
        </div>

        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('dashboarde/js/core/libs.min.js') }}"></script>

        <script src="{{ asset('dashboarde/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
        <script src="{{ asset('dashboarde/js/plugins/flatpickr.js') }}" defer></script>


        <script src="{{ asset('dashboarde/js/plugins/select2.js') }}" defer></script>
        <!-- Plugin Scripts -->
        <!-- Slider-tab Script -->
        <script src="{{ asset('dashboarde/js/plugins/slider-tabs.js') }}"></script>
        <!-- Lodash Utility -->
        <script src="{{ asset('dashboarde/vendor/lodash/lodash.min.js') }}"></script>
        <!-- Utilities Functions -->
        <script src="{{ asset('dashboarde/js/iqonic-script/utility.min.js') }}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('dashboarde/js/iqonic-script/setting.min.js') }}"></script>
        <!-- Settings Init Script -->
        <script src="{{ asset('dashboarde/js/setting-init.js') }}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ asset('dashboarde/js/core/external.min.js') }}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('dashboarde/js/charts/widgetchartsf700.js?v=1.0.1') }}" defer></script>
        <!-- Dashboard Script -->
        <script src="{{ asset('dashboarde/js/charts/dashboardf700.js?v=1.0.1') }}" defer></script>
        <!-- qompacui Script -->
        <script src="{{ asset('dashboarde/js/qompac-uif700.js?v=1.0.1') }}" defer></script>
        <script src="{{ asset('dashboarde/js/sidebarf700.js?v=1.0.1') }}" defer></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cooperativeIdInput = document.getElementById('accountCooperativeId');

                // Get the selected cooperative ID from localStorage and populate the hidden input
                const storedCooperativeId = localStorage.getItem('defaultCooperativeId');
                if (cooperativeIdInput && storedCooperativeId) {
                    cooperativeIdInput.value = storedCooperativeId;
                }
            });
        </script>
    </body>
</html>
