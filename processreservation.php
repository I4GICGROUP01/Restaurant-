<?php
   if (isset($_POST["submit"])){
       $name = $_POST['name'];

       $email=$_POST['email'];
       $phone = $_POST['phone'];
       $date = $_POST['date'];
       $time = $_POST['time'];
       $member = $_POST['member'];
       $request = $_POST['request'];
       $link=mysqli_connect("localhost","root","","resturant");
       if (!$link){
           die("connect failed:". mysqli_connect_error());
       }


       $sql = "insert into reservation (email,customer_name,phone,reservation_date,reservation_time,member,request) 
        VALUES ('$email','$name','$phone','$date','$time','$member','$request')";

       if(mysqli_query($link,$sql)){
           header('Location: index.php');
       }else{
           echo "Fail to create new word";
       }

   }

?>