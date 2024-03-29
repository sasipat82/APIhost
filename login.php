<title>Login</title>
<style>
    body {
        background-image: linear-gradient(to top, #99CC66 0%, #FFFFCC 100%);
        margin-top: 2em;
        margin-bottom: 4em;
    }

    .container {
        width: 200px;
        height: 420px;
    }
</style>
<nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img style="width:50px;height:50px" src="photos/api-logo1.png" class="api-logo1" alt="api-logo1"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a href="index.php" class="nav-link "><span class="badge badge-primary"><i class="fas fa-home"></i></span>
                    หน้าหลัก</a>
            </li>
            <li class="nav-item ">
                <a href="products.php" class="nav-link"><span class="badge badge-success "><i class="fab fa-product-hunt"></span></i>สินค้า</a>
            </li>
            <li class="nav-item ">
                <a href="payment.php" class="nav-link "><span class="badge badge-danger"><i class="fas fa-shopping-cart"></i></span>สั่งซื้อ</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link "><span class="badge badge-warning"><i class="fas fa-registered"></i></span>สมัครสมาชิก</a>
            </li>
            <li class="nav-item ">
                <a href="transfer.php" class="nav-link "><span class="badge badge-danger"><i class="fas fa-registered"></i></span>ยืนยันการสั่งซื้อ</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link active"><span class="badge badge-info"><i class="fas fa-sign-in-alt"></i></span>เข้าสู่ระบบ</a>
            </li>
        </ul>
    </div>
</nav>
</div>
<?php
require('template_customer.html');
?>
<div class="container border-color">
    <div class="row ">
        <div class="col">
            <div class="rounded d-flex align-items-center flex-column justify-content-center h-100 bg-transparent text-white" id="header" style="margin-top:1em">
                <p><a href="index.php"><img style="width:100px;height:100px" src="photos/avatar.png" alt="avatar"></a></p>
                <form method="post" action="#">
                    <div class="form-group">
                        <input class="form-control form-control-lg" placeholder="Email" type="text" require>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" placeholder="Password" type="text" require>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-lg btn-block">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
      
</html>