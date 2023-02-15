<?php 
      $page_title = "Admin | Market Place";
      $module_name ="Market Place";
      include './layout/header.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Market Place</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table id="product" class="table table-striped table-bordered product">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="./docs/assets/img/1.jpg" height=50 width=50/></td>
                            <td>Tout Pourles Nuisibles</td>
                            <td>https://toutpourlesnuisibles.com</td>
                            <td>E-commerce</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="./docs/assets/img/3.png" height=50 width=50/></td>
                            <td>Text Port</td>
                            <td>https://textport.com</td>
                            <td>Api</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="./docs/assets/img/4.png" height=50 width=50/></td>
                            <td>Guepes</td>
                            <td>https://guepes.com</td>
                            <td>E-commerce</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="./docs/assets/img/5.png" height=50 width=50/></td>
                            <td>LM Nuisibles</td>
                            <td>https://lmnuisible.com</td>
                            <td>Services</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="./docs/assets/img/6.png" height=50 width=50/></td>
                            <td>E-bay</td>
                            <td>https://ebay.com</td>
                            <td>E-commerce</td>
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
    $('.product').DataTable({
        "columnDefs": [{
                "orderable": false,
                "targets": 1
            } // Applies the option to all columns
        ]
    });
});
</script>
<!-- /datatable -->