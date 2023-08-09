function login() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username === "user" && password === "password") {
    window.location.href = "welcome.html";
  } else {
    alert("Invalid credentials. Please try again.");
  }
}
