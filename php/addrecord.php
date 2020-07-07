<?php
    require_once('../functions.php');
    db_connect();
    $expenseCategoryCode = $_POST['expenseCategory'];
    if(strcmp($expenseCategoryCode,'ADV')==0)
    {
        $expenseCategory = "Advertising";
    }
    else if(strcmp($expenseCategoryCode,'CTE')==0)
    {
        $expenseCategory = "Car & Truck Expenses";
    }
    else if(strcmp($expenseCategoryCode,'CON')==0)
    {
        $expenseCategory = "Contractors";
    }
    else if(strcmp($expenseCategoryCode,'EAT')==0)
    {
        $expenseCategory = "Education and Training";
    }
    else if(strcmp($expenseCategoryCode,'EBS')==0)
    {
        $expenseCategory = "Employee Benefits";
    }
    else if(strcmp($expenseCategoryCode,'MAE')==0)
    {
        $expenseCategory = "Meals & Entertainment";
    }
    else if(strcmp($expenseCategoryCode,'OEP')==0)
    {
        $expenseCategory = "Office Expenses & Postage";
    }
    else if(strcmp($expenseCategoryCode,'PER')==0)
    {
        $expenseCategory = "Personal";
    }
    else if(strcmp($expenseCategoryCode,'PRO')==0)
    {
        $expenseCategory = "Professional Services";
    }
    else if(strcmp($expenseCategoryCode,'ROL')==0)
    {
        $expenseCategory = "Rent or Lease";
    }
    else if(strcmp($expenseCategoryCode,'SUP')==0)
    {
        $expenseCategory = "Supplies";
    }
    else if(strcmp($expenseCategoryCode,'TRA')==0)
    {
        $expenseCategory = "Travel";
    }
    else if(strcmp($expenseCategoryCode,'UTI')==0)
    {
        $expenseCategory = "Utilities";
    }
    else if(strcmp($expenseCategoryCode,'HOH')==0)
    {
        $expenseCategory = "Household";
    }
    else
    {
        $expenseCategory = "Other Expenses";
    }
    $sql = "INSERT INTO expenses (fromUser,expenseAmount,expenseCategory,expenseNote,expenseDate) VALUES (?, ?, ?, ?, ?);";
    $statement = $conn->prepare($sql);
    $statement->bind_param('sssss',$_SESSION['userId'],$_POST['expenseAmount'],$expenseCategory,$_POST['expenseNote'],$_POST['expenseDate']);
    if($statement->execute())
    {
        redirect_to('../user-portal/user-portal.php');
    }
    else
    {
        die("There has been an error, please try again after some time");
    }
?>