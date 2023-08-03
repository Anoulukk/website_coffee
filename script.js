const form = document.getElementById('form');
const username = document.getElementById('username');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('re-password');

form.addEventListener('submit', function (e) {
    const isValid = validateFormInputs();
    if (!isValid) {
        e.preventDefault(); // Prevent form submission if validation fails
    }else{
        sendDataToServer()
    }
});


function showError(input, message, duration = 3000) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;

    // Clear the error message after the specified duration (default is 3000ms/3 seconds)
    setTimeout(function () {
        formControl.classList.remove('error');
        small.innerText = '';
    }, duration);
}


function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

// Function to validate email
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function checkInput(inputArray) {
    inputArray.forEach(function (input) {
        if (input.value.trim() === '') {
            showError(input, `Please enter ${getInputCase(input)}`);
        } else {
            showSuccess(input);
        }
    });
}

function getInputCase(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function checkPassword(password1, password2) {
    if (password1.value !== password2.value) {
        showError(password2, 'Passwords do not match');
    } else {
        showSuccess(password2);
    }
}

function checkInputLength(input, min, max) {
    const length = input.value.length;
    if (length < min) {
        showError(input, `${getInputCase(input)} must be at least ${min} characters`);
    } else if (length > max) {
        showError(input, `${getInputCase(input)} must be less than ${max} characters`);
    } else {
        showSuccess(input);
    }
}
function validateFormInputs() {
    // Perform all form validation checks here
    const isValidUsername = username.value.trim().length >= 5 && username.value.trim().length <= 15;
    const isValidLastname = lastname.value.trim().length >= 5 && lastname.value.trim().length <= 15;
    const isValidEmail = validateEmail(email.value.trim());
    const isValidPassword = password1.value.trim().length >= 5 && password1.value.trim().length <= 15;
    const arePasswordsMatching = password1.value === password2.value;

    // Show error messages for invalid inputs
    if (!isValidUsername) {
        showError(username, 'Username must be between 5 and 15 characters');
    } else {
        showSuccess(username);
    }

    if (!isValidLastname) {
        showError(lastname, 'Lastname must be between 5 and 15 characters');
    } else {
        showSuccess(lastname);
    }

    if (!isValidEmail) {
        showError(email, 'Please enter a valid email address');
    } else {
        showSuccess(email);
    }

    if (!isValidPassword) {
        showError(password1, 'Password must be between 5 and 15 characters');
    } else {
        showSuccess(password1);
    }

    if (!arePasswordsMatching) {
        showError(password2, 'Passwords do not match');
    } else {
        showSuccess(password2);
    }

    // Return true if all validation checks pass, otherwise return false
    return isValidUsername && isValidLastname && isValidEmail && isValidPassword && arePasswordsMatching;
}
function sendDataToServer() {
     
    let data = {
     username:username.value,
     lastname:lastname.value,
     email:email.value,
     password1:password1.value
    }
    window.location.href = `http://localhost/loginsas/insert_data.php?data=${JSON.stringify(data)}`
    console.log(data);
}

var loggedIn = true; // Replace 'true' with your actual login status check

  // Get references to the login and logout buttons
  var loginButton = document.getElementById('loginButton');
  var logoutButton = document.getElementById('logoutButton');

  // Toggle button visibility based on the login status
  if (loggedIn) {
    loginButton.style.display = 'none';
    logoutButton.style.display = 'inline-block';
  } else {
    loginButton.style.display = 'inline-block';
    logoutButton.style.display = 'none';
  }