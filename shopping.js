let cartItemsCount = 0;

// Function to add a product to the cart
function addToCart(productName) {
  cartItemsCount++;
  updateCart();
  
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/cart/add", true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send(JSON.stringify({ product: productName }));
}

// Function to update the cart items count and display
function updateCart() {
  const cartItemsCountElement = document.getElementById("cart-items-count");
  
  cartItemsCountElement.innerText = cartItemsCount;
  
  // Send a GET request to fetch the updated cart from the server
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "/cart", true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const cart = JSON.parse(xhr.responseText);
      cartItemsCount = cart.items.length;
      cartItemsCountElement.innerText = cartItemsCount;
    }
  };
  xhr.send();
}

// Function to initialize the page
function initializePage() {
  updateCart();
}

// Call the initializePage() function when the page loads
window.onload = initializePage;
