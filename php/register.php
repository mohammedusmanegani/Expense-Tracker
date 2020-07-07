<?php
    require_once('../functions.php');
    db_connect();
    var_dump($_POST);
    if($_POST['password']!=$_POST['passwordConfirm'])
    {
        redirect_to('../sign-up/sign-up.php?registerFailed=true');
    }
    if($_POST['gender']=='m')
    {
        $gender = "Male";
    }
    else if($_POST['gender']=='f')
    {
        $gender = "Female";
    }
    else
    {
        $gender = "Other";
    }
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userPassword, userPhone, userDOB, userGender) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('sssssss',$_POST['firstName'],$_POST['lastName'],$_POST['emailId'],$password,$_POST['phoneNumber'],$_POST['dateOfBirth'],$gender);
    
    if($statement->execute())
    {
        redirect_to('../index.php?registered=true');
    }
    else
    {
        die($conn->error);
    }
?>