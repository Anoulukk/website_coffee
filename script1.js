const form = document.getElementById('form');

form.addEventListener('submit', function (e) {
    const isValid = validateFormInputs();
    if (!isValid) {
        e.preventDefault(); // Prevent form submission if validation fails
    }else{
        sendDataToServer();
    }
});