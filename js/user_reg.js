function validateForm() {
    let isValid = true;

    const fullname = document.getElementById("fullname").value.trim();
    if (fullname === "")
    {
        document.getElementById("fullnameError").innerText = "Full Name is required.";
        isValid = false;
    }

    const email = document.getElementById("email").value.trim();
    if (email === "")    
    {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
    }

    const phone = document.querySelector('input[name="phone_number"]').value.trim();
    if (phone.length < 11)
    {
        document.getElementById("phoneError").innerText = "Enter a 11-digit phone number.";
        isValid = false;
    } 
    else
    {
        document.getElementById("phoneError").innerText = "";
    }



    const username = document.getElementById("username").value.trim();
    if (username === "") {
        document.getElementById("usernameError").innerText = "Username is required.";
        isValid = false;
    } else {
        document.getElementById("usernameError").innerText = "";
    }

    const password = document.querySelector('input[name="password"]').value;
    const confirmPassword = document.querySelector('input[name="confirm password"]').value;

    if (password.length < 6) {
        document.getElementById("passwordError").innerText = "Password must be at least 6 characters.";
        isValid = false;
    } else {
        document.getElementById("passwordError").innerText = "";
    }

    if (confirmPassword !== password) {
        document.getElementById("cpasswordError").innerText = "Passwords do not match.";
        isValid = false;
    } else {
        document.getElementById("cpasswordError").innerText = "";
    }

    const photo = document.querySelector('input[name="photo"]').value;
    if (photo === "") {
        document.getElementById("photoError").innerText = "Please upload a profile photo.";
        isValid = false;
    } else {
        document.getElementById("photoError").innerText = "";
    }

    const userType = document.getElementById("user").value;
    if (userType === "") {
        document.getElementById("UserError").innerText = "Please select a user type.";
        isValid = false;
    } else {
        document.getElementById("UserError").innerText = "";
    }

    const date = document.querySelector('input[name="date"]').value;
    if (date === "") {
        document.getElementById("dateError").innerText = "Please select a date.";
        isValid = false;
    } else {
        document.getElementById("dateError").innerText = "";
    }

    const address = document.querySelector('textarea[name="address"]').value.trim();
    if (address === "") {
        document.getElementById("addressError").innerText = "Address is required.";
        isValid = false;
    } else {
        document.getElementById("addressError").innerText = "";
    }

    return isValid;
}
