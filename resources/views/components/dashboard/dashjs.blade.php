 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="{{ asset('dashboarde/js/core/libs.min.js') }}"></script>

 <script src="{{asset('dashboarde/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
 <script src="{{asset('dashboarde/js/plugins/flatpickr.js')}}" defer></script>


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

