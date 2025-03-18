<?php
session_start();
$connection = mysqli_connect("localhost","root","","photography");


if(isset($_POST['save_btn'])){
    /*echo "Hello admin"; */
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Number = $_POST['Number'];
    $City = $_POST['City'];

    $insert_query = "INSERT INTO registration (Username, Email, Password, Number, City) VALUES (?, ?, ?, ?, ?)";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "error";
        header('location: index.php');
    }
    
 }

 if(isset($_POST['update_btn']))
 {
    $id = $_POST['id'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Number = $_POST['Number'];
    $City = $_POST['City'];

    $update_query = "UPDATE registration SET Username='$Username', Email='$Email', Password='$Password', Number='$Number', City='$City' WHERE id='$id' ";
    $update_query_run = mysqli_query($connection,$update_query);

    if($update_query_run)
    {
        $_SESSION['status'] = "DATA UPDATED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = "UPDATION FAILED";
        $_SESSION['status_code'] = "error";
        header('location: index.php');
    }
    
 }

//condition for approve and Reject

 if(isset($_POST['accept_btn'])){

    $id = $_POST['user_id'];
    
    $approve_query = "UPDATE booking SET status = 'Approved' WHERE  id = '$id' ";
    $approve_query_run = mysqli_query($connection,$approve_query);

    if($approve_query_run){
        $_SESSION['status'] = "BOOKIG APPROVED";
        $_SESSION['status_code'] = "success";
        header('location: booking.php');
    }
    else
    {
        $_SESSION['status'] = "BOOKING APPROVED FAILED";
        $_SESSION['status_code'] = "error";
        header('location: booking.php.php');
    }

}

if(isset($_POST['decline_btn'])){

    $id = $_POST['user_id'];
  
    $decline_query = "UPDATE booking SET status = 'Rejected' WHERE id = '$id' ";
    $decline_query_run = mysqli_query($connection,$decline_query);

    if($decline_query_run)
    {
        $_SESSION['status'] = "BOOKIG REJECTED";
        $_SESSION['status_code'] = "success";
        header('location: booking.php');
    }
    else
    {
        $_SESSION['status'] = "BOOKING REJECTED FAILED";
        $_SESSION['status_code'] = "error";
        header('location: booking.php');
    }
}

 if(isset($_POST['delete_btn'])){
    $id = $_POST['user_id'];

    $delete_query = "DELETE FROM registration WHERE id='$id' ";
    $delete_query_run = mysqli_query($connection, $delete_query); 

    if($delete_query_run)
    {
        $_SESSION['status'] = "DATA DELETED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = "DATA DELETION FAILED";
        $_SESSION['status_code'] = "error";
        header('location: index.php');
    }
 }

