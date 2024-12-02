<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Enter your password" required>
        <div class="show-password">
          <input type="checkbox" id="showPassword">
          <label for="showPassword">Show Password</label>
        </div>
      </div>
      <button type="button" id="loginButton">Login</button>
      <p id="errorMessage"></p>
    </form>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
