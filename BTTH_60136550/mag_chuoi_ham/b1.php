<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng chuỗi bài tập 1</title>
</head>

<body>
    <?php
    if (isset($_POST["d"]))
        $d = trim($_POST["d"]);
    else
        $d = 0;
    ?>
    <form action="" method="POST">
        <label>Nhập độ dài của mảng</label>
        <input type="text" name="d" value="<?php echo $d ?>">
        <input type="submit" value="Kiểm tra">
        <div>a: <?php if($d>0) echo $d." là số nguyên dương";else echo $d." là không số nguyên dương";  ?> </div>
        <div>b: 
            <?php
            for ($i = 0; $i < $d; $i++) {
                $a[$i] = rand(-100, 100);
                echo $a[$i];
                echo "; ";
            }
            ?>
        </div>
        <div>c:
            <?php
            $dem = 0;
            for ($i = 0; $i < $d; $i++) {
                if ($a[$i] % 2 == 0)
                    $dem++;
            }
            echo $dem;
            ?>

        </div>
        <div>d:
            <?php
            $dem = 0;
            for ($i = 0; $i < $d; $i++) {
                if ($a[$i] < 100)
                    $dem++;
            }
            echo $dem;
            ?>
        </div>
        <div>e: 
            <?php
            $t = 0;
            for ($i = 0; $i < $d; $i++) {
                if ($a[$i] < 0)
                    $t += $a[$i];
            }
            echo $t;
            ?>
        </div>
        <div>f:
            <?php
            for ($i = 0; $i < $d; $i++) {
                if ($a[$i] == 0) {
                    echo $i;
                    echo ", ";
                }
            }

            ?>
        </div>
        <div>g:
            <?php
            if ($d != 0) {
                sort($a);
                for ($i = 0; $i < $d; $i++) {
                    echo $a[$i];
                    echo ", ";
                }
            } else
                echo "";
            ?>
        </div>
    </form>
</body>

</html>