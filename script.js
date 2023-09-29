document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const errorMessage = document.getElementById("error-message");
    const submitBtn = document.getElementById("submitBtn");
    const successMessage=document.getElementById('success-Message');
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const validationError = validateForm(); // Implement your validation logic
        if (validationError) {
            errorMessage.style.display = "block";
            errorMessage.innerHTML = validationError;
            return;
        }

        const formData = new FormData(form);
        errorMessage.style.display = "none";

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "process.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Handle success, reset the form, show a success message, etc.
                        successMessage.style.display = "block";
                        successMessage.innerHTML = response.message;
                        console.log(response.message);
                        form.reset();
                    } else {
                        // Handle server validation errors
                        errorMessage.style.display = "block";
                        errorMessage.innerHTML = response.message;
                    }
                } else {
                    // Handle AJAX request error
                    errorMessage.style.display = "block";
                    errorMessage.innerHTML = "An error occurred while processing your request.";
                }
            }
        };
        xhr.send(formData);
    });
});

function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    return null; // Return null if all validations pass
}

function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function isValidPhone(phone) {
    //phone validation using a simple pattern
    const phonePattern = /^(?:\+1\d{10}|\+92\d{10}|0[1-9]\d{9})$/  ;
    return phonePattern.test(phone);
}
