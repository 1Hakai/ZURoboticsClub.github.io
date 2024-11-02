<?php
include_once 'inc/header.inc.html';
 ?>
    <div class="wrapper">
        <form action="login.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" name="username" />
          <i class="bx bx-user"></i>
          <!-- user icon-->
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name="password" />
          <i class="bx bx-lock-alt"></i>
          <!-- lock icon-->
        </div>

        <div class="remeber-forgot">
          <label><input type="checkbox" /> Remember me | </label>
          <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>
            Don't have an account?
            <a href="#" class="Rregister-btn"> Register</a>
          </p>
        </div>
      </form>
    </div>
        
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate username: ensure it does not start with a number or special character
        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]*$/', $username)) {
            echo "<p style='color: red'>Error: Username must start with a letter and contain no special characters.</p>";
        } else {
            echo "<p style='color: green'>Success: Great Username!</p>";
        }

        // Validate password: must be longer than 8 characters, include at least one special character and one number
        if (strlen($password) < 8) {
            echo "<p style='color: red'>Error: Password must be longer than 8 characters.</p>";
        } elseif (!preg_match('/[0-9]/', $password)) {
            echo "<p style='color: red'>Error: Password must include at least one number.</p>";
        } elseif (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
            echo "<p style='color: red'>Error: Password must include at least one special character.</p>";
        } else {
            echo "<p style='color: green'>Success: Password is valid!</p>";
        }
    }
    ?>

<?php
include_once 'inc/footer.inc.html';
?>