
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Court Booking</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('1.png') no-repeat center center/cover;
            color: white;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: green;
            padding: 10px 20px;
        }
        .logo {
            font-size: 20px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
        }
        .book-now {
            background: green;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .book-now:hover {
            background: darkgreen;
        }
    </style>
</head>
<body>

<header>
    
    <div class="logo">BADMINTON</div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="user_management.php">User Management</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <h1>BADMINTON COURT RESERVATION</h1>
    <button class="book-now" onclick="window.location.href='booking.php'">“BOOK NOW!”</button>
</section>

</body>
</html>
