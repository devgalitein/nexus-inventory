<?php 
      $page_title = "Admin | Inventory";
      $module_name ="Inventory";
      include './layout/header.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inventory</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="link"><a href="#">Export</a></li> -->
                        <button type="button" class="btn btn-white">Export</button>
                        <!-- <li class="link"><a href="#">Import</a></li> -->
                        <button type="button" class="btn btn-white">Import</button>
                        <a class="btn btn-success" href="./inventory-create.php">
                            Add Product
                        </a>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table id="inventory" class="table table-striped table-bordered inventory">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>SKU</th>
                            <th>Incoming</th>
                            <th>Committed</th>
                            <th>Available</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GLUN Bolt Electronic Portable Fishing Hook Type Digital LED Screen Luggage Weighing
                                Scale</td>
                            <td>1234567890</td>
                            <td>20</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Active</td>
                            <td>
                                <a href="./inventory-edit.php"><i class="fa fa-edit mr-1"></i></a>
                                <a href="#"
                                    id="link"><i class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bajaj Rex 500W Mixer Grinder</td>
                            <td>5151515151</td>
                            <td>30</td>
                            <td>50</td>
                            <td>100</td>
                            <td>Active</td>
                            <td>
                                <a href="./inventory-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#"
                                id="link"><i class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>iQOO Z6 Lite 5G</td>
                            <td>6666666661</td>
                            <td>40</td>
                            <td>50</td>
                            <td>100</td>
                            <td>Active</td>
                            <td>
                                <a href="./inventory-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#"
                                id="link"><i class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Samsung Galaxy M13</td>
                            <td>1666666666</td>
                            <td>50</td>
                            <td>150</td>
                            <td>200</td>
                            <td>Active</td>
                            <td>
                                <a href="./inventory-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#"
                                id="link"><i class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>HP 15s-Ryzen 3 3250U 8GB SDRAM/256GB SSD 15.6inch(39.6cm) HD, Micro-Edge Laptop</td>
                            <td>377777777</td>
                            <td>50</td>
                            <td>100</td>
                            <td>150</td>
                            <td>Active</td>
                            <td>
                                <a href="./inventory-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#"
                                id="link"><i class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!--sidebar div closed-->
<!-- footer -->
<?php include './layout/footer.php';?>
<!-- /footer -->
<!-- datatable -->
<script>
$(function() {
    $('.inventory').DataTable();
});

$(document).on("click", "#link", function() {
    swal({
            title: "Delete Product",
            text: "Are you sure you want to delete?",
            icon: "warning",
            buttons: [true, "Delete"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                table.hide();
            }
            return false;
        });
});
</script>
<!-- /datatable -->