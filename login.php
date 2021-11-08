<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <style>
    body {
  margin: 0;
  padding: 0;
  background-color: #012321;
  
}
#login .container #login-row #login-column #login-box {
  margin-top: 100px;
  max-width: 500px;
  height: 400px;
  border: 1px solid #eabd09;
  background-color: #d3ccb1;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 50px;
}
#login .container #login-row #login-column #login-box #login-form #signup-link {
  margin-top: -85px;
}
    </style>
       <?php
	session_start();
	require './config.php';
	if (isset($_POST['submit'])) {
	 	$gmail = $_POST["gmail"];
		$pass = $_POST["pass"];
		
		$sql = mysqli_query($conn,"SELECT * FROM nguoidung WHERE gmail='$gmail' AND pass = '$pass'");
		
		if (mysqli_num_rows($sql) > 0) {
			$row = mysqli_fetch_array($sql);
			$_SESSION['current_user'] = $row['gmail'];
			if ($row['id_lnd'] == 2) {
                $_SESSION['khachhang']['ten_nd']=$row['ten_nd'];
                $_SESSION['khachhang']['sdt_nd']=$row['sdt_nd'];
                $_SESSION['khachhang']['gmail']=$row['gmail'];
                $_SESSION['khachhang']['pass']=$row['pass'];
				$_SESSION['current_admin'] = $row['id_lnd'];
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./index.php'</script>";
			}
			elseif($row['id_lnd'] == 1){
				echo "<script>alert('Đăng nhập thành công!');
				location.href='./admin/admin.php'</script>";
			}
		}else
		{
			 echo "<script>alert('Đăng nhập thất bại!');location.href='./login.php'</script>";
		}

	
	}
    ?>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">ĐĂNG NHẬP</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Gmail</label><br>
                                <input type="text" name="gmail" id="username" class="form-control" value="<?php if(isset($gmail)) echo $gmail; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu</label><br>
                                <input type="text" name="pass" id="password" class="form-control" value="<?php if(isset($pass)) echo $pass; ?>">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Nhớ tài khoản</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
                            </div>
                            <div id="signup-link" class="text-right">
                                <a href="./signup.php" class="text-info">  Đăng kí  </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
