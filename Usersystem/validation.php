
        <?php
        session_start();
        include "db.php";

        if (isset($_POST['uname']) && isset($_POST['password']))
        {
            function validate($data){
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            $uname=validate($_POST['uname']);
            $password=validate($_POST['password']);
            if(empty($uname)){
                header("Location: login.php?error=*username is required");
                 exit();

            }
            elseif(empty($password)){
                header("Location: login.php?error=*password is required");
                exit();

            }
            else{
                $sql="SELECT * FROM REGISEREDDATA WHERE email='$uname' AND password='$password'";
                $result=mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_assoc($result);
                    if($row['email']==$uname && $row['password']==$password){
                    $_SESSION['uname']=$row['email'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['age']=$row['age'];
                    $_SESSION['num']=$row['number'];
                    $_SESSION['anum']=$row['alnumber'];
                    $_SESSION['id']=$row['id'];
                    $_SESSION['dob']=$row['dob'];
                    header("Location: logout.php");
                    exit();
                    }
                    else{
                        header("Location: login.php?error=Incorrect Username Or Password");
                        exit();
                    }
                }
                else{
                    header("Location: login.php?error=Incorrect Username Or Password");
                    exit();
                }
                
            }

        }
        else{
            header("Location: login.php");
            exit();
        }
        