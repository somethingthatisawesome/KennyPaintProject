<?php
include_once("/../Database/KennyPaintDatabase.php");
include_once("/../Database/IMySQL.php");
include_once("/../Database/Color.php");
$db = new KennyPaintDatabase();
$color = new Color();
$colors = $db->get($color);
?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Danh sách màu
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
                                            <th>Mã Màu</th>
                                            <th>Giá trị</th>
                                            <th>Nhóm</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Mã Màu</th>
                                            <th>Giá trị</th>
                                            <th>Nhóm</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php foreach ($colors as $value)
									{
										?>
                                        <tr>
                                            <td><?=$value->getID()?></td>
                                            <td><?=strtoupper($value->getHex())?> <span style="background-color:#<?=$value->getHex()?>;width:20px;height:20px;float:right;"></span></td>
                                            <td><?=$value->getGroup()?></td>
                                            <td><a href="Color/Edit.php?id=<?=$value->getID()?>">Sửa</a></td>
                                            <td><a href="Color/Delete.php?id=<?=$value->getID()?>">Xóa</a></td>
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