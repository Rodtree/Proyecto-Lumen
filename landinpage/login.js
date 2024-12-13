document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        fetch("http://localhost/lumen/public/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ email, password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Login successful, redirect to dashboard or whatever
                window.location.href = "/landinpage/plantilla_reducidisima/plantilla/index.html";
            } else {
                // Login failed, display error message
                document.getElementById("login-response").innerHTML = "Invalid email or password";
            }
        })
        .catch(error => console.error(error));
    });
});

