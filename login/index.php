<?php
include('config.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query-> fetch(PDO::FETCH_ASSOC);
    
    if (!result) {
        echo '<p class="error">Invalid username and/or password!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {

              $_SESSION['user_id'] = $result['ID'];
              echo '<p class="success">Login successful!</p>';
            
        } else {
            echo '<p class="error"> Invalid username and/or password!</p>';
        }
    }
}
?>

<form method="post" action="" name="Please log in.">
    <div class="form-element">
        <label>Username</Label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Login</button>
</form>