<?php include_once('./conn.php');?>
<?php

    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
        $FirstName = "";
        $LastName = "";
        $Password = "";
        $ConfirmPassword = "";
        $Age =""; 
        $Email = "";
        $ContactNumber = ""; 
        $Address ="";
        $Gender ="";
        $RegisterAs ="";

        $FirstName = input_varify($_POST['fname']);
        $LastName = input_varify($_POST['lname']);
        $Password = input_varify($_POST['pwd']);
        $ConfirmPassword = input_varify($_POST['psw-repeat']);
        $Age = input_varify($_POST['age']);
        $Email = input_varify($_POST['email']);
        $ContactNumber = input_varify($_POST['num']);
        $Address = input_varify($_POST['address']);
        $Gender = input_varify($_POST['gender']);
        $RegisterAs= input_varify($_POST['register']);
            


                $query = "INSERT INTO tbl_user(Fname,Lname,Pwd,Confirmpwd,Age,Email,ContactNumber,Address,Gender,RegisterAs,Reg_DT) VALUES( 
                    '{$FirstName}','{$LastName}','{$Password}','{$ConfirmPassword}','{$Age}','{$Email}','{$ContactNumber}','{$Address}','{$Gender}','{$RegisterAs}',NOW()
                )";

                $result = mysqli_query($conn, $query);

                if($result){
                    echo "User Registration Success!";
                }
                else{
                    echo mysqli_error($conn);
                }
    }


    function input_varify($data){
        //Remove empty spece from user input
        $data = trim($data);
        //Remove back slash from user input
        $data  = stripslashes($data);
        //conver special chars to html entities
        $data = htmlspecialchars($data);

        return $data;
    }

?>