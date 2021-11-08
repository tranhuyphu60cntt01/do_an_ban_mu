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
    $width = $_POST['width'];
    $height = $_POST['height'];
    if($width <$height || $width<1 ) $area="Nhập lại chiều dài, chiều rộng";
    else{ 
        $area = $width*$height;
    }
}
?>
    <form action="" method="post">
        <table bgcolor="red" align="center" >
            <tr>
                <td colspan="6" bgcolor="green" align="center" >
                    <h2>Tính toán HCN</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Width
                </td>
                <td>
                    <input type="text" name="width"
                    value="<?php if(isset($_POST['width'])) { echo $width;} ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Height
                </td>
                <td>
                    <input type="text" name="height"
                    value="<?php if(isset($height)) echo $height; ?> ">
                </td>
            </tr>
            <tr>
                <td>
                    Area
                </td>
                <td>
                <input type="text" name="area" disabled value="<?php if(isset($area)) echo $area;?>">
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>


    
</body>
</html>