<?php include_once('./conn.php');?>

<?php

    $Name=$_POST["Name"];
    $Pay=$_POST["Pay"];
    $Month=$_POST["Month"];
    $Year=$_POST["Year"];
    $Code=$_POST["Code"];

    $sql = "INSERT INTO payment(ID,Name,Card_Num,Expire_Month,Expire_Year,CVV) VALUES ('','$Name','$Pay','$Month','$Year','$Code')";

    if(mysqli_query($connec,$sql)){
        header("Location: ../html/home.html");

    }else{

        echo "<script> alert('PAYMENT ERROR') </script>";

    }

    mysqli_close($connec);

?>