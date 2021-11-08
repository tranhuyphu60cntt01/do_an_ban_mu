<!DOCTYPE html>
<html lang="en">
<body>
<?php

        $error=false;
        if(isset($_GET['id_sp']) && !empty($_GET['id_sp'])){
        require '../config.php';
        $sql="DELETE FROM `sanpham` WHERE `sanpham`.`id_sp`=";
        
        $result= mysqli_query($conn,$sql.$_GET['id_sp']);
        if(!$result){
            $error = "Không thể xóa tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin_sp.php">Danh sách tài khoản</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tài khoản thành công</h1>
                <a href="./admin_sp.php"> Danh sách tài khoản</a>
            </div>
            <?php }?>
        <?php }?>
        
</body>
</html>