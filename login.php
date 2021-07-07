<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body background = "gym.jpg">
        <div class="container">
            <form action="login.php" method="POST">
                <fieldset>
                <legend>Login</legend>
                <p>
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="username" />
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="password" />
                </p>
                <p>
                    <label>New Member ? <a href="Register.php">Sign Up</a> </label>
                </p>
                <button>
                    <input type="submit" name="submit" value="Login" href="home/home.html"/>
                <button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
        