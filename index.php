<?php
// session_start();
require_once "config.php";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <div class="signup-container">
       <h2>Sign Up</h2>
        <form action="includes/formhandler.inc.php" method="post" ">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter your username">
            <label for="password">Password:</label>
            <input type="pwd " name="pwd" placeholder="Enter your password">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Enter your email">
            <p class="error-message" id="error-message"></p>
            <button type="submit" class="submit-btn">Sign Up</button>
        </form> 
<h2>Change account</h2>
        <form action="includes/userUpdate.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter your username">
            <label for="password">Password:</label>
            <input type="pwd" name="pwd" placeholder="Enter your password">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Enter your email">
            <p class="error-message" id="error-message"></p>
            <button type="submit" class="submit-btn">Update</button>
        </form>
        <h2>Delete acount</h2>

        <form action="includes/userdelete.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter your username">
            <label for="password">Password:</label>
            <input type="pwd" name="pwd" placeholder="Enter your password">
            <button type="submit" class="submit-btn">Delete</button>
        </form>

    <!-- here we handle searching -->
    <form action="search.php" method="post">
        <label for="search">Search for users</label>
        <input type="text" id="search" name="usersearch" placeholder="search.....">
        <button>Search</button>
    </form>

    <?php
    echo $_SESSION["username"];
    ?>
    </div> -->


</body>
</html>
