<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   if(isset($_POST['submit'])){
    $bd = $_POST['bd'];
    $kt = $_POST['kt'];
    if($bd <10 || $kt>24 ) $t="Khung giờ nghỉ";
    else 
        if($bd >= $kt) $t="giờ bắt đầu phải < giờ kết thúc";
        else{
            if ($bd<17) 
                if ($kt<17) $t=($kt-$bd)*20000;
                else        $t=(17-$bd)*20000 + ($kt-17)*45000;
            else            $t=($kt-$bd)*45000;
            }  
   }
   
?>
    <form action="" method="post">
        <table bgcolor="red" align="center" >
            <tr >
                <td colspan="6" bgcolor="green" align="center" >
                    <h2>Tính tiền KARAOKE</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu
                </td>
                <td>
                    <input type="text" name="bd" size="35" 
                    value="<?php if(isset($bd)) echo $bd; ?> ">
                </td>
                <td>
                    (h)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc
                </td>
                <td>
                    <input type="text" name="kt" size="35" 
                    value="<?php if(isset($kt)) echo abs($kt); ?> ">
                </td>
                <td>
                    (h)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán
                </td>
                <td>
                <input type="text" name="t" size="35"  disabled value="<?php if(isset($t)) echo $t;?>">
                </td>
                <td>
                    (VNĐ)
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Tính tiền">
                </td>
            </tr>
        </table>
    </form>


    
</body>
</html>