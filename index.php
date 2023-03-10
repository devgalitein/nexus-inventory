<?php 
      $page_title = "Admin | Login";
      $module_name ="Login";
      include './layout/login/header.php';?>

<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="./dashboard.php" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-0">
            <a href="./register.php" class="text-center">Click here for registration</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
<!-- footer -->
<?php include './layout/login/footer.php';?>
<!-- /footer -->