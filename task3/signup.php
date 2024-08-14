
<?php
session_start();

// connection to database
$db= mysqli_connect("localhost","root","","authentication");


if (isset($_post['submit'])){
    session_start();
    $username =mysql_real_escape_string($_post['username']);
    $email =mysql_real_escape_string($_post['email']);   
    $password =mysql_real_escape_string($_post['password']);   
    $password2 =mysql_real_escape_string($_post[' password2']);

    if($password==$password2){
        //create user
        $password =md5[$password];    //hash password before starting for security purposes
        $sql="INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
        mysql_query($db ,$sql);
        $_SESSION['message']='you are now logged in';
        $_SESSION['username']=$username;
        header('location:blogin.php'); //redirect to login page
    } else{
        $_SESSION['message']='the two passwords do not match';


    
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>SIGN UP</title>
        <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'poppins',sans-serif;
        }
        body{
            background-color: antiquewhite;
        }
        .smily{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
        }
        .ammu{
            background-color: aliceblue;
            display: flex;
            flex-direction: column;
            padding: 25px 25px;
            border-radius: 20px;
            box-shadow: 0 0 128px 0 rgba(0,0,0,0.1);
        }
        .ammu{
            width: 450px;
            margin: 0px 10px;
        }
        .ammu{
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
        }
        .ammu .field{
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }
        .ammu .input input {
            height: 40px;
            width:100%;
            font-size: 12px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #e7e5f0;
            outline: none;
        }
        .btn{
            height: 40px;
            background-color: rgba(19, 47, 231, 0.8);
            text-align: center;
            border: 0;
            color: #e6e6e6;
            border-radius: 5px;
            font-size: 15px;
            outline: none;
            cursor:pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0px 10px;
        }
        .bts:hover{
            opacity: 0.82;
        }
        .submit{
            width: 100%;
        }
        .link{
            margin-bottom: 15px;
        }

        </style>
    </head>
    <body>
        
        <div class="smily">
            <h1>SIGN UP</h1>
            <form action="blogin.php" method="post">
                <div class="ammu">
                    <div class="field input">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="username">username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>
                    
                    <div class="field input">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="conformpassword">conformpassword</label>
                        <input type="password" name="conformpassword" id="password" autocomplete="off" required>
                    </div>
                    
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="link">
                       Already a member? <a href="index.php">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
