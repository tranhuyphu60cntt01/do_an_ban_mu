<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng thay thế</title>
</head>
<body>
    <?php
        $a = array();
        $chuoi = "";
        $in_chuoi = "";
        $in_chuoi_moi = "";
        $mang_moi="";

        function thay_the($a, $cu, $moi){
            for($i = 0 ; $i < count($a); $i++){
                if($a[$i] == $cu )
                    $a[$i] = $moi;
            }
            return $a;
        }

        function xuat_mang_moi($a){
            for($i = 0; $i < count($a); $i++){
                $in_chuoi_moi = implode(", ", $a);
            }
            return $in_chuoi_moi;
        }

        if(isset($_POST['gtctt']))
            $gtctt =$_POST['gtctt'];
        else $gtctt ="";

        if(isset($_POST['gttt']))
            $gttt =$_POST['gttt'];
        else $gttt ="";

        if(isset($_POST['btnThayThe'])){
            $chuoi = $_POST['mang'];
            $a = explode(", ", $chuoi);
            $in_chuoi = implode(", ", $a);
            $tt = thay_the($a, $gtctt, $gttt);
            $mang_moi = xuat_mang_moi($tt);
        }
    ?>
    <form action="" method="post">
        <table style="width:500px;" align="center" bgcolor="#20B2AA" cellpadding="2" cellspacing="2">
            <tr bgcolor="#008080">
    	        <th colspan="3" align="center"><h3><i><font color="white">THAY THẾ</font></i></h3></th>
            </tr>
            <tr>
                <td>Nhập các phần tử:</td>
                <td><input type="text" name="mang" value="<?php echo $chuoi;?>" size="40"/></td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế:</td>
                <td><input type="text" name="gtctt" value="<?php echo $gtctt;?>" size="5"/></td>
            </tr>
            <tr>
                <td>Giá trị thay thế:</td>
                <td><input type="text" name="gttt" value="<?php echo $gttt;?>" size="5"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnThayThe" value="Thay thế"/></td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td><input type="text" name="cu" value="<?php echo $in_chuoi;?>" size="40" disabled="disabled"/></td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế:</td>
                <td><input type="text" name="moi" value="<?php echo $mang_moi;?>" size="40" disabled="disabled"/></td>
            </tr>
            <tr >
                <td colspan="2" align="center" ><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
            </tr>
        </table>
    </form>
</body>
</html>