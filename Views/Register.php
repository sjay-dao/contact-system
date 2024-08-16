<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius:   
 5px;
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

button   
 {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
 </style>   

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="../ServerSide/register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label> 

        <input type="email" id="email" name="email" required><br>
        <label for="company">Company:</label>
        <input type="text" id="company" name="company"><br>
       
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br>
        <label for="password">Password:</label> 
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>