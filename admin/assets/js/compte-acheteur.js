// === Script: Boosted Products AJAX + Pagination + Dropdowns ===

// Elements
const productCards3 = document.getElementById("productCards3");
const paginationContainer3 = document.getElementById("pagination3");

let currentPage3 = 1;
const cardsPerPage3 = 4;
let currentDeleteId3 = null;

// === Load all boosted products from server via AJAX ===
function loadCards3() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/compte-acheteur.php", true);
  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      productCards3.innerHTML = xhr.response;

      // After replacing cards, re-run pagination + dropdowns
      renderCards3();
    }
  };
  xhr.send();
}

// 🔥 First load
loadCards3();

// === Pagination ===
function renderCards3() {
  const allCards = Array.from(productCards3.querySelectorAll(".video-card3"));
  const totalPages = Math.ceil(allCards.length / cardsPerPage3);

  // Show/hide cards based on current page
  allCards.forEach((card, index) => {
    card.style.display =
      index >= (currentPage3 - 1) * cardsPerPage3 &&
      index < currentPage3 * cardsPerPage3
        ? "flex"
        : "none";
  });

  renderPagination3(totalPages);
  attachDropdowns3();
}

function renderPagination3(totalPages) {
  paginationContainer3.innerHTML = "";

  const prevBtn = document.createElement("button");
  prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
  prevBtn.disabled = currentPage3 === 1;
  prevBtn.addEventListener("click", () => {
    if (currentPage3 > 1) {
      currentPage3--;
      renderCards3();
    }
  });
  paginationContainer3.appendChild(prevBtn);

  if (currentPage3 > 2) {
    createPageButton3(1);
    if (currentPage3 > 3) createDots3();
  }

  for (let i = currentPage3 - 1; i <= currentPage3 + 1; i++) {
    if (i > 0 && i <= totalPages) createPageButton3(i);
  }

  if (currentPage3 < totalPages - 1) {
    if (currentPage3 < totalPages - 2) createDots3();
    createPageButton3(totalPages);
  }

  const nextBtn = document.createElement("button");
  nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
  nextBtn.disabled = currentPage3 === totalPages;
  nextBtn.addEventListener("click", () => {
    if (currentPage3 < totalPages) {
      currentPage3++;
      renderCards3();
    }
  });
  paginationContainer3.appendChild(nextBtn);
}

function createPageButton3(page) {
  const btn = document.createElement("button");
  btn.textContent = page;
  if (page === currentPage3) btn.classList.add("active");
  btn.addEventListener("click", () => {
    currentPage3 = page;
    renderCards3();
  });
  paginationContainer3.appendChild(btn);
}

function createDots3() {
  const dots = document.createElement("span");
  dots.innerHTML = '<i class="ri-more-fill"></i>';
  paginationContainer3.appendChild(dots);
}

// === Dropdown menu logic ===
function attachDropdowns3() {
  const menu_buttons = productCards3.querySelectorAll(".menu3 button");

  menu_buttons.forEach((button) => {
    button.onclick = (e) => {
      e.stopPropagation();
      const actionMenu = button.nextElementSibling;

      // Close all other menus
      productCards3
        .querySelectorAll(".menu3 .action-menu3")
        .forEach((menu) => menu.classList.remove("show"));

      actionMenu.classList.toggle("show");

      // Booster
      const boosterBtn = actionMenu.querySelector("a:first-child");
      if (boosterBtn) {
        boosterBtn.onclick = () => {
          const id = button.closest(".video-card3").dataset.id;
          console.log("Booster produit:", id);
        };
      }

      // Performance
      const perfBtn = actionMenu.querySelector("a:nth-child(2)");
      if (perfBtn) {
        perfBtn.onclick = () => {
          const id = button.closest(".video-card3").dataset.id;
          console.log("Voir performance du produit:", id);
        };
      }

      // Modifier
      const modifierBtn = actionMenu.querySelector("a:nth-child(3)");
      if (modifierBtn) {
        modifierBtn.onclick = () => {
          const id = button.closest(".video-card3").dataset.id;
          console.log("Modifier produit:", id);
        };
      }

      // Supprimer
      const deleteBtn = actionMenu.querySelector("span:last-child");
      if (deleteBtn) {
        deleteBtn.onclick = () => {
          currentDeleteId3 = button.closest(".video-card3").dataset.id;
          if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
            window.location.href = `/delete_product.php?id=${currentDeleteId4}`;
          }
        };
      }
    };
  });

  // Close menus if click outside
  document.addEventListener("click", () => {
    productCards3
      .querySelectorAll(".menu3 .action-menu3")
      .forEach((menu) => menu.classList.remove("show"));
  });
}
