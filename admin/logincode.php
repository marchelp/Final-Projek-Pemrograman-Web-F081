<?php
include_once('security.php');


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = $connection->query($email_query);
    if(!$email_query_run->columnCount() > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = $connection->query($query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}





    if(isset($_POST['updatebtn'])) {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];    
        
        $query_update = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id'  ";
        $query_update_run = $connection->query($query_update);

        if($query_update_run) {
            $_SESSION['status'] = "Your Data is UPDATED";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "Your Data is NOT UPDATED";
            header('Location: register.php');
        }
    }


    if(isset($_POST['delete_btn'])) {
        $id = $_POST['delete_id'];

        $query_delete = "DELETE FROM register WHERE id='$id' ";
        $query_delete_run = $connection->query($query_delete);

        if($query_delete_run) {
            $_SESSION['status'] = "Your Data is DELETED";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "Your Data is NOT DELETED";
            header('Location: register.php');
        }
    }


    if(isset($_POST['login_btn'])) {
        $email_login = $_POST['email']; 
        $password_login = $_POST['password']; 

        $query_select = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'LIMIT 1";
        $query_select_run = $connection->query($query_select);

        if($query_select_run->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        } else {
            $_SESSION['status'] = 'Email id / Password is Invalid';
            header('Location: login.php');
        }
    }


    
?>