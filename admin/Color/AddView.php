<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Màu Sắc
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
                            <div class="row clearfix">
							<form action="./Color/Add.php" method="get" autocomplete="off">
							<div class="col-sm-4">
                                    <div class="form-group focused">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Mã Màu" name="id" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="FFFFF" maxlength="6" required name="hex">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
								<div class="col-sm-4">
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nhóm" required name="group">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary waves-effect pull-right">
                                    <i class="material-icons">add_box</i>
                                    <span>THÊM MÀU</span>
                                </button>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
			