<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

if(isset($_POST['loginButton'])) {
    //Login button was pressed
    echo "login button was pressed";
}

if(isset($_POST['registerButton'])) {
    //Register button was pressed
    $username = sanitizeFormUsername($_POST['username']);

    $firstName = sanitizeFormString($_POST['firstName']);
    
    $lastName = sanitizeFormString($_POST['lastName']);

    $email = sanitizeFormString($_POST['email']);
    
    $confirmEmail = sanitizeFormString($_POST['confirmEmail']);

    $password = sanitizeFormPassword($_POST['password']);
    
    $confirmPassword = sanitizeFormPassword($_POST['confirmPassword']);

    
}


?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Famify!</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
               <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="Username" required>
            </p>
            <p>
               <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
            
            
        </form>
        
        
        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
               <label for="registerUsername">Username</label>
                <input type="text" id="registerUsername" name="registerUsername" placeholder="Username" required>
            </p>
            
            <p>
               <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </p>
            
            <p>
               <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </p>
            
            <p>
               <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email" required>
            </p>
            
            <p>
               <label for="confirmEmail">Confirm Email</label>
                <input type="email" id="confirmEmail" name="confirmEmail" placeholder="email" required>
            </p>
            
            
            
            <p>
               <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your Password" required>
            </p>
            <p>
               <label for="confirmPassword">Confirm Password</label>
                <input type="confirmPassword" id="confirmPassword" name="confirmPassword" placeholder="Your Password" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
            
            
        </form>
    </div>
</body>
</html>