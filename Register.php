<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body background = "gym.jpg"></body>
    <form action="contact.php" method="POST">
        <fieldset>
        <legend>New Account</legend>
        <p>
            <label>First Name:</label>
            <input type="text" name="Fname" placeholder="First Name" />
        </p>
        <p>
            <label>Last Name:</label>
            <input type="text" name="Lname" placeholder="Last Name" />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username" />
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="E-mail" />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" />
        </p>
        <p>
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="Male" /> Male</label>
            <label><input type="radio" name="gender" value="Female" /> Female</label>
        </p>
        <p>
            <label>Height:</label>
            <input type="height" name="height" placeholder="Height" />
        </p>
        <p>
            <label>Weight:</label>
            <input type="weight" name="weight" placeholder="Weight" />
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
            <label>Note:</label>
            <textarea name="note"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>