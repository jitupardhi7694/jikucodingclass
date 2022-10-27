<?php      
    include('config.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from registration where email = '$username' and password = $password";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $count = mysqli_num_rows($result);  
          
        // function function_alert($message) { 
              
        //      echo "<script>alert('$message');</script>";

        //  } 
        //     // Function call
        // function_alert("Welcome to the JituCodingClass"); 

        if($count == 1){  

            echo `<h4>successfully login..</h4>`;                
            header('location:databaseregister.php');
         } else{
            echo "username and password incorrect....";
         }
           
     

?>  
