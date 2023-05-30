<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style_1.css">
    <link rel="stylesheet" href="style_2.css">
</head>

<body>

    <!-- navbar  -->

    <nav>
        <div class="navbar">
            <div class="nav-img">
                <div>
                    <img src="http://localhost/inc_lab/project/images/navbar/images (5).png" alt="">
                </div>
                <h1>Tripy</h1>

            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="http://localhost/inc_lab/project/index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Destination</a></li>
                    <li id="signup"><a href="http://localhost/inc_lab/project/signup.php">SignUp</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- navbar end  -->
    <div class="login">
        <div class="login_img">
            <img src="http://localhost/inc_lab/project/images/bannar section/signUp.jpg" alt="">
        </div>
        <div class="form">
            <form action="connect.php" method="post">
                <div>
                    <h1>Please Sign Up!!!</h1>
                    <label for="name">Enter Your Name</label>
                    <br>
                    <input type="text" name="name" placeholder="Your Name">

                    <label for="username">Enter Your Email</label>
                    <br>
                    <input type="text" name="email" placeholder="Your Email">

                    <label for="password">Enter Password</label>
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>