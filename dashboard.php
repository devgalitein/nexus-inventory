<?php 
      $page_title = "Admin | Dashboard";
      $module_name ="Dashboard";
      include './layout/header.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53</h3>

                            <p>Total Categories</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-solid fa-briefcase"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>250</h3>

                            <p>Total Products</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-solid fa-store"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>1500</h3>

                            <p>Total Sales</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>800</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title text-bold">Products: Out of stock (Stock <=0) </h3>
                        </div>
                        <hr class="mt-0 mb-0"/>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>SKU</th>
                                        <th>Vendor</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>iQOO Z6 Lite 5G</td>
                                        <td>2546</td>
                                        <td>Harshad Dandekar</td>
                                        <td>0</td>
                                        <td><span class="badge badge-primary">Order now</span></td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy M13</td>
                                        <td>9342</td>
                                        <td>Darshita Etel</td>
                                        <td>0</td>
                                        <td><span class="badge badge-primary">Order now</span></td>
                                    </tr>
                                    <tr>
                                        <td>wipro B22D 12.5W Wi-Fi Smart LED Bulb </td>
                                        <td>7489</td>
                                        <td>Appario Retail Private Ltd</td>
                                        <td>0</td>
                                        <td><span class="badge badge-primary">Order now</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header border-0">
                            <h3 class="card-title text-bold">Most selling products</h3>
                        </div>
                        <hr/>
                        <div class="row mb-0">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group date mx-5" id="atDate" data-target-input="nearest">
                                        <span class="mt-1 mr-2 text-bold">At</span>
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#atDate" />
                                        <div class="input-group-append" data-target="#atDate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group date mx-5" id="toDate" data-target-input="nearest">
                                        <span class="mt-1 mr-2 text-bold">To</span>
                                        <input type="text" class="form-control datepicker-input"
                                            data-target="#toDate" />
                                        <div class="input-group-append" data-target="#toDate"
                                            data-toggle="datepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 ml-5">
                                <button class="btn btn-md btn-primary">Filter</button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Region</th>
                                        <th>No of orders</th>
                                        <th>Customer review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>iQOO Z6 Lite 5G</td>
                                        <td>Delhi</td>
                                        <td>5000</td>
                                        <td class="rating">
                                            <input type="radio" name="rating_1" value="5" id="5" checked><label
                                                for="5">☆</label>
                                            <input type="radio" name="rating_1" value="4" id="4"><label
                                                for="4">☆</label>
                                            <input type="radio" name="rating_1" value="3" id="3"><label
                                                for="3">☆</label>
                                            <input type="radio" name="rating_1" value="2" id="2"><label
                                                for="2">☆</label>
                                            <input type="radio" name="rating_1" value="1" id="1"><label
                                                for="1">☆</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy M13</td>
                                        <td>Punjab</td>
                                        <td>2000</td>
                                        <td class="rating">
                                            <input type="radio" name="rating_2" value="5" id="5"><label
                                                for="5">☆</label>
                                            <input type="radio" name="rating_2" value="4" id="4" checked><label
                                                for="4">☆</label>
                                            <input type="radio" name="rating_2" value="3" id="3"><label
                                                for="3">☆</label>
                                            <input type="radio" name="rating_2" value="2" id="2"><label
                                                for="2">☆</label>
                                            <input type="radio" name="rating_2" value="1" id="1"><label
                                                for="1">☆</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Smart LED Bulb </td>
                                        <td>Hatiyana</td>
                                        <td>10,000</td>
                                        <td class="rating">
                                            <input type="radio" name="rating_3" value="5" id="5"><label
                                                for="5">☆</label>
                                            <input type="radio" name="rating_3" value="4" id="4"><label
                                                for="4">☆</label>
                                            <input type="radio" name="rating_3" value="3" id="3" checked><label
                                                for="3">☆</label>
                                            <input type="radio" name="rating_3" value="2" id="2"><label
                                                for="2">☆</label>
                                            <input type="radio" name="rating_3" value="1" id="1"><label
                                                for="1">☆</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title text-bold">Products: Minimum quantity</h3>
                        </div>
                        <hr class="mt-0 mb-0"/>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stock</th>
                                        <th>Minimum qty</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>iQOO Z6 Lite 5G</td>
                                        <td>2000</td>
                                        <td>20</td>
                                        <td>
                                            <a class="btn btn-xs btn-success w-20">Send email</a>
                                            <a class="btn btn-xs btn-warning w-20">Stop Selling</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy M13</td>
                                        <td>1000</td>
                                        <td>20</td>
                                        <td>
                                            <a class="btn btn-xs btn-success w-20">Send email</a>
                                            <a class="btn btn-xs btn-warning w-20">Stop Selling</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Smart LED Bulb </td>
                                        <td>2500</td>
                                        <td>20</td>
                                        <td>
                                            <a class="btn btn-xs btn-success w-20">Send email</a>
                                            <a class="btn btn-xs btn-warning w-20">Stop Selling</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title text-bold">Sales</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <hr/>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-chart" height="200"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> This year
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Last year
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- footer -->
<?php include './layout/footer.php';?>

<script>
     //Date picker
    $('#toDate').datetimepicker({
        format: 'L'
    });
    $('#atDate').datetimepicker({
        format: 'L'
    });
</script>
<!-- /footer -->