<?php

$message = ''; // Initialize the message variable

// Initialize form variables to empty strings
$USER_NAME = '';
$PASSWORD = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Sanitize and assign the POST data to variables
    $USER_NAME = mysqli_real_escape_string($conn, $_POST['username']);
    $PASSWORD = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the user exists and the password matches
    $sql = "SELECT * FROM registration WHERE username='$USER_NAME' AND password='$PASSWORD'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $message = "<div class='alert success'>Login Successful!!</div>";
            // You can add code here to redirect to a dashboard or homepage
            session_start();
            $_SESSION['username']=$USER_NAME;
            header('location:home.php');
            
        } else {
            $message = "<div class='alert failed'>Invalid Username or Password!!</div>";
            // Clear the form fields
            $USER_NAME = '';
            $PASSWORD = '';
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General body styling */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container styling */
        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            position: relative;
            margin: 0 auto;
        }

        /* Alert styling */
        .alert {
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            text-align: center;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert.failed {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Heading styling */
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Form label styling */
        .form-label {
            font-weight: 700;
            color: #555;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* Input field styling */
        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 1rem;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #0066cc;
            box-shadow: 0 0 8px rgba(0, 102, 204, 0.2);
            outline: none;
        }

        /* Base Button Styling */
        .btn {
    display: block; /* Make both <a> and <button> behave as block-level elements */
    padding: 0.75rem;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    width: 100%; /* Makes them full width of their container */
    text-align: center;
    margin-bottom: 1rem;
    color: #fff;
    border: none;
    text-decoration: none; /* Removes underline from <a> */
}

/* Primary Button Styling */
.btn-primary {
    background-color: #0066cc;
}

.btn-primary:hover {
    background-color: #004a99;
    transform: scale(1.05);
}

/* Signup Button Styling */
.message {
            margin-top: 2rem;
            color: #555;
            font-size: 1rem;
        }

        .message a {
            color: #0066cc; /* Color for the link */
            text-decoration: none; /* Remove underline from link */
            font-weight: 700; /* Make the link text bold */
        }

        .message a:hover {
            text-decoration: underline; /* Add underline on hover */
        }

    </style>
</head>

<body>
    <div class="container">
        <?php echo $message; ?>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" value="<?php echo htmlspecialchars($USER_NAME); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($PASSWORD); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="message">
            <span>You don’t have an account?</span>  <a href="index.php">Signup</a>
           
            </div>
        </form>
    </div>
</body>

</html>