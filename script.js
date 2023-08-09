function login() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username === "admin@sinh" && password === "admin@sinh") {
    window.location.href = "welcome.html";
  } else {
    alert("Invalid credentials. Please try again.");
  }
}
