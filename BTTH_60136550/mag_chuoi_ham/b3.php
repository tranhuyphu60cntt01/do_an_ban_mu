<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng phát sinh tính toán</title>
    
</head>
<body>
    <?php
        $a = array();
        $kq = "";
        $max = "";
        $min = "";
        $t = "";
        function tao_a($n){
            for($i = 0; $i < $n;$i++){
                $a[$i] = rand(0, 20);
            }
            return $a;
        }
        function xuat_a($a){
            $n = count($a);
            $chuoi = "";
            for($i = 0 ; $i<$n; $i++){
                $chuoi = implode(" ", $a);
            }
            return $chuoi;
        }

        function check_max($a){
            $n = count($a);
            $max = $a[0];
            for($i = 0; $i < $n; $i++){
                if($a[$i] > $max)
                    $max = $a[$i];
            }
            return $max;
        }

        function check_min($a){
            $n = count($a);
            $min = $a[0];
            for($i = 0; $i < $n; $i++){
                if($a[$i] < $min)
                    $min = $a[$i];
            }
            return $min;
        }

        function t_a($a){
            $n = count($a);
            $t = 0;
            for($i = 0; $i < $n; $i++){
                $t += $a[$i];
            }
            return $t;
        }

        if(isset($_POST['n'])){
            $n = $_POST['n'];
            $a = tao_a($n);
            $kq= xuat_a($a);
            $max = check_max($a);
            $min = check_min($a);
            $t = t_a($a);
        }
        else $n = "";
        
    ?>
    <form action="" method="post">
        <table >
            <tr>
                <th colspan="3" align="center" bgcolor="pink"><h3>PHÁT SINH MẢNG VÀ TÍNH TOÁN</h3></th>
            </tr>
            <tr>
                <td>Nhập số phần tử:</td>
                <td><input type="text" name="n" value="<?php echo $n; ?>" size="20"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnTinh" value="Phát sinh và tính toán"/></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="a" disabled="disabled" value="<?php echo $kq; ?>" size="45"/></td>
            </tr>
            <tr>
                <td>GTLN(MAX) trong mảng:</td>
                <td><input type="text" name="max" disabled="disabled" value="<?php echo $max; ?>" size="20"/></td>
            </tr>
            <tr>
                <td>GTNN(MIN) trong mảng:</td>
                <td><input type="text" name="min" disabled="disabled" value="<?php echo $min; ?>" size="20"/></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" name="t" disabled="disabled" value="<?php echo $t; ?>" size="20"/></td>
            </tr>
        </table>
    </form>
</body>
</html>