<?php 
      $page_title = "Admin | Add Product";
      $module_name ="Add Product";
      include './layout/header.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="row col-sm-6">
                    <div>
                        <a class="nav-link" href="product-list.php" role="button">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div>
                        <h1>Add product</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- form start -->
                    <form method="post" action="http://localhost/inventory_management/">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Basic Details</h3>
                            </div>
                            <!-- .card-body -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title"
                                        placeholder="Short sleeve-shirt" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <!-- <input
                                type="text"
                                class="form-control"
                                id="description"
                                placeholder="Short sleeve-shirt"
                              /> -->
                                    <textarea class="form-control" name="content" id="editor">
                                </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <!-- .card-body -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Media</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Media</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" />
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card card-primary">
                            <!-- .card-header -->
                            <div class="card-header">
                                <h3 class="card-title">Pricing</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- .card-body -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="$0.0" />
                                </div>
                                <div class="form-group">
                                    <label for="compareprice">Compare at price</label>
                                    <input type="text" class="form-control" id="compareprice" placeholder="$0.0" />
                                </div>
                                <div class="form-group">
                                    <label for="costperitem">Cost per item</label>
                                    <input type="text" class="form-control" id="costperitem" placeholder="$0.0" />
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- .card-body -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Inventory</h3>
                            </div>
                            <div class="row" style="margin: 0px 10px">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>SKU (Stock Keeping Unit)</label>
                                        <input type="text" class="form-control" name="sku" id="sku" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Barcode (ISBN, UPC, GTIN, etc.)</label>
                                        <input type="text" class="form-control" name="barcode" id="barcode" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <!-- .card-body -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quantity</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" />
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="./product-list.php" class="btn btn-danger float-right mr-2">Cancel</a>
                            <button type="submit" class="btn btn-primary float-right mr-2">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

                <!--/.col (left) -->

                <!-- right column -->
                <div class="col-md-4">
                    <!-- Form Element sizes -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product status</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- general form elements disabled -->
                    <div class="card card-primary">
                        <!-- card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Product organization</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- .card-body -->
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select class="form-control">
                                        <option>Animals & Pet Supplies</option>
                                        <option>Apparel & Accessories</option>
                                        <option>Electronics</option>
                                        <option>Hardware</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="producttype">Product Type</label>
                                    <input type="text" class="form-control" name="producttype" id="producttype"
                                        placeholder="e.g., T-Shirt" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="vendor">Vendor</label>
                                    <input type="text" class="form-control" name="vendor" id="vendor" />
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- general form elements disabled -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!--sidebar div closed-->
<!-- footer -->
<?php include './layout/footer.php';?>
<!-- /footer -->