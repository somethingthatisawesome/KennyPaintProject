<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$db = new KennyPaintDatabase();
$product = new Product();
$products = $db->get($product);
?>
 <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Danh sách sản phẩm
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Miêu tả</th>
                                            <th>Danh mục</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Miêu tả</th>
                                            <th>Danh mục</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php foreach ($products as $value)
									{
										?>
                                        <tr>
                                            <td><?=$value->getName()?></td>
                                            <td><?=substr($value->getDescription(),0,51);echo"...";?></td>
                                            <td><?=$value->getCategoryID()?></td>
                                            <td><a href="Product/Edit.php?id=<?=$value->getID()?>">Sửa</a></td>
                                            <td><a href="Product/Delete.php?id=<?=$value->getID()?>">Xóa</a></td>
                                        </tr>
										<?php
									};
										?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->