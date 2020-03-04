<div class="app-main__outer">
<form action="index.php?ctrller=catalog&act=add" method="post" enctype="multipart/form-data">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>
                                        Thêm Danh mục
                                    </div>
                                </div>
                                
                            <div class="page-title-actions">
                                <a href="index.php?ctrller=catalog" class="btn-wide btn btn-danger text-right">Huỷ bỏ</a>
                                <input type="submit" class="btn-wide btn btn-info text-right" name="add-catalog" value="Lưu lại">
                            </div>
                            
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Thông tin chung</h5>
                                                    <div class="position-relative form-group"><label class="">Tên danh mục</label><input name="name"  type="text" class="form-control" required></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Thông tin thêm</h5>
                                                    <div class="position-relative form-group"><label class=""><strong>Hình Ảnh</strong></label><input name="image"  type="file" class="form-control-file" required></div>
                                                    <a href="index.php?ctrller=catalog" class="btn-wide btn btn-danger text-right">Huỷ bỏ</a>
                                                    <input type="submit" class="btn-wide btn btn-info text-right" name="add-catalog" value="Lưu lại">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </form>