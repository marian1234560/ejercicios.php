<?php 
    if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email'])){
        if ($_POST['name'] !== "" && $_POST ['lastname'] !== "" && $_POST ['email'] !== ""){
         $value= 1;   
        }
        else {
            $value = 0;
        }
    }

    echo $lastname."value";

    header("Location: ./index.php?confirm=".$value)
?>