document.addEventListener("DOMContentLoaded", function() {
    const registerForm = document.getElementById("register-form");
    const registerBtn = document.getElementById("register-btn");
    const registerResponse = document.getElementById("register-response");
  
    registerBtn.addEventListener("click", function(event) {
      event.preventDefault();
  
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
  
      fetch("http://localhost/lumen/public/register", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ name, email, password })
      })
      .then(response => response.json())
      .then(data => {
        registerResponse.innerHTML = `User created successfully!`;
      })
      .catch(error => {
        registerResponse.innerHTML = `Error: ${error.message}`;
      });
    });
  });