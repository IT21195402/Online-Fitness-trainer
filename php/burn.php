<?php
require 'conn.php';
        if(isset($_POST['submit'])){
    
            
            
            $WEIGHT = $_POST['Weight'];
            $HEIGHT = $_POST['Height'];
            $AGE = $_POST['Age'];
                
            if(empty($WEIGHT)||empty($HEIGHT)||empty($AGE)){
                echo'<script>
                    alert("Empty fields");
                    </script>';
                    exit();
            }
            else{
                        $sql="INSERT INTO `burn`(`Weight`, `Height`, `Age`) VALUES ('$WEIGHT','$HEIGHT','$AGE')";
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
        
    