function validateForm() {
    let isValid = true;

    document.getElementById("fnameError").innerHTML = "";
    document.getElementById("lnameError").innerHTML = "";
    document.getElementById("unameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("websiteError").innerHTML = "";
    document.getElementById("genderError").innerHTML = "";

    const fname = document.getElementById("firstname").value.trim();
    const lname = document.getElementById("lastname").value.trim();
    const uname = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const website = document.getElementById("website").value.trim();
    const gender = document.getElementsByName('gender');

    if (fname == "") {
        document.getElementById("fnameError").innerHTML = "First Name is required.";
        isValid = false;
    }

    if (lname == "") {
        document.getElementById("lnameError").innerHTML = "First Name is required.";
        isValid = false;
    }

    if (uname == "") {
        document.getElementById("unameError").innerHTML = "First Name is required.";
        isValid = false;
    }

    if (email == "") {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
    }

    if (password == "") {
        document.getElementById("passwordError").innerHTML = "Password is required.";
        isValid = false;
    }
    else if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    const websiteInput = document.getElementById("website");
    if (!websiteInput.checkValidity()) {
        document.getElementById("websiteError").innerHTML = "Enter a valid website URL.";
        isValid = false;
    }

    const genderSelected = document.querySelector('input[name="gender"]:checked');
    if (!genderSelected) {
        document.getElementById("genderError").innerHTML = "Please select a gender.";
        isValid = false;
    }   

    return isValid;
}