<?php
    require_once('../functions.php');
    db_connect();
    $email = $_POST['emailId'];
    $password = $_POST['password'];
    $sql = "SELECT userId, userFirstName, userPassword FROM users WHERE userEmail = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s',$email);
    if($statement->execute())
    {
        $statement->store_result();
        $statement->bind_result($userId, $firstName, $userPassword);
        $statement->fetch();
        if(password_verify($_POST['password'],$userPassword))
        {
            $_SESSION['userId'] = $userId;
            $_SESSION['firstName'] = $firstName;
            redirect_to('../user-portal/user-portal.php');
        }
        else
        {
            redirect_to('../index.php?loginFailed=true');
        }
    }