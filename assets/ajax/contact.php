<?php
    include '../includes/init.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        header('Content-Type: application/json');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $mobile = $_POST['mobile'];
    
        $query = "INSERT INTO `Contacts` (`Name`,`Email`,`Message`,`Mobile`) VALUES (?,?,?,?)";
        $params = [$name, $email, $message, $mobile];
        $inserted = execute($query, $params);
    
        echo json_encode(["status" => true, "message" => "Contact created successfully."]);
        http_response_code(200);
        exit();
    }
