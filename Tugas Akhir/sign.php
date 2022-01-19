<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-up</title>
    <link rel="stylesheet" href="editAll.css">
</head>
<body>
    <div class="header mnsrat">
        <h1 style="font-size: 50px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">LISTEN</h1>
        <p style="padding: 15px; font-size: 25px;">Welcome</p>
    </div>
    <nav class="mnsrat">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
        </label>
        <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px;">LISTEN</p>
        <ul>
            <li><a  href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="aktif" href="#">Sign-up</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="utama">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div>
                <label>Username</label><br>
                <input type="text" name="fname">
            </div>
            <div>
                <label>Email</label><br>
                <input type="email" name="femail">
            </div>
            <div>
                <label>Password</label><br>
                <input type="text" name="fpassword">
            </div>
            <div>
                <label>Confirm Password</label><br>
                <input type="text" name="fconfirmpassword">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
        <div>
            <?php
                $nama = isset($_POST['fname']) ? $_POST['fname']: '';
                $email = isset($_POST['femail']) ? $_POST['femail']: '';
                $password = isset($_POST['fpassword']) ? $_POST['fpassword']: '';
                $confirmpassword = isset($_POST['fconfirmpassword']) ? $_POST['fconfirmpassword']: '';

                $data = "<br><br>Username: $nama<br>Email: $email<br>Password: $password<br>Confirm Password: $confirmpassword";
                $Tamu = fopen("BukuTamu.txt", "a");

                if(isset($_POST['fname']) || isset($_POST['femail']) || isset($_POST['fpassword']) || isset($_POST['fconfirmpassword'])){
                    fwrite($Tamu,$data);
                    fclose($Tamu);
                }

                if(isset($_POST['fname']) || isset($_POST['femail']) || isset($_POST['fpassword']) || isset($_POST['fconfirmpassword'])){
                    $Tamu = fopen("BukuTamu.txt", "r");
                    echo fread($Tamu, filesize("BukuTamu.txt"));
                }
            ?>
        </div>
    </div>
    <footer>
        <h5 style="text-align: left;">Copyright &copy;2022 | LISTEN</h5>
        <a href="#"><i class="fas fa-arrow-up"></i></a>
     </footer>
</body>
</html>