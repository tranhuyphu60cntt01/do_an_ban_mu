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
    $r = $_POST['r'];
    if ($r>0){ 
        $s = $r * 3.14 *2;
        $c = pow($r,2) * 3.14; 
    }else  $s="Nhập lại bán kính";
    if(isset($_POST["reset"])){
        $r=$_post["r"];
        $r="";
    }
}
?>
    <form action="" method="post">
        <table bgcolor="red" align="center" >
            <tr>
                <td colspan="6" bgcolor="green" align="center" >
                    <h2>Tính CV và S hình tròn</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Bán kính
                </td>
                <td>
                    <input type="text" name="r" placeholder="Nhap R"
                    value="<?php if(isset($r)) echo $r; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chu vi
                </td>
                <td>
                    <input type="text" name="c" disabled
                    value="<?php if(isset($c)) echo $c; ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                <input type="text" name="s" disabled 
                value="<?php if(isset($s)) echo $s;?>">
                </td>
            </tr>
            <tr>
                <td></td>
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