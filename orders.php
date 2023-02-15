<?php 
      $page_title = "Admin | Orders";
      $module_name ="Orders";
      include './layout/header.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered orders">
                    <thead>
                        <tr>
                            <th>OrderId</th>
                            <th>Product</th>
                            <th>Customer</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                            <td>GLUN Bolt Electronic Portable Fishing Hook Type Digital LED Screen Luggage Weighing
                                Scale</td>
                            <td>Johnathon Predovic</td>
                            <td>2</td>
                            <td>680</td>
                            <td>03/03/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>2</td>
                            <td>iQOO Z6 Lite 5G</td>
                            <td>Terry Medhurst</td>
                            <td>2</td>
                            <td>27000</td>
                            <td>01/01/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>3</td>
                            <td>Bajaj Rex 500W Mixer Grinder</td>
                            <td>Demetrius Corkery</td>
                            <td>10</td>
                            <td>20990</td>
                            <td>01/01/2022</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                          <td>4</td>
                            <td>GLUN Bolt Electronic Portable Fishing Hook Type Digital LED Screen Luggage Weighing Scale</td>
                            <td>James Anderson</td>
                            <td>50</td>
                            <td>17000</td>
                            <td>15/12/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>5</td>
                            <td>Mi 100 cm (40 Inches) Full HD Android Smart LED TV 4A | L40M5-5AIN (Black)</td>
                            <td>Venktesh Johnson</td>
                            <td>50</td>
                            <td>999950</td>
                            <td>13/09/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>6</td>
                            <td>Bajaj Rex 500W Mixer Grinder</td>
                            <td>Jimmy Gil</td>
                            <td>20</td>
                            <td>41980</td>
                            <td>11/01/2023</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                          <td>7</td>
                            <td>Jaspo Marshal Trainers Adjustable Roller Skates Combo (Skates + Helmet + Knee & Elbow Guards) - for Age Group 6 to 14 Years | Academy & School Level Skating</td>
                            <td>Martin Guptil</td>
                            <td>25</td>
                            <td>32475</td>
                            <td>02/08/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>8</td>
                            <td>Acer 139 cm (55 inches) I Series 4K Ultra HD Android Smart LED TV AR55AR2851UDFL (Black)</td>
                            <td>Marcel Assunta</td>
                            <td>2</td>
                            <td>65000</td>
                            <td>05/05/2022</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                          <td>9</td>
                            <td>Jaspo Dragon Fire Light Weight Fiber Skateboard Casterboard Cruiserboard for Beginners Learners and Training Purpose for All Age Group Girls Boys Kids Teens Adults</td>
                            <td>Sanju Samson</td>
                            <td>2</td>
                            <td>82450</td>
                            <td>01/05/2022</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                          <td>10</td>
                            <td>Milton Thermosteel Flip Lid Flask, 1000 milliliters, Silver</td>
                            <td>Vikash kandola</td>
                            <td>150</td>
                            <td>145200</td>
                            <td>01/01/2023</td>
                            <td>Successful</td>
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

<script>
$(function() {
    $('.orders').DataTable();
});
</script>