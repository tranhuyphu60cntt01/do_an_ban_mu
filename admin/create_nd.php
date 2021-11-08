
<!DOCTYPE html>
<html lang="en">
 
  <body>
 
  
        <?php 
         require '../config.php';
     $error=false;
     if(isset($_GET['action']) && $_GET['action']=='create'){ 
         if(isset($_POST['ten_nd']) && !empty($_POST['ten_nd']) && 
         isset($_POST['sdt_nd']) && !empty($_POST['sdt_nd']) && 
         isset($_POST['gmail']) && !empty($_POST['gmail'])  &&
         isset($_POST['gioitinh']) && !empty($_POST['gioitinh']) && 
         isset($_POST['id_lnd']) && !empty($_POST['id_lnd']) 
         ){
           $sql="INSERT INTO nguoidung (`ten_nd`,`sdt_nd`,`gmail`,`gioitinh`,`id_lnd`) 
           VALUE ('".$_POST['ten_nd']."'
           ,'".$_POST['sdt_nd']."'
           ,'".$_POST['gmail']."'
           ,'".$_POST['gioitinh']."'
           ,'".$_POST['id_lnd']."')";

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
                     <a href="./create_nd.php">Tạo người dùng mới</a>
                 </div>
                 <?php } else {?>
                     <div>
                     <h4 align="center"> tạo người dùng <?=$_POST['ten_nd']?> thành công</h4>
                     <a href="./admin.php">Danh sách nhà cung cấp</a>
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
                                    <form action="./create_nd.php?action=create" method="post">
                                            <label> Tên</label><br>
                                            <input type="text" name="ten_nd" value=""><br>
                                            <label> Số điện thoại</label><br>
                                              <input type="text" name="sdt_nd" value=""><br>
                                              <label> Gmail</label><br>
                                              <input type="text" name="gmail" value=""><br>
                                              <label> Giới tính</label><br>
                                              <input type="text" name="gioitinh" value=""><br>
                                              <label> Loại ngừời dùng</label><br>
                                              <select name="id_lnd" id="">
                                              <option value="1">Admin
                                              </option>
                                              <option value="2">Khách hàng
                                              </option>

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