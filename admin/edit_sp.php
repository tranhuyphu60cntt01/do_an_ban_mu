<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>admin_sp Sản phẩm</title>
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
          if(isset($_POST['id_sp']) && !empty($_POST['id_sp']) && 
           isset($_POST['ten_sp']) && !empty($_POST['ten_sp'])&&  
           isset($_POST['gia']) && !empty($_POST['gia']) &&  
           isset($_POST['anh']) && !empty($_POST['anh']) &&
           isset($_POST['soluong']) && !empty($_POST['soluong']) &&   
           isset($_POST['mo_ta']) && !empty($_POST['mo_ta']) &&  
           isset($_POST['id_lsp']) && !empty($_POST['id_lsp'])){
               if(isset($_FILES['anh']) && $_FILES['anh']['name'] != "") $anh="images/".$_FILES['anh']['name'];
          else { $anh=$_POST['anh']; }
          $sql="UPDATE `sanpham` SET `ten_sp` = '".$_POST['ten_sp']."',  
          `anh`= '".$anh."' ,`anh`= '".$anh."', `soluong`= '".$_POST['soluong']."' , 
          `mo_ta`= '".$_POST['mo_ta']."' , `id_lsp`= '".$_POST['id_lsp']."'  
          WHERE `sanpham`.`id_sp`=".$_POST['id_sp'].";";
          
            $result= mysqli_query($conn,$sql);
            
            if(!$result){
              $error =" Không thể cập nhật Sản phẩm";
            }
            mysqli_close($conn);
            if($error !== false){
          ?>
        <div>
          <h1> Thông báo</h1>
          <h4>
            <?= $error ?>
          </h4>
          <a href="./admin_sp.php">Danh sách sản phẩm</a>
        </div>
        <?php } else { ?>
        <div>
          <h3>
            <?= ($error != false) ? $error: "Sửa thành công sản phẩm "?>
          </h3>
          <a href="./admin_sp.php"> >>Quay lại danh sách sản phẩm</a>
        </div>
        <?php }?>
        <?php } else { ?>
        <div>
          <h1> Vui lòng nhập đủ thông tin </h1>
          <a href="./edit_sp.php?id_sp=<?=$_POST['id_sp']?>"> Quay lại sửa sản phẩm</a>
        </div>
        <?php }
        }else{
              $result= mysqli_query($conn,"SELECT * FROM sanpham WHERE `id_sp`=".$_GET['id_sp']);
              $sanpham=$result->fetch_assoc();
              mysqli_close($conn);
              if(!empty($sanpham)){
              ?>
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Sửa tài khoản của >>>
                <?= $sanpham['ten_sp']?>
              </h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                  <form action="./edit_sp.php?action=edit" method="post" enctype = "multipart/form-data">
                    <input type="hidden" name="id_sp" value="<?= $sanpham['id_sp']?>"> <br>
                    <br>Tên<br> <input type="text" name="ten_sp"
                    value="<?= $sanpham['ten_sp']?>"><br>
                    <br>Giá<br> <input type="text" name="gia"
                      value="<?= $sanpham['gia']?>"><br>

                      <label>Ảnh sản phẩm: </label> <br>
                       <div>
                       <?php if (!empty($sanpham['anh'])) { ?>
                        <img src="../<?= $sanpham['anh'] ?>" /><br /> <input width="50px;" type="text" name="anh" value="<?= $sanpham['anh'] ?>" />
                        <br>
                        <input width="50px;" type="file" name="anh" />
                        <?php } ?>
                        
                       </div>
                    <br>soluong<br> <input type="text" name="soluong"
                      value="<?= $sanpham['soluong']?>"><br>
                    <br>Mô tả<br> <input type="text" name="mo_ta"
                      value="<?= $sanpham['mo_ta']?>"><br>
                    <br>Loại sản phẩm <br>
                    <select name="id_lsp" id="">
                      <option <?php if(!empty($sanpham['ten_lsp'])) {?> selected
                        <?php }?> value="1">Mũ lưỡi trai </option>
                      <option <?php if(!empty($sanpham['ten_lsp'])) {?> selected
                        <?php }?> value="2"> Mũ len </option>
                        <option <?php if(!empty($sanpham['ten_lsp'])) {?> selected
                        <?php }?> value="3">Mũ tai bèo </option>
                      <option <?php if(!empty($sanpham['ten_lsp'])) {?> selected
                        <?php }?> value="4"> Mũ bảo hiểm </option>
                        <option <?php if(!empty($sanpham['ten_lsp'])) {?> selected
                        <?php }?> value="5">Mũ cao bồi </option>
                      
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