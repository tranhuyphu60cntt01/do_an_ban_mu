<!DOCTYPE html>
<html lang="en">
<body>
<?php

        $error=false;
        if(isset($_GET['id_nd']) && !empty($_GET['id_nd'])){
        require '../config.php';
        $sql="DELETE FROM `nguoidung` WHERE `nguoidung`.`id_nd`=";
        $result= mysqli_query($conn,$sql.$_GET['id_nd']);
        if(!$result){
            $error = "Không thể xóa tài khoản";
            }
            mysqli_close($conn);
            if($error !== false){
              ?>
            <div>
                <h1> Thông báo</h1>
                <h4> <?= $error ?></h4>
                <a href="./admin.php">Danh sách tài khoản</a>
            </div>
            <?php } else { ?>
            <div>
                <h1> Xóa tài khoản thành công</h1>
                <a href="./admin.php"> Danh sách tài khoản</a>
            </div>
            <?php }?>
        <?php }?>
        
</body>
</html>