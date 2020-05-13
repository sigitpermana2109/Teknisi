<script>
    var loadFile = function (event) {
        var output = document.getElementById('foto_profile');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<!-- Theme JS files -->
<script
    src="<?= base_url()?>/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="<?= base_url()?>/global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/pickers/daterangepicker.js"></script>

<script src="<?= base_url()?>/assets/js/app.js"></script>
<script src="<?= base_url()?>/global_assets/js/demo_pages/dashboard.js"></script>

<script
    src="<?= base_url()?>/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/forms/selects/select2.min.js"></script>

<script src="<?= base_url()?>/global_assets/js/demo_pages/datatables_basic.js"></script>

<script
    src="<?= base_url()?>/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
<script
    src="<?= base_url()?>/global_assets/js/plugins/notifications/noty.min.js"></script>

<script src="<?= base_url()?>/global_assets/js/demo_pages/extra_jgrowl_noty.js"></script>
</body>
</html>