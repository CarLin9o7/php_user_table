<!-- http://www.localhost/new_project/index.php -->

<?php
// $data1 = 10;
// $data2 = "HELLOW WORLD<br>";
// $data3 = 10.25
// echo $data2;
// echo $data1;
// echo $data1. " - " .$data2;
// var_dump($data3);

// $cars = array("Volvo", "BMW", "Toyota");
// echo $cars[1];

// $num1 = 20;
// $num2 = 40;
// $result = $num1 * $num2;
// echo "Value is:". " " .$num1 * $num2;
// echo "Value is:". " " .$result;

// $colors = array("red", "yellow", "blue");
// foreach($colors as $x){
//     echo "$x <br>";
// }

require_once('connection.php');
// $sql = $connect->query("select * from customers");
// foreach($sql as $values){
//     echo $values['CustomerName']."<br>";
// }
$stmt = $connect->query("select * from user_table");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>gender</th>
            <th>user_address</th>
        </tr>
        <?php foreach($stmt as $values): ?>
        <tr>
            <td><?php echo $values['first_name'] ?></td>
            <td><?php echo $values['last_name'] ?></td>
            <td><?php echo $values['email'] ?></td>
            <td><?php echo $values['gender'] ?></td>
            <td><?php echo $values['user_address'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>