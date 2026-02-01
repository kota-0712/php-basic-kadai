<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>php-basic/foreach.php
   </title>
</head>

<body>
   <p>
<?php
$personal_data = [
    "name" => "玉ねぎ",
    "price" => "200",
    "lcocation" => "北海道"
];

echo $personal_data['name'];
echo $personal_data['price'];
echo $personal_data['lcocation'];


   foreach ($personal_data as $key => $value) {
            echo "{$key}:{$value}<br>";
        }

        foreach ($personal_data as $value) {
            echo $value . '<br>';
        }
        
        ?>
</p>
</body>

</html>
