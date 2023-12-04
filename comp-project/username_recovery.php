<!-- username_recovery.php -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Recovery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px; /* Adjust the width as needed */
        }
        .header h2 {
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        p {
            margin-top: 16px;
            font-size: 14px;
        }
        a {
            text-decoration: none;
            color: #4caf50;
        }
        .switch-link {
            color: #007bff;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Username Recovery</h2>
    </div>

    <form method="post" action="username_recovery.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="recovery_email">
        </div>
        <!-- Dropdown and Input for Security Question 1 -->
        <div class="input-group">
            <label>Security Question 1</label>
            <select name="security_question_1">
                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                <option value="In which city were you born?">In which city were you born?</option>
                <option value="What is your favorite book?">What is your favorite book?</option>
                <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
            </select>
            <input type="text" name="security_answer_1" placeholder="Your answer">
        </div>
        <!-- Dropdown and Input for Security Question 2 -->
        <div class="input-group">
            <label>Security Question 2</label>
            <select name="security_question_2">
                <option value="What is your favorite movie?">What is your favorite movie?</option>
                <option value="In which year did you graduate from high school?">In which year did you graduate from high school?</option>
                <option value="What is the name of your childhood best friend?">What is your name of your childhood best friend?</option>
                <option value="What is the first name of your favorite teacher?">What is the first name of your favorite teacher?</option>
                <option value="What is the color of your first car?">What is the color of your first car?</option>
            </select>
            <input type="text" name="security_answer_2" placeholder="Your answer">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="recover_username">Recover Username</button>
        </div>
    </form>

    <p>Remember your username? <a href="login.php">Login here</a></p>
    
    <!-- Link to switch between password and username recovery -->
    <p>Forgot your password? <a class="switch-link" href="recovery.php">Recover password</a></p>

</div>

</body>
</html>

