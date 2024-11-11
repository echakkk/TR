<?php include 'db_valesca.php';

function createMember($conn,$username,$name,$password){
    $stmt = $conn->prepare ("INSERT INTO member(username, name, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $username, $name, $password);
    
    if($stmt->execute()){
        header('Location: signup.php');
        exit();
    }else{
        echo"<div class = 'alert alert-danger'> error".stmt->error."</div>";
    }
    $stmt->close();
}


?>