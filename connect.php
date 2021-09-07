<?php



    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $houseNumber = $_POST['houseNumber'];
    $question = $_POST['question'];



    $myVariable = $_POST[lastNamee];


    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);   
    }else {
        $stmt = $conn->prepare("insert into registration(firstName, lastName, email, address, houseNumber, question)
        values(?, ?, ?, ?, ?, ?)")
        €stmt->bind_param("ssssss,$firstName, $lastName, $email, $address, $houseNumber, $question");
        $stmt->execuse();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>