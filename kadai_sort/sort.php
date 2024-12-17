<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array,$order){
            if($order){
                echo '昇順にソートします。'.'<br>';
                sort($array);
                return $array;
            }else{
                echo '降順にソートします。'.'<br>';
                rsort($array);
                return $array;
            }
        }

        $asc = sort_2way($nums, true);

        foreach($asc as $value){
            echo $value.'<br>';
        }

        $desc = sort_2way($nums, false);

        foreach($desc as $value){
            echo $value.'<br>';
        }

        ?>
    </p>
</body>

</html>
