<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeCareKu - Sign Up</title>
    <style>
        body {
            background-color: #E3FFF6;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 50px 0;
            text-align: center;`
        }
        .logo {
            margin-bottom: 30px;
        }
        .logo img {
            width: 100px;
        }
        h2 {
            color: #5BB5A2;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .terms {
            font-size: 12px;
            color: #555;
            margin: 10px 0;
        }
        .login-link {
            margin-top: 20px;
            font-size: 14px;
            color: #007BFF;
        }
        .login-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="homecareku_logo.png" alt="HomeCareKu Logo">
    </div>

    <h2>HOMECAREKU</h2>

    <form action="register.php" method="post">
        {{-- <input type="text" name="username" placeholder="Create your username" required> --}}
        <input type="email" name="email" placeholder="Enter  your email" required>
        <input type="password" name="password" placeholder="Minimum 8 characters" required>
        
        <div class="terms">
            By signing up, you accept our <a href="#">Terms and Conditions</a>
        </div> 
        
        <button type="submit">Sign in</button>
    </form>

    <div class="login-link">
        <hr>
        <span>Or</span><br>
        <a href="login.php">create account</a>
    </div>
</div>
    

</body>
</html>
