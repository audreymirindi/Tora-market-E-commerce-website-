document.addEventListener("DOMContentLoaded", () => {
  const productCards = document.getElementById("productCards");
  const sellerName = document.getElementById("sellerName");
  const productName = document.getElementById("productName");

  // Reusable function to fetch filtered data
  function fetchProducts() {
    const seller = sellerName.value.trim();
    const product = productName.value.trim();

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "php/filter-products.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = () => {
      if (xhr.readyState === xhr.DONE && xhr.status === 200) {
        productCards.innerHTML = xhr.response;

        // after replacing content, re-run pagination + dropdowns
        renderCards();
      }
    };

    // Send both values (even if one is empty)
    xhr.send(
      `sellerName=${encodeURIComponent(
        seller
      )}&productName=${encodeURIComponent(product)}`
    );
  }

  // Trigger fetch on input changes
  sellerName.addEventListener("input", fetchProducts);
  productName.addEventListener("input", fetchProducts);
});
