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
// -------------------------------------------------------------
// Data to add/update
$first_name = "Veera";
$last_name = "Shore";
$email = "seashore@gmail.com";
$gender = "Female";
$user_address = "Bogo City, Cebu";
$user_id = 50;
// -------------------------------------------------------------
// positional parameters
// $sql = "insert into user_table(first_name, last_name, email, gender, user_address) values(?,?,?,?,?)";
// $stmt = $connect->prepare($sql);
// $stmt->execute([$first_name, $last_name, $email, $gender, $user_address]);
// -------------------------------------------------------------
// named parameters
// $sql = "insert into user_table(first_name, last_name, email, gender, user_address) values(:first_name, :last_name, :email, :gender, :user_address)";
// $stmt = $connect->prepare($sql);
// $stmt = execute([
//     'first_name'=>$first_name, 
//     'last_name'=>$last_name, 
//     'email'=>$email, 
//     'gender'=>$gender, 
//     'user_address'=>$user_address]);
// -------------------------------------------------------------
// update table
// $sql = "update user_table set first_name = :first_name, last_name = :last_name, email = :email, gender = :gender, user_address = :user_address where user_id = :user_id";
// $stmt = $connect->prepare($sql);
// $stmt->execute([
//     'first_name' => $first_name, 
//     'last_name' => $last_name, 
//     'email' => $email, 
//     'gender' => $gender, 
//     'user_address' => $user_address,
//     'user_id' => $user_id
// ]);
// -------------------------------------------------------------
$user_id = 50;
$sql = "select * from user_table where user_id = :user_id";
$stmt = $connect->prepare($sql);
$stmt->execute(['user_id' => $user_id]);
$result = $stmt->fetchAll(PDO::FETCH_OBJ);

// $stmt = $connect->query("select * from user_table order by user_id DESC ");
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
            <th>user_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>gender</th>
            <th>user_address</th>
        </tr>
        <!-- <php foreach($stmt as $values): ?> -->
        <?php foreach($result as $values): ?>
        <tr>
            <!-- <td><php echo $values['user_id'] ?></td>
            <td><php echo $values['first_name'] ?></td>
            <td><php echo $values['last_name'] ?></td>
            <td><php echo $values['email'] ?></td>
            <td><php echo $values['gender'] ?></td>
            <td><php echo $values['user_address'] ?></td> -->
            <td><?php echo $values->user_id ?></td>
            <td><?php echo $values->first_name ?></td>
            <td><?php echo $values->last_name ?></td>
            <td><?php echo $values->email ?></td>
            <td><?php echo $values->gender ?></td>
            <td><?php echo $values->user_address ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
