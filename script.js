const form = document.getElementById('form');
const username = document.getElementById('username');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('re-password');

const totalprice = document.getElementById('total');
const QtyPro = document.getElementById('quantity');
const pro_name = document.getElementById('proname');
const pro_id = document.getElementById('pro_id');
var cartItemsData = {};
var productNamesArray = [];
var productIdArray = [];
var quantityArray = [];
var priceArray = []; 
var maxProductsInCart = 7;
// function for check input register form
form.addEventListener('submit', function (e) {
    const isValid = validateFormInputs();
    if (!isValid) {
        e.preventDefault(); // Prevent form submission if validation fails
    }else{
        sendDataToServer();
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
    window.location.href = `http://localhost/website_coffee/register_check.php?data=${JSON.stringify(data)}`
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


// function of cart page
  function addToCart(productName, price, proID) {
      // Check if the product is already in the cart
      if (Object.keys(cartItemsData).length >= maxProductsInCart) {
        alert("You can only add a maximum of " + maxProductsInCart + " products to the cart.");
        return;
    }
      if (cartItemsData[productName]) {
          cartItemsData[productName].quantity += 1;
      } else {
          cartItemsData[productName] = {
              price: price,
              quantity: 1,
              proID: proID,
          };

          // Add the product name, proID, and quantity to the respective arrays
          productNamesArray.push(productName);
          productIdArray.push(proID);
          priceArray.push(price); 
      }
      updateCartBoxContent();
      showCartContainer();



      // Update the hidden input fields
      document.getElementById('proname').value = productNamesArray.join(", ");
      document.getElementById('pro_id').value = productIdArray.join(", ");
      document.getElementById('quantity').value = quantityArray.join(", ");
      document.getElementById('price').value = priceArray.join(", ");

  }

  function storeCartItemsInSession() {
      // Convert cartItemsData to an array to store in the session
      var cartItemsArray = Object.entries(cartItemsData);
      // Store the cart items in the session
      sessionStorage.setItem('cartItems', JSON.stringify(cartItemsArray));

  }
  // Function to update the cart box conten
  function updateCartBoxContent() {
      var cartItems = document.getElementById('cartItems');
      cartItems.innerHTML = '';

      var total = 0;
      var totalQuantity = 0;
      var tableContent = '<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th></th></tr>';

      for (var productName in cartItemsData) {
          var row = `
              <tr>
                  <td>${productName}</td>
                  <td>${cartItemsData[productName].price} ກີບ</td>
                  <td>${cartItemsData[productName].quantity}</td>
                  <td>
                      <button onclick="decreaseQuantity('${productName}')">-</button>
                      <button onclick="removeFromCart('${productName}')">Remove</button>
                  </td>
              </tr>`;
          tableContent += row;
          total += cartItemsData[productName].price * cartItemsData[productName].quantity;
          quantity += cartItemsData[productName].quantity;
      }

      cartItems.innerHTML = tableContent;

      // Display the total price
      var totalPriceElement = document.getElementById('totalPrice');
      totalPriceElement.innerHTML = `Total Price: ${formatPrice(total)} ກີບ`;
      document.getElementById('total').value = total;
      document.getElementById('quantity').value = quantityArray.join(", ");


      updateQuantityArray();
  }

  // Function to format the price with commas for thousands separators
  function formatPrice(price) {
      return price.toLocaleString('en-US');
  }

  // Function to decrease the quantity of a product in the cart
  function decreaseQuantity(productName) {
      if (cartItemsData[productName].quantity > 1) {
          cartItemsData[productName].quantity -= 1;
      } else {
          // If the quantity becomes zero, remove the product from the cart
          delete cartItemsData[productName];

          // Remove the product name and proID from the arrays
          var index = productNamesArray.indexOf(productName);
          if (index !== -1) {
              productNamesArray.splice(index, 1);
              productIdArray.splice(index, 1);
              priceArray.splice(index, 1); 
          }
      }
      updateCartBoxContent();
      // Update the hidden input fields
      document.getElementById('proname').value = productNamesArray.join(", ");
      document.getElementById('pro_id').value = productIdArray.join(", ");

  }

  function updateQuantityArray() {
      quantityArray = [];
      for (var productName in cartItemsData) {
          quantityArray.push(cartItemsData[productName].quantity);
      }

      // Update the hidden input field
      document.getElementById('quantity').value = quantityArray.join(", ");
  }
  // Function to remove a product from the cart
  function removeFromCart(productName) {
      delete cartItemsData[productName];
      // Remove the product name and proID from the arrays
      var index = productNamesArray.indexOf(productName);
      if (index !== -1) {
          productNamesArray.splice(index, 1);
          productIdArray.splice(index, 1);
      }
      updateCartBoxContent();
      // Update the hidden input fields
      document.getElementById('proname').value = productNamesArray.join(", ");
      document.getElementById('pro_id').value = productIdArray.join(", ");
      document.getElementById('price').value = priceArray.join(", ");
  }
 // Function to show the cart container
 function showCartContainer() {
    $('#cartBoxContainer').fadeIn();
        var cartBoxContainer = document.getElementById('cartBoxContainer');
        cartBoxContainer.style.display = 'block';
    }

    // Function to hide the cart container
    function hideCartContainer() {
        $('#cartBoxContainer').fadeIn();
        var cartBoxContainer = document.getElementById('cartBoxContainer');
        cartBoxContainer.style.display = 'none';
    }

