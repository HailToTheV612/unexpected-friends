<?php
    function validateFormData($formData) {
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        //make the function globally accessible
        return $formData;
    }

    //check to see if inputs are empty
    //create variables with form data
    //wrap the data with our function

    //if the inputs and the POST collection are empty, give error message. Otherwise, add the form data to the collection from the inputs
    if(isset($_POST["firstName"])) {
        $firstName = validateFormData($_POST["firstName"]);
    } else {
        $firstNameError = "<small style='color: #FF9D9D;font-size: 80%;'>*Please enter your first name</small>";
    }

    if(isset($_POST["lastName"])) {
        $lastName = validateFormData($_POST["lastName"]);
    } else {
        $lastNameError = "<small style='color: #FF9D9D;font-size: 100%;'>*Please enter your last name</small>";
    }

    if(isset($_POST["email"])) {
        $email = validateFormData($_POST["email"]);
    } else {
        $emailError = "<small style='color: #FF9D9D;font-size: 100%;'>*Please enter your email</small>";
    }

    if(isset($_POST["message"])) {
        $message = validateFormData($_POST["message"]);
    } else {
        $messageError = "<small style='color: #FF9D9D;font-size: 100%;'>*Please enter your message</small>";
    }

?>