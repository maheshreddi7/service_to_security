document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Perform your login validation here
  if (username === "admin" && password === "password") {
    document.getElementById("message").textContent = "Login successful!";
    // Redirect the user to another page or perform other actions
  } else {
    document.getElementById("message").textContent = "Invalid username or password";
  }
});
