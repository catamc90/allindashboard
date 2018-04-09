<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
<!--    AllInDashBoard-->
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script defer src="assets/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.js"></script>

<script src="./assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="./assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="./assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="./assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="./assets/js/raphael-min.js"></script>
<!--<script src="./assets/js/morris.min.js"></script>-->
<script src="./assets/js/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<!--<script src="./assets/js/jquery.toast.js"></script>-->
<!-- Chart JS -->
<!--<script src="./assets/js/dashboard1.js"></script>-->
<!--<script src="./assets/js/jquery.toast.js"></script>-->


<!-- date -->
<script src="./assets/js/moment.js"></script>
<script src="./assets/js/bootstrap-material-datetimepicker.js"></script>

<!-- news.php-->
<script src="./assets/js/jquery.knob.js"></script>
<script>
    $(function() {
        $('[data-plugin="knob"]').knob();
    });
</script>
<script>
    $(function() {
        $(".dial").knob();
    });
</script>
<!-- end news.php-->


<!-- Date Picker Plugin JavaScript -->
<script src="./assets/js/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="./assets/js/bootstrap-timepicker.min.js"></script>
<script src="./assets/js/daterangepicker.js"></script>

<script>
    // MAterial Date picker

    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker

    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
</script>


<div class="jq-toast-wrap top-right"><div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #ff6849;"></span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">Welcome to Elite admin</h2>Use the predefined ones, or specify a custom position object.</div></div></body></html>