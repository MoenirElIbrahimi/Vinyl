const hardcodedUsername = "user123";
const hardcodedPassword = "password123";

document.getElementById("loginButton").addEventListener("click", function() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const errorMessage = document.getElementById("errorMessage");

  if (username === hardcodedUsername && password === hardcodedPassword) {
    alert("Login successful!");
    errorMessage.textContent = ""; 
  } else {
    errorMessage.textContent = "Invalid username or password!";
  }
});

document.getElementById("showPassword").addEventListener("change", function() {
  const passwordField = document.getElementById("password");
  if (this.checked) {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
});
