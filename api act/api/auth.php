<?php
$pdo = new PDO('mysql:host=localhost;dbname=information','root','');


if(isset($_GET['username'],$_GET['password'])){
    $auth = $pdo->prepare(" SELECT * FROM accounts WHERE username=:username and password=:password");
    $auth->bindValue('username',$_GET['username']);
    $auth->bindValue('password',$_GET['password']);
    $auth->execute();

$data = $auth->fetchALL(PDO::FETCH_ASSOC);
if(count($data) !=0){
    $message = [
        "message"=>"Authenticated successfully",
        "status"=>"success",
        "token"=>md5('username')
    ];
}else{
        $message = [
            "message"=>"Invalid username or password",
            "status"=>"error"
        ];
}
}else{
    $message = [
        "message"=>"Invalid Request",
        "status"=>"error"
    ];
}

echo json_encode($message);
