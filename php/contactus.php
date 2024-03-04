<?php
require 'conn.php';
        if(isset($_POST['submit'])){
    
            //Declaring variables and assign empty values
            
            $FirstName = $_POST['f_name'];
            $LastName = $_POST['l_name'];
            $Email = $_POST['email'];
            $Phone=$_POST['phone'];
            $Massage=$_POST['massage'];
            
                
            if(empty($FirstName)||empty($LastName)||empty($Email)||empty($Phone)||empty($Massage)){
                echo'<script>
                    alert("Empty fields");
                    </script>';
                    exit();
            }
            else{
                        $sql="INSERT INTO `contactus`(`f_name`, `l_name`, `email`,`phone`, `massage`) VALUES ('$FirstName','$LastName','$Email','$Phone','$Massage')";
                        $result = mysqli_query($conn,$sql);
                            if($result){
                                echo'<script>
                                    alert("Massage sent Successfully !");
                                    </script>';
                                    exit();
                            }
                            else{
                                    echo'<script>
                                    alert("Massage sent Failed!");
                                    </script>';
                                    exit();
                            }
                    }
                    
            }
        else{
            echo'<script>
                    alert("Empty fields");
                    </script>';
                    exit();
    
        }
        
    