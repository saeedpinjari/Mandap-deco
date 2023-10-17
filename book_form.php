<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
       

        $request = " insert into book_form(name, email, phone, message) values
        ('$name','$email','$phone','$message')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }
