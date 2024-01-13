<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/desktop/register.css">
    <link rel="stylesheet" href="../css/mobile/register.css">
    <title>Registration</title>
</head>
<body>
    <form action="../controller/register/register_proc.php" method="post">
        <h2>Registration Page</h2>
        <div>
            <label>First Name:</label>
            <input type="text" name="fname" id="fname">
            <p id="fnameError" class="errorMessages"></p>
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="lname" id="lname">
            <p id="lnameError" class="errorMessages"></p>
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username" id="usernameInput">
            <p id="usernameError" class="errorMessages"></p>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" id="emailInput">
            <p id="emailError" class="errorMessages"></p>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" id="password">
            <ion-icon id="showPassIcon" name="eye-outline"></ion-icon>
            <p id="passwordError" class="errorMessages"></p>
            <p id="passwordError" class="errorMessages"></p>
            <p id="passwordError" class="errorMessages"></p>
            <p id="passwordError" class="errorMessages"></p>
        </div>
        <div>
            <label>Age:</label>
            <input type="number" name="age">
            <p id="ageError" class="errorMessages"></p>
        </div>
        <input id="button" type="submit" value="Register" name="action"></input>

        <a href="login.php">Already Have an Account? Login</a>
    </form>

    <script src="../javascript/register.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>