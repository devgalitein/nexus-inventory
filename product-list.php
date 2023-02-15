<?php 
      $page_title = "Admin | Products";
      $module_name ="Products";
      include './layout/header.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="link"><a href="#">Export</a></li> -->
                        <button type="button" class="btn btn-white">Export</button>
                        <!-- <li class="link"><a href="#">Import</a></li> -->
                        <button type="button" class="btn btn-white">Import</button>
                        <a class="btn btn-success" href="./product-create.php">
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
            <div class="card-header" id="myDIV">
                <ol class="breadcrumb float-sm-left">
                    <li class="productBtn">
                        <button type="button" class="bttn btn-white active">All</button>
                    </li>
                    <li>
                        <button type="button" class="bttn btn-white">Active</button>
                    </li>
                    <li>
                        <button type="button" class="bttn btn-white">Draft</button>
                    </li>
                    <li>
                        <button type="button" class="bttn btn-white">Archived</button>
                    </li>
                </ol>
            </div>
            <div class="card-body">
                <table id="product" class="table table-striped table-bordered product">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Vendor</th>
                            <th>Inventory</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GLUN Bolt Electronic Portable Fishing Hook Type Digital LED Screen Luggage Weighing
                                Scale</td>
                            <td>Electronics</td>
                            <td>Harshad Dandekar</td>
                            <td>50</td>
                            <td>Active</td>
                            <td>
                                <a href="./product-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#" id="link"><i
                                        class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bajaj Rex 500W Mixer Grinder</td>
                            <td>Home & Kitchen Appliances</td>
                            <td>RetailEZ Pvt Ltd</td>
                            <td>100</td>
                            <td>Active</td>
                            <td>
                                <a href="./product-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#" id="link"><i
                                        class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>iQOO Z6 Lite 5G</td>
                            <td>Mobiles & Accessories</td>
                            <td>Darshita Etel</td>
                            <td>100</td>
                            <td>Active</td>
                            <td>
                                <a href="./product-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#" id="link"><i
                                        class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Samsung Galaxy M13</td>
                            <td>Mobiles & Accessories</td>
                            <td>Darshita Etel</td>
                            <td>100</td>
                            <td>Active</td>
                            <td>
                                <a href="./product-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#" id="link"><i
                                        class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>HP 15s-Ryzen 3 3250U 8GB SDRAM/256GB SSD 15.6inch(39.6cm) HD, Micro-Edge Laptop</td>
                            <td>Laptops & Accessories</td>
                            <td>eTrade Online</td>
                            <td>150</td>
                            <td>Active</td>
                            <td>
                                <a href="./product-edit.php"><i class="fa fa-edit mr-1"></i></a><a href="#" id="link"><i
                                        class="fa fa-trash text-red"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- /.card-body -->
            </div>
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
    $('.product').DataTable();
    // Add active class to the current button (highlight it)
    let header = document.getElementById("myDIV");
    let btns = header.getElementsByClassName("productBtn");
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            let current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(
                "active",
                ""
            );
            this.className += "active";
        });
    }
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