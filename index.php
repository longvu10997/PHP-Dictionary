<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Từ điển Anh - Việt</h2>
    <form action="" method="post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm">
        <input type="submit" id="submit" value="Tìm">
    </form>
<?php
    $dictionary = [
        'hello' => 'xin chào',
        'mouse' => 'chuột',
        'car' => 'ô tô',
    ];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $searchWord = $_POST['search'];
        $flag = 0;
        foreach($dictionary as $word => $mean){
            if($word == $searchWord){
                $flag = 1;
                break;
            }
        }
        if($flag == 0){
            echo " Không tìm thấy từ cần tra.";
        }else{
            echo "Từ: " . $word . "<br> Nghĩa của từ: " . $mean;
        }
    }
?>
</body>

</html>