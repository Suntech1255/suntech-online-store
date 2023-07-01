<?php include'conn.php' ; ?>
<?php

                         $last_id=mysqli_insert_id($conn);
                        $insert= "INSERT INTO wallet (balance,profits,affilliate,user_id) VALUES ('1200','1200','1200','$last_id')";
                        $query2 =mysqli_query($conn,$insert);
                        if($query2==true)

                        {
                            echo"account successfully created";
                        }
                     
                        else
                        {
                            echo"account not created";  
                        }


?>