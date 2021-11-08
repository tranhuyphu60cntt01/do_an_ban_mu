<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng tìm kiếm</title>
</head>
<body>
    <?php
        if(isset($_POST['n'])){
            $n = $_POST['n'];
        }
        else $n="";
        $a = array();

        function check($a, $n){
            for($i=0; $i < count($a); $i++){
                if($a[$i] === $n)
                    return $i;
                return 0;
            } 
        }

        $chuoi = "";
        $kq_chuoi = "";
        $kq = "";
        
        if(isset($_POST['ch'])){
            $chuoi = $_POST['chuoi'];
            $a = explode(", ", $chuoi);
            $kq_chuoi = implode(", ", $a);
            $v = check($a, $n);
            if($v >0){
                $kq = "thấy ".$n." vị trí " . $v ." của mảng";
            }
            else{
                $kq = "Không thấy ".$n." của mảng";
            }
        }

    ?>
    <form action="" method="POST">
        <table   >
            <tr bgcolor="pink">
    	        <th colspan="3" align="center"><h3><i><font color="white">TÌM KIẾM</font></i></h3></th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="chuoi" value="<?php echo $chuoi; ?>" size="40"/></td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td><input type="text" name="n" value="<?php echo $n; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="ch" value="Tìm kiếm"/></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="imang" value="<?php echo $kq_chuoi; ?>"  disabled="disabled"/></td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td><input type="text" name="kq" bgcolor="blue" value="<?php echo $kq; ?>"  disabled="disabled"/></td>
            </tr>
            <tr >
                <td colspan="2" align="center" bgcolor="pink" ><label>(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</label></td>
            </tr>
        </table>
    </form>
</body>
</html>