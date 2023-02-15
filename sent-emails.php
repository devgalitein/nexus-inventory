<?php 
      $page_title = "Admin | Sent E-mails";
      $module_name ="Sent E-mails";
      include './layout/header.php';?>
      
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sent E-mails</h1>
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
                            <th>Type</th>
                            <th>E-mail</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sell</td>
                            <td>glegros@moulin.fr</td>
                            <td>Big Deals Alert</td>
                            <td>20/12/2021</td>
                            <td>Delivered</td>
                        </tr>
                        <tr>
                            <td>Subscription</td>
                            <td>albert.marcelle@tele2.fr</td>
                            <td>Renew your subscription</td>
                            <td>15/02/2022</td>
                            <td>Opened</td>
                        </tr>
                        <tr>
                            <td>Stock</td>
                            <td>ymoreau@henry.fr</td>
                            <td>It’s back in stock. Hurry!</td>
                            <td>07/09/2022</td>
                            <td>Clicked</td>
                        </tr>
                        <tr>
                            <td>Stock</td>
                            <td>thevenin.daniel@akeonet.com</td>
                            <td>Limited edition restocked!</td>
                            <td>09/08/2022</td>
                            <td>Delivered</td>
                        </tr>
                        <tr>
                            <td>Purchase</td>
                            <td>albert.marcelle@tele2.fr</td>
                            <td>12 hours to buy your favorite.</td>
                            <td>13/01/2023</td>
                            <td>Opened</td>
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
});
</script>
<!-- /datatable -->