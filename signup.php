<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE HATS SHOP ment</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<style>
	* {
	box-sizing: border-box; 
}
form {
	background-color: #FFFFFF;
	display: flex;
	align-items: right;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
    width: 500px;
    
}
body {
	background: #1c663ae0;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -50px 0 50px;
}
button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
input{
	margin: 10px;
	width: 95%;
}
h2{
	text-align: center;
	color: blue;	 
	
}
button:active {
	transform: scale(0.95);
}
</style>

<?php
	    session_start();
	    require './config.php';
	    $errors = true; 
	     if (isset($_POST['submit'])){
		$ten_nd = $_POST["ten_nd"];
        	$sdt_nd=$_POST["sdt_nd"];
		$gmail=$_POST["gmail"];
		$pass = $_POST["pass"];
		$pass2 = $_POST["pass2"];
		$id_lnd = 2;

		if ($pass != $pass2) {
			echo "<script>alert('Mật khẩu không đúng!');
		  	location.href='./login.php'
				</script>";
				$errors = false;	
		 }
		$user_check_query = "SELECT * FROM nguoidung WHERE gmail='$gmail' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
	 	$nguoidung = mysqli_fetch_assoc($result);
	  	if ($nguoidung) { 
		    if  ($nguoidung['gmail'] === $gmail) {
		     echo "<script>alert('Tài khoản đã tồn tại!');
		  	location.href='./signup.php'
				</script>";
				$errors = false;
		    }
	  	}
	  	if ($errors) {
		  	$query = "INSERT INTO nguoidung(ten_nd,sdt_nd,gmail,pass,id_lnd) 
		  	values('$ten_nd','$sdt_nd','$gmail','$pass','$id_lnd')";      
              $bien=mysqli_query($conn, $query);
              if($bien){
                $_SESSION['khachhang']['ten_nd']=$ten_nd;
                $_SESSION['khachhang']['sdt_nd']=$sdt_nd;
                $_SESSION['khachhang']['gmail']=$gmail;
                
                echo "<script>alert('Đăng ký thành công!');	location.href='./login.php'</script>";
              }	else{
                echo "<script>alert('Đăng ký thất bại!');location.href='./signup.php'</script>";
              }
	      }
	  else {echo "<script>alert('Đăng ký thất bại!');location.href='./signup.php'</script>";}
	}
?>

<div class="container">
		
			<div class="">
				<div class="">
					<form method="POST" action="#" role="form">
						<table >
						<h2 >TẠO TÀI KHOẢN</h2>
						<tr>
							<td><label  >Tên người dùng</label></td>
							<td><input  name="ten_nd" type="text"   require="" value="<?php if(isset($ten_nd)) echo $ten_nd;?>"></td>
						</tr>
							<td><label  >Số điện thoại</label></td>
							<td><input  name="sdt_nd" type="text"   require="" value="<?php if(isset($sdt_nd)) echo $sdt_nd;?>"></td>
						</tr>
						<tr >
							<td><label  >Gmail</label></td>
							<td><input  name="gmail" type="text"  require="" value="<?php if(isset($gmail)) echo $gmail;?>"></td>
						</tr>
						<tr >
							<td><label  > Mật Khẩu</label></td>
							<td><input  name="pass" type="password"   require="" value="<?php if(isset($pass)) echo $pass;?>"></td>
						</tr>
						<tr >
							<td><label  > Nhập lại mật khẩu</label></td>
							<td><input  name="pass2" type="password"   require="" value="<?php if(isset($pass2)) echo $pass2;?>"></td>
						</tr>
						
						</table>
						<button  type="submit" name="submit" >Tạo mới tài khoản</button> 
						</p>Bạn chưa có tài khoản? <a href="./login.php">Đăng nhập</a></p>
					</form>
				</div>
			</div>
		
	</div>
</body>
</html>




   
