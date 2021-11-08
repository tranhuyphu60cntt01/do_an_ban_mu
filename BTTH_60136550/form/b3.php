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
    $n = $_POST['n'];
    $c = $_POST['c'];
    $m = $_POST['m'];
    $g = 2000;
    if($c >$m || $c<0 ) $t="Nhập lại ";
    else{ 
        $t=$g*($m-$c);
    }
    if(isset($_POST["reset"])){
        $n = $_POST['n'];
        $c = $_POST['c'];
        $m = $_POST['m'];

        $n = "";
        $c = "";
        $m = "";
        $g = "";
    }
}
?>
    <form action="" method="post">
        <table bgcolor="red" align="center" >
            <tr>
                <td colspan="6" bgcolor="green" align="center" >
                    <h2>THANH TOÁN TIỀN ĐIỆN</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Tên chủ hộ
                </td>
                <td>
                    <input type="text" name="n" placeholder="Nhập tên chủ hộ"
                    value="<?php if(isset($n)) echo $n; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số cũ
                </td>
                <td>
                    <input type="text" name="c" placeholder="Nhập chỉ số cũ"
                    value="<?php if(isset($c)) echo $c; ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Chỉ số mới
                </td>
                <td>
                    <input type="text" name="m" placeholder="Nhập chỉ số mới"
                    value="<?php if(isset($m)) echo $m; ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Đơn giá
                </td>
                <td>
                    <input type="text" name="g"
                    value="<?php if(isset($g)) echo $g; ?>">
                </td>
                <td>
                    (VNĐ)
                </td>
            </tr>
            <tr>
                <td>
                    Số tiền thanh toán
                </td>
                <td>
                <input type="text" name="t" disabled value="<?php if(isset($t)) echo $t;?>">
                </td>
                <td>
                    (VNĐ)
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Tính">
                </td>
                <td>
                    <input type="submit" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>


    
</body>
</html>