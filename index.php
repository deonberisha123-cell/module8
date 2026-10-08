<?php

$host = "localhost";
$user = "root";
$dbname = "test2";
$pass = "";

try{

$pdo = new PDO("mysql:host=localhost;dbname=test2", "root");

$username = "Jack";

$password = password_hash("mypassword",PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

$pdo->exec($sql);

echo"Te dhenat jane shtuar";
}
catch(PDOException $e){
    echo"Te dhenat nuk jane shtuar";
}

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");

    $sql = "ALTER TABLE users ADD email VARCHAR(255)";

    $pdo->exec($sql);

    echo" Kolona u shtua";

}
catch(PDOException $e){
    echo"Erorr";
}

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");

    $sql = "ALTER TABLE users DROP COLUMN username";

        $pdo->exec($sql);

    echo" Kolona u fshi";

}
catch(PDOException $e){
    echo"Erorr";
}

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");

    $sql = "DROP TABLE products";

        $pdo->exec($sql);

    echo" Tabela u fshi";

}
catch(PDOException $e){
    echo"Erorr";
}




?>