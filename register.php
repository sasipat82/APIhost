<title>Register</title>
<style>
    body {
        background-image: linear-gradient(to top, #99CC66 0%, #FFFFCC 100%);
        margin-top: 2em;
        margin-bottom: 4em;
    }

    .container {
        background-color: white;
        padding: 20px;
    }
</style>
<script language="javascript">
function check() {
else if(document.checkForm.mem_pass.value=="") {
alert("In put Password ") ;
document.checkForm.mem_pass.focus() ;
return false ;
}
else if(document.checkForm.mem_repass.value=="") {
alert("In put Password a gain") ;
document.checkForm.mem_repass.focus() ;
return false ;
}
else if(document.checkForm.mem_pass.value != document.checkForm.mem_repass.value) {
alert("Wrong value re-pass") ;
document.checkForm.mem_repass.focus() ;
return false ;
}

else 
return true ;
}
</script>

<div class="container-fluid">
    <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img style="width:50px;height:50px" src="photos/api-logo1.png" class="api-logo1" alt="api-logo1"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link "><span class="badge badge-primary"><i class="fas fa-home"></i></span>
                        หน้าหลัก</a>
                </li>
                <li class="nav-item ">
                    <a href="products.php" class="nav-link "><span class="badge badge-success "><i class="fab fa-product-hunt"></span></i>สินค้า</a>
                </li>
                <li class="nav-item ">
                    <a href="payment.php" class="nav-link "><span class="badge badge-danger"><i class="fas fa-shopping-cart"></i></span>สั่งซื้อ</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active"><span class="badge badge-warning"><i class="fas fa-registered"></i></span>สมัครสมาชิก</a>
                </li>
                <li class="nav-item">
                    <a href="transfer.php" class="nav-link "><span class="badge badge-danger"><i class="fas fa-registered"></i></span>ยืนยันการสั่งซื้อ</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link "><span class="badge badge-info"><i class="fas fa-sign-in-alt"></i></span>เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<?php
require('template_customer.html');
?>
<form action="save_register.php method="post">
<div class="container">
    <div class="row ">
        <div class="col-8 ">
            <p>
                <h3 style="font-weight:bold">สมัครสมาชิก</h3>
            </p>
            <form action="#" method="post">
                <div class="form-group row">
                    <label for="inputusername" class="col-sm-4 col-form-label">Username: </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control " id="inputusername" placeholder="ชื่อผู้ใช้งาน" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputpassword" class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="inputpassword" placeholder="รหัสผ่าน" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputfullname" class="col-sm-4 col-form-label">Full Name:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputportapi" placeholder="ชื่อ-สกุล" required>
                    </div>
                </div>
                <div class="form-group row">
				<form id="form1" name="checkForm" method="post" action="" onSubmit="return check()" >
                    <label for="inputemail" class="col-sm-4 col-form-label">E-mail:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputemail" placeholder="อีเมล" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputphonenumber" class="col-sm-4 col-form-label">Phone Number:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputphonenumber" placeholder="หมายเลขโทรศัพท์" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputemail" class="col-sm-4 col-form-label">Address:</label>
                    <div class="col-sm-7">
                        <textarea name="address" class="form-control" placeholder="ที่อยู่"></textarea>
                    </div>
                </div>
                <div class="form-group ">
                    <div class=" col-xm-12">
                        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                        <button type="bottom" class="btn btn-danger">ยกเลิก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
