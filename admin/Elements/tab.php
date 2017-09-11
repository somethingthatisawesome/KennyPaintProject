<div class="block-header">
                <h2>TABS</h2>
            </div>
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Quản lý các Page của Website
                                <small>Add quick, dynamic tab functionality to transition through panes of local content</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#gioithieu" data-toggle="tab">Giới thiệu</a></li>
                                <li role="presentation"><a href="#sanpham" data-toggle="tab">Sản phẩm</a></li>
                                <li role="presentation"><a href="#dichvu" data-toggle="tab">Dịch vụ</a></li>
                                <li role="presentation"><a href="#duan" data-toggle="tab">Dự án</a></li>
								<li role="presentation"><a href="#timdaily" data-toggle="tab">Tìm đại lý</a></li>
								<li role="presentation"><a href="#vecongty" data-toggle="tab">Về công ty</a></li>
								<li role="presentation"><a href="#tuyendung" data-toggle="tab">Tuyển dụng</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                             <?php
							 include_once('GioiThieuTab.php');
							 include_once('SanPhamTab.php');
							 include_once('DichVuTab.php');
							 ?>
                        </div>
                    </div>
                </div>
            </div>
<?php
include_once('saveButton.php');
?>