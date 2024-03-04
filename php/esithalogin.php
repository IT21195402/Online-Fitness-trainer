<?php include_once('./conn.php');

if(isset($_POST['submit'])){
        $userName = $_POST['UN'];
        $password = $_POST['PW'];

       if(empty($userName) || empty($password)){
           echo'
           <script>
            alert("Empty fields");
            window.location="../html/esithalogin.html"
           </script>';
           exit();
       }
       else{
            $sql="SELECT email,password FROM tbl_user WHERE email='$userName'";
            $result=mysqli_query($conn,$sql);
            
            if(!$result){
                die("Query failed:" .mysqli_error($con))
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    $db_un = $row['email'];
                    $db_pw = $row['password']; 
                }
                if($username != $db_un){
                    echo'
                  <script>
            alert("Invalid Username");
            window.location="../html/esithalogin.html"
           </script>';
           exit();
                }
                else if($password != $db_pw){
                    echo'
                  <script>
            alert("Invalid Password");
            window.location="../html/esithalogin.html"
           </script>';
           exit();
                }
                else if($username == $db_un && $password == $db_pw){
                    session_start();
                    $_SESSION['email'] = $db_un;
                    header("location:../html/home.html");
                }
            }
       }
else{
    echo'
    <script>
alert("Empty Fields");
window.location="../html/esithalogin.html"
</script>';
exit();
}
?>