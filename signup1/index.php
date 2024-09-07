<?php

$message = ''; // Initialize the message variable

// Initialize form variables to empty strings
$USER_NAME = '';
$PASSWORD = '';
$Email = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Sanitize and assign the POST data to variables
    $USER_NAME = mysqli_real_escape_string($conn, $_POST['username']);
    $PASSWORD = mysqli_real_escape_string($conn, $_POST['password']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if the user already exists
    $sql = "SELECT * FROM registration WHERE username='$USER_NAME'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $message = "<div class='alert failed'>User already exist!!</div>";
        } else {
            // Insert new user
            $sql = "INSERT INTO registration (username, password, email) VALUES ('$USER_NAME', '$PASSWORD', '$Email')";
            $result = mysqli_query($conn, $sql);

            // Check if the query was successful
            if ($result) {
                $message = "<div class='alert success'>Signed Up Successfully!!</div>";
                // Clear the form fields
                $USER_NAME = '';
                $PASSWORD = '';
                $Email = '';
                header('location:login.php');
                
            } else {
                die("Error: " . mysqli_error($conn));
            }
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
    <title>Sign up</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            position: relative;
        }

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

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-label {
            font-weight: 700;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #0066cc;
            box-shadow: 0 0 8px rgba(0, 102, 204, 0.2);
        }

        .form-text {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 1rem;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: #555;
        }

        .btn-primary {
            background-color: #0066cc;
            border: none;
            padding: 0.75rem;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #004a99;
        }
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
        <h1>Create an Account</h1>
        <form action="sign.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" value="<?php echo htmlspecialchars($USER_NAME); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($Email); ?>" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($PASSWORD); ?>" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">I agree to the terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <div class="message">
            <span>You already have an account?</span>  <a href="login.php">Signin</a>
            </div>
        </form>
    </div>
</body>

</html>
