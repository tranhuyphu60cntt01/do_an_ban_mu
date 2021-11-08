
<!DOCTYPE html>
<html lang="en">
 
  <body>
 
  
        <?php 
         require '../config.php';
     $error=false;
     if(isset($_GET['action']) && $_GET['action']=='create'){ 
         if(isset($_POST['ten_sp']) && !empty($_POST['ten_sp']) && 
         isset($_POST['gia']) && !empty($_POST['gia']) && 
         isset($_FILES['anh']) && !empty($_FILES['anh']) &&
         isset($_POST['soluong']) && !empty($_POST['soluong']) && 
         isset($_POST['mo_ta']) && !empty($_POST['mo_ta']) &&
         isset($_POST['id_lsp']) && !empty($_POST['id_lsp']) 

         ){
            require '../config.php';
            $anh=$_FILES['anh']['name'];
            $chenanh = "images/".$anh;
           $sql="INSERT INTO sanpham (`ten_sp`,`gia`,`anh`,`soluong`,`mo_ta`,`id_lsp`) 

           VALUE ('".$_POST['ten_sp']."'
           ,'".$_POST['gia']."'
           ,'$chenanh'
           ,'".$_POST['soluong']."'
           ,'".$_POST['mo_ta']."'
           ,'".$_POST['id_lsp']."')";
           
           move_uploaded_file($_FILES['anh']['tmp_name'],"../images/".$anh);
           
             $result= mysqli_query($conn,$sql);
             
             if(!$result){
                 if(strpos(mysqli_error($conn),"Duplicate entry") !== FALSE){
                     $error ="Tài khoản đã tồn tại , Vui lòng nhập tài khoản khác";
                 }
             } 
             mysqli_close($conn);
             if($error !== false){
                 ?>
                 <div>
                     <h1> Thông báo</h1>
                     <h4><?= $error ?></h4>
                     <a href="./create_sp.php">Tạo người dùng mới</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center"> Thêm sản phẩm <?=$_POST['ten_sp']?> thành công</h4>
                     <a href="./admin_sp.php">Danh sách sản phẩm</a>
                     </div>
                 <?php }?>
                 <?php }?>
        <?php } else{ ?> 

            <?php
    require("./header_admin.php");
?>
<div class="content-body">
<div class="container-fluid">
          <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                    <form action="./create_sp.php?action=create" method="post" enctype = "multipart/form-data">
                                            <label> Tên sản phẩm</label><br>
                                            <input type="text" name="ten_sp" value=""><br>
                                            <label> Giá</label><br>
                                              <input type="text" name="gia" value=""><br>
                                              <label> Ảnh sản phẩm</label><br>
                                                <div class="wrap-field">
                                                <div class="right-wrap-field">
                                                    <input width="50px;" type="file" name="anh"/>
                                                </div>
                                                <br>
                                                </div>
                                              <label> Số lượng</label><br>
                                              <input type="text" name="soluong" value=""><br>
                                              <label> Mô tả</label><br>
                                              <input type="text" name="mo_ta" value=""><br>
                                              <label> Loại sản phẩm</label><br>
                                              <select name="id_lsp" id="">
                                              <option value="1">Mũ lưỡi trai</option>
                                              <option value="2"> Mũ len </option>
                                              <option value="3">Mũ tai bèo </option>
                                              <option value="4">Mũ bảo hiểm</option>
                                              <option value="5">Mũ cao bồi </option>

                                              </select><br>
                                              <br>
                                              <br>
                                              <input type="submit" value="THÊM">

                                              </form>                                              
                                              
                                    </table>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

          
          <?php }?>
        </div><!-- /.row -->
      </div>
    </div>
    </div>
    </div>
    <!-- JavaScript -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
  </body>
</html>