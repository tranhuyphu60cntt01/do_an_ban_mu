<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
</head>
<body>
  <?php
    require("./header_admin.php");
?>
<div class="content-body">
<div class="container-fluid">
  <div id="wrapper">
    <div id="page-wrapper">
      <br>
      <br>
      <div class="row">
        <?php
        require '../config.php';
        $error=false;
        if(isset($_GET['action']) && $_GET['action'] == "edit"){
          if(isset($_POST['id_nd']) && !empty($_POST['id_nd']) &&  
          isset($_POST['ten_nd']) && !empty($_POST['ten_nd'])&&  
          isset($_POST['sdt_nd']) && !empty($_POST['sdt_nd']) &&  
          isset($_POST['gmail']) && !empty($_POST['gmail']) &&  
          isset($_POST['pass']) && !empty($_POST['pass']) &&  
          isset($_POST['id_lnd']) && !empty($_POST['id_lnd'])){
            $result= mysqli_query($conn,"UPDATE `nguoidung` SET `ten_nd` = '".$_POST['ten_nd']."', 
            `sdt_nd`= '".$_POST['sdt_nd']."', `gmail`= '".$_POST['gmail']."' , 
            `pass`= '".$_POST['pass']."' , `id_lnd`= '".$_POST['id_lnd']."'  
            WHERE `nguoidung`.`id_nd`=".$_POST['id_nd'].";");
            if(!$result){
              $error =" Không thể cập nhật tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin.php">Danh sách tài khoản</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công tài khoản "?>
          </h3>
          <a href="./admin.php"> >>Quay lại danh sách tài khoản</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
          <a href="./edit_nd.php?id_nd=<?=$_POST['id_nd']?>"> Quay lại sửa tài khoản</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM nguoidung WHERE `id_nd`=".$_GET['id_nd']);
              $nguoidung=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($nguoidung)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của >>>
                <?= $nguoidung['ten_nd']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_nd.php?action=edit" method="post">
                    <input type="hidden" name="id_nd" value="<?= $nguoidung['id_nd']?>"> <br>
                    <br>Tên<br> <input type="text" name="ten_nd"
                    value="<?= $nguoidung['ten_nd']?>"><br>
                    <br>Sđt<br> <input type="text" name="sdt_nd"
                      value="<?= $nguoidung['sdt_nd']?>"><br>
                    <br>Gmail<br> <input type="text" name="gmail"
                      value="<?= $nguoidung['gmail']?>"><br>
                    <br> Password<br> <input type="password" name="pass"
                      value="<?= $nguoidung['pass']?>"><br>
                    <br>Loại người dùng <br>
                    <select name="id_lnd" id="">
                      <option <?php if(!empty($nguoidung['ten_lnd'])) {?> selected
                        <?php }?> value="1">Admin
                      </option>
                      <option <?php if(!empty($nguoidung['ten_lnd'])) {?> selected
                        <?php }?> value="2">Khách hàng
                      </option>
                    </select>
                    <br><br> <input type="submit" value="Chỉnh sửa">
                  </form>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php } }?>
      </div><!-- /.row -->
    </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->
</div>
</div>
</body>

</html>