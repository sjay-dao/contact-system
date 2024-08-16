<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>





<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    
    <?php
     session_start(); // Start session if not already started
     $_SESSION = array();
    // if (isset($_SESSION['isloggedIn'])) {
    //     echo "<script>window.location.href = '../Views/Contact.php';</script>";
    // }
    require './header.php';
    ?>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="button" id="login_button">Login</button>
        </form>

            <button style='background:none; color: red;' onclick="window.location.href='./Register.php'">
                Register?
            </button>
    </div>
    <h1 id="result"></h1>
</body>
</html>



<script>

    $(document).ready(function() {
        $('#login_button').click(function() {

            var username = $('#username').val();
            var password = $('#password').val();

            $.ajax({
            url: '../ServerSide/login.php', 
            type: 'POST', 
            data: { username: username, password: password },
            success: function(data) {
                $('#result').html(data); 
            }
            });
        });
    });
</script>