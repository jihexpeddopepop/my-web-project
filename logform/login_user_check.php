<?php 
session_start();
include('connectdb.php');              
                  $username = $_POST['txt_username'];
                  $password = $_POST['txt_password'];


                  
                  $sql="SELECT * FROM book_login where book_login_username='".$username."' and book_login_password='".$password."'";
                  $result = mysqli_query($con,$sql);
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      Header("Location:main_page"); 
                      }else{           
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
?>