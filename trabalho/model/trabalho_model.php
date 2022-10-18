<?php  
    require_once "connect.php";

    function inserirEmail($email){
        global $con;
        $sql = "INSERT INTO rodoviariasga (email) VALUES ('$email')";
        $con->query($sql);
    }
?>