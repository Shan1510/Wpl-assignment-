<?php


     $classname=$_POST['class_name'];
     $classsec=$_POST['class_sec'];

       $conn= new mysqli('localhost','root','','feemanagement');
        $query= ("INSERT INTO class (class_name,class_sec) VALUES ('$classname','$classsec')");
        $result=mysqli_query($conn,$query);

        