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
    $t = $_POST['t'];
    $l = $_POST['l'];
    $h = $_POST['h'];
    $ch = $_POST['ch'];
    if($t <0 || $t>10  || $l <0 || $l>10 || $h <0 || $h>10  ||$ch <0 || $ch>=40 ) $kq="Nhập lại ";
    else{ 
        $td=$t+($l+$h);
        if($t>0 && $l>0 && $h>0 && $td>=$ch) $kq="Đậu";
        else $kq="Rớt";
    }
    if(isset($_POST["reset"])){
        $t = $_POST['t'];
        $t = "";
    }
}

?>
    <form action="" method="post">
        <table bgcolor="red" align="center" >
            <tr>
                <td colspan="6" bgcolor="green" align="center" >
                    <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Toán
                </td>
                <td>
                    <input type="text" name="t" placeholder="Điểm toán"
                    value="<?php if(isset($t)) echo $t; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Lý
                </td>
                <td>
                    <input type="text" name="l" placeholder="Điểm lý"
                    value="<?php if(isset($l)) echo $l; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Hóa
                </td>
                <td>
                    <input type="text" name="h" placeholder="điểm hóa"
                    value="<?php if(isset($h)) echo $h; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Điểm chuẩn
                </td>
                <td>
                    <input type="text" name="ch" placeholder="Nhập điểm chuẩn"
                    value="<?php if(isset($ch)) echo $ch; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tổng điểm
                </td>
                <td>
                <input type="text" name="td" disabled value="<?php if(isset($td)) echo $td;?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả thi
                </td>
                <td>
                <input type="text" name="kq" disabled value="<?php if(isset($kq)) echo $kq;?>">
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Xem quả thi">
                </td>
                <td>
                    <input type="submit" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>


    
</body>
</html>