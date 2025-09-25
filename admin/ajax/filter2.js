document.addEventListener("DOMContentLoaded", () => {
  const productCards = document.getElementById("productCards2");
  const sellerName = document.getElementById("sellerName2");
  const productName = document.getElementById("productName2");

  // Reusable function to fetch filtered data
  function fetchProducts2() {
    const seller = sellerName.value.trim();
    const product = productName.value.trim();

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "php/filter-booste.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = () => {
      if (xhr.readyState === xhr.DONE && xhr.status === 200) {
        productCards.innerHTML = xhr.response;

        // after replacing content, re-run pagination + dropdowns
        renderCards2();
      }
    };

    // Send both values (even if one is empty)
    xhr.send(
      `sellerName2=${encodeURIComponent(
        seller
      )}&productName2=${encodeURIComponent(product)}`
    );
  }

  // Trigger fetch on input changes
  sellerName.addEventListener("input", fetchProducts2);
  productName.addEventListener("input", fetchProducts2);
});
