<?php
require_once('Database/IMySQL.php');
require_once('Database/Product.php');
require_once('Database/KennyPaintDatabase.php');
?>
<?php
$ProductCategoryActive = 'active';
$jsPlugins = ' <!-- Jquery DataTable Plugin Js -->
    <script src="./plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="./plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="./plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>';
?>
<?php
include_once('Elements/header.php')
?>
<?php
include_once('Product/ProductList.php');
?>
<?php
include_once('Elements/footer.php')
?>
        