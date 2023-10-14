<?php
    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:/tiktek/index.php?logout=1");
        exit();
    }

    if(isset($_POST['Login']))
    {
        $userid = $_POST['email'];
        $password = $_POST['password'];

        include 'dbConnect.php';

        $qry = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $qry);
        $numRows = mysqli_num_rows($result);
        if ($numRows==1) // User is customer
        {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password,$row['u_password'])) // Passwords matches
            {
                // echo "Login Success";
                $_SESSION['loggedin'] = true;

                if ($row['reg_date'] !== false) {
                $currentTimestamp = time();
                $userYear = date('Y', strtotime($row['reg_date']));
                $currentYear = date('Y');
                echo $differenceInYears = $currentYear - $userYear;
                }
                else
                {
                    echo "raj";
                }
                echo $_SESSION['Role'] = ($differenceInYears >= 2) ? "Senior" : (($differenceInYears >= 1) ? "Both" : "Junior");
                $_SESSION['Id'] = $row['u_id'];
                $_SESSION['FName'] = $row['u_fname'];
                $_SESSION['LName'] = $row['u_lname'];
                $_SESSION['PhoneNumber'] = $row['u_contact'];
                $_SESSION['Email'] = $userid;

                header("Location:/tiktek/index.php?LoginSuccess=True");
                exit();
            }
            else    // Passwords don't match
            {
                echo "incorrect pw";
                header("Location:/tiktek/index.php?LoginSuccess=false&Fault=Wrong Password");
                exit();
            }
        }
        else{
            header("Location:/tiktek/index.php?LoginSuccess=false&Fault=User<b> $userid </b>does not exit");
            exit();
        }
    }
?>