<?php
    $name = $_GET['name'];
    $age = $_GET['age'];

    if(strlen($name) >0 && $age > 0){ 
        $connection = mysqli_connect('172.18.0.2', 'root', '123', 'curso_udemy') or die("Couldn't connect to db");

        $sql = 'INSERT INTO people (name, age) values("'.$name.'", "'.$age.'")';

        if(mysqli_query($connection, $sql)){
            echo "La persona ". $name. " se agrego correctamente.";
        }else{
            echo "Error" . $sql . "<br>". mysqli_error($connection);
        }
        mysqli_close($connection);
    }else{ 
        echo "los datos no son validos"; 
    } 

