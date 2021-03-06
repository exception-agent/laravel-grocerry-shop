<!--   Core JS Files   -->

<script src="<?php echo e(asset('admin_assets/js/cloudflare.jquery.js')); ?>">
</script>
<script src="<?php echo e(asset('admin_assets/js/core/popper.min.js')); ?>">
</script>
<script src="<?php echo e(asset('admin_assets/js/bootstrap-material-design.js')); ?>">
</script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo e(site_setting('google_api_key')); ?>&libraries=places&sensor=false"></script>


<!--  Angular js plaugin  -->
<script src="<?php echo e(asset('admin_assets/js/angular.js')); ?>"></script>
<script src="<?php echo e(asset('admin_assets/js/angular-sanitize.js')); ?>"></script>
<script type="text/javascript">
  var app = angular.module('App', ['ngSanitize']);
  var APP_URL = <?php echo json_encode(url('/')); ?>; 
</script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="<?php echo e(asset('admin_assets/js/plugins/moment.min.js')); ?>">
</script>
<!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="<?php echo e(asset('admin_assets/js/plugins/bootstrap-datetimepicker.min.js')); ?>">
</script>


<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo e(asset('admin_assets/js/plugins/jasny-bootstrap.min.js')); ?>">
</script>

<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="<?php echo e(asset('admin_assets/js/material-dashboard.js?v=2.0.1')); ?>">
</script>
<!-- Dashboard scripts -->
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js">
</script>
<!-- Forms Validations Plugin -->
<script src="<?php echo e(asset('admin_assets/js/plugins/jquery.validate.min.js')); ?>">
</script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo e(asset('admin_assets/js/plugins/jquery.datatables.js')); ?>">
</script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="<?php echo e(asset('admin_assets/js/plugins/sweetalert2.js')); ?>">
</script>



<script src="<?php echo e(asset('admin_assets/js/jquery.gre.js')); ?>"></script>
 <script src="<?php echo e(url('admin_assets/editor/editor.js')); ?>"></script>
      <script type="text/javascript"> 
        $("[name='submit']").click(function(){
          $('#content').text($('#txtEditor').Editor("getText"));
          $('#message').text($('#txtEditor').Editor("getText"));
          $('#answer').text($('#txtEditor').Editor("getText"));
        });
      </script>

<script src="<?php echo e(asset('admin_assets/js/common.js')); ?>"> </script>




<script type="text/javascript">
  var ajax_url_list ={
    all_users                  : '<?php echo e(route("admin.all_users")); ?>',
    all_stores            : '<?php echo e(route("admin.all_stores")); ?>',
    all_drivers                : '<?php echo e(route("admin.all_drivers")); ?>',
    all_orders                 : '<?php echo e(route("admin.all_orders")); ?>',
    sort_order                 : '<?php echo e(route("admin.sort_order")); ?>',
    update_category            : '<?php echo e(route("admin.update_category")); ?>',
    menu_time                  : '<?php echo e(route("admin.menu_time","@id")); ?>',
    update_menu_time           : '<?php echo e(route("admin.update_menu_time")); ?>',
    remove_menu_time           : '<?php echo e(route("admin.remove_menu_time","@id")); ?>',
    update_menu_item           : '<?php echo e(route("admin.update_menu_item")); ?>',
    delete_menu                : '<?php echo e(route("admin.delete_menu")); ?>',
    preparation                : '<?php echo e(route("admin.preparation")); ?>',
    update_preparation_time    : '<?php echo e(route("admin.update_preparation_time")); ?>',
    all_payout                 : '<?php echo e(route("admin.all_payout")); ?>',
    ajax_help_subcategory      : '<?php echo e(route("admin.ajax_help_subcategory","@id")); ?>',
  };

</script>
<script type="text/javascript">
  function getUrl(key, replaceValues={}) {
    url = ajax_url_list[key];
    var replace_url = url;
    $.each(replaceValues, function(i, v) {
      replace_url = replace_url.replace('@'+i, v);
    });
    return replace_url;
  }


 </script>

<script type="text/javascript">
    $(document).ready(function() {
        md.initFormExtendedDatetimepickers();
    });
</script>

  <script>

  $("select").wrap('<div class="select"></div>');
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>

</html>