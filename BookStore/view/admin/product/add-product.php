
<div class="app-main__outer">
<form action="index.php?ctrller=product&act=add" method="post" enctype="multipart/form-data">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>
                                        Thêm sản phẩm
                                    </div>
                                </div>
                                
                            <div class="page-title-actions">
                                <a href="index.php?ctrller=product" class="btn-wide btn btn-danger text-right">Huỷ bỏ</a>
                                <input type="submit" class="btn-wide btn btn-info text-right" name="add-product" value="Lưu lại">
                            </div>
                            
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Thông tin chung</h5>
                                                    <div class="position-relative form-group"><label class="">Tên sản phẩm</label><input name="name"  type="text" class="form-control" required></div>
                                                    <div class="position-relative form-group"><label class="">Tác giả</label><input name="author"  type="text" class="form-control" required></div>
                                                    <div class="position-relative form-group"><label class="">Nhà xuất bản</label><input name="nxb"  type="text" class="form-control required"></div>                                                    
                                                    <div class="position-relative form-group"><label class="">Mô tả chung</label><textarea name="mota" rows="9" id="exampleText" class="form-control required"></textarea></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Thông tin thêm</h5>
                                                    <div class="position-relative form-group"><label class="">Danh mục</label>
                                                        <select type="select" id="exampleCustomSelect" name="idCatalog" class="custom-select" required>
                                                            <option value="">Select</option>
                                                            <?php
                                                                foreach ($listCatalog as $cat) {
                                                                    echo '
                                                                        <option value="'.$cat['id'].'">'.$cat['name'].'</option>
                                                                    ';
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label class=""><strong>Giá bán</strong></label>
                                                        <div class="input-group"><input type="text" name="price" class="form-control" required>
                                                            <div class="input-group-append"><span class="input-group-text">VNĐ</span></div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative form-group"><label class=""><strong>Giá Giá khuyến mãi</strong></label>
                                                        <div class="input-group"><input type="text" name="specialPrice" class="form-control" required>
                                                            <div class="input-group-append"><span class="input-group-text">VNĐ</span></div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="">Trạng thái</label>
                                                        <select type="select" id="exampleCustomSelect" name="status" class="custom-select" required>
                                                            <option value="0">Select</option>
                                                            <option value="1">Lưu tạm</option>
                                                            <option value="0">Đang bán</option>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label class=""><strong>Ảnh chính</strong></label><input name="image"  type="file" class="form-control-file" required></div>
                                                    <div class="position-relative form-group"><label class=""><strong>Ảnh phụ</strong></label><input name="images[]"  type="file" class="form-control-file" required multiple></div>
                                                    <a href="index.php?ctrller=product" class="btn-wide btn btn-danger text-right">Huỷ bỏ</a>
                                                    <input type="submit" class="btn-wide btn btn-info text-right" name="add-product" value="Lưu lại">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </form>