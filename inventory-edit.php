<?php 
      $page_title = "Admin | Product Edit";
      $module_name ="Edit Product";
      include './layout/header.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="row col-sm-6">
                    <div>
                        <a class="nav-link" href="./inventory.php" role="button">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div>
                        <h1>Edit Product</h1>
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
                <div class="col-md-12">
                    <!-- form start -->
                    <form action="http://localhost/inventory_management/" method="post">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Product</h3>
                            </div>
                            <!-- .card-body -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Product</label>
                                    <input type="text" class="form-control" id="title" placeholder="Short sleeve-shirt"
                                        value="HP15s" />
                                </div>
                                <div class="form-group">
                                    <label>SKU (Stock Keeping Unit)</label>
                                    <input type="text" class="form-control" name="sku" id="sku" value="1234565789" />
                                </div>
                                <div class="form-group">
                                    <label for="costperitem">Incoming</label>
                                    <input type="text" class="form-control" id="costperitem" placeholder="$0.0"
                                        value="50" />
                                </div>
                                <div class="form-group">
                                    <label for="costperitem">Committed</label>
                                    <input type="text" class="form-control" id="costperitem" placeholder="$0.0"
                                        value="30" />
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Available</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="2" />
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Status</label>
                                    <select class="form-control" id="status" name="status" value="Active">
                                        <option value="Active">Active</option>
                                        <option value="Draft">Deactive</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <a href="./inventory.php" class="btn btn-danger float-right mr-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary float-right mr-2">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
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