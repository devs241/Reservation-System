<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Court Rental</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            height: 100vh;
            background: url('1.png') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .content {
            position: relative;
            color: white;
            padding: 20px;
        }

        .content h1 {
            font-size: 50px;
            font-family: 'antic', sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);
        }

        .login-btn {
            display: inline-block;
            text-decoration: none;
            color: black;
            font-size: 18px;
            background: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            border: 2px solid black;
            margin-top: 20px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: black;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="overlay"></div>
    <div class="content">
        <h1>WELCOME TO BADMINTON COURT RESERVATION</h1>
        <a href="login.php" class="login-btn">LOGIN</a>
    </div>
</div>

</body>
</html>
