document.addEventListener('DOMContentLoaded', function () {
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");
  const loginButton = document.getElementById("login");

  const usernameError = document.getElementById("username-error");
  const passwordError = document.getElementById("password-error");

  loginButton.addEventListener("click", function () {
    validateForm();
  });

  function validateForm() {
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

    if (username === "") {
      usernameError.textContent = "Username is required";
      usernameError.style.color = "red";
    } else {
      usernameError.textContent = "";
    }

    if (password.length < 6) {
      passwordError.textContent = "Password must be at least 6 characters";
      passwordError.style.color = "red";
    } else {
      passwordError.textContent = "";
    }

  }

  // Add event listeners for real-time validation as the user types.
  usernameInput.addEventListener("input", function () {
    usernameError.textContent = "";
  });

  passwordInput.addEventListener("input", function () {
    passwordError.textContent = "";
  });
});


