<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    
    

                    <form action="validation.php" method="post">
                        <input type="text" class="input-box" name="username" placeholder="Your Username">
                        <input type="password" class="input-box" name="password1" placeholder="Your password" required>
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
                    <a href="login.php">Admin Login</a>
                </div>
                <div class="card-back">
                    <h2>REGISTER HERE</h2>
                    <form action="register.php" method="post">
                        <input type="text" class="input-box" name="username" placeholder="Username" required>
                        <input type="email" class="input-box" name="email" placeholder="Your Email" required>
                        <input type="password" class="input-box" name="password1" placeholder="Your password" required>
                        <button type="submit" class="submit-btn" onclick="user_register()">Submit</button>
                        <!-- <input type="checkbox"><span>Remember Me</span> -->
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I've An Account</button>
                    <a href="login.php">Admin Login</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }

        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>
</html>