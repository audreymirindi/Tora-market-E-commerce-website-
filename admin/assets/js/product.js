// === Script 1: Product AJAX + Pagination + Dropdowns ===

// Elements
const productCards = document.getElementById("productCards");
const paginationContainer = document.getElementById("pagination");

let currentPage = 1;
const cardsPerPage = 4;
let currentDeleteId = null;

// === Load all products from server via AJAX ===
function loadCards() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/print-product.php", true);
  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      productCards.innerHTML = xhr.response;

      // After replacing cards, re-run pagination + dropdowns
      renderCards();
    }
  };
  xhr.send();
}

// 🔥 First load
loadCards();

// ⚠️ Issue (previous code):
// There was a setInterval here like:
// setInterval(loadCards, 10000);
// This caused filtered products (from script 2) to be overwritten
// every 10 seconds, making it look like products "flash back" to all.
// Removing or conditionalizing it fixes the issue.

// === Pagination ===
function renderCards() {
  const allCards = Array.from(productCards.querySelectorAll(".video-card"));
  const totalPages = Math.ceil(allCards.length / cardsPerPage);

  // Show/hide cards based on current page
  allCards.forEach((card, index) => {
    card.style.display =
      index >= (currentPage - 1) * cardsPerPage &&
      index < currentPage * cardsPerPage
        ? "flex"
        : "none";
  });

  renderPagination(totalPages);
  attachDropdowns();
}

function renderPagination(totalPages) {
  paginationContainer.innerHTML = "";

  const prevBtn = document.createElement("button");
  prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
  prevBtn.disabled = currentPage === 1;
  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderCards();
    }
  });
  paginationContainer.appendChild(prevBtn);

  if (currentPage > 2) {
    createPageButton(1);
    if (currentPage > 3) createDots();
  }

  for (let i = currentPage - 1; i <= currentPage + 1; i++) {
    if (i > 0 && i <= totalPages) createPageButton(i);
  }

  if (currentPage < totalPages - 1) {
    if (currentPage < totalPages - 2) createDots();
    createPageButton(totalPages);
  }

  const nextBtn = document.createElement("button");
  nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
  nextBtn.disabled = currentPage === totalPages;
  nextBtn.addEventListener("click", () => {
    if (currentPage < totalPages) {
      currentPage++;
      renderCards();
    }
  });
  paginationContainer.appendChild(nextBtn);
}

function createPageButton(page) {
  const btn = document.createElement("button");
  btn.textContent = page;
  if (page === currentPage) btn.classList.add("active");
  btn.addEventListener("click", () => {
    currentPage = page;
    renderCards();
  });
  paginationContainer.appendChild(btn);
}

function createDots() {
  const dots = document.createElement("span");
  dots.innerHTML = '<i class="ri-more-fill"></i>';
  paginationContainer.appendChild(dots);
}

// === Dropdown menu logic ===
function attachDropdowns() {
  const menu_buttons = productCards.querySelectorAll(".menu button");

  menu_buttons.forEach((button) => {
    button.onclick = (e) => {
      e.stopPropagation();
      const actionMenu = button.nextElementSibling;

      // Close all other menus
      productCards
        .querySelectorAll(".menu .action-menu")
        .forEach((menu) => menu.classList.remove("show"));

      actionMenu.classList.toggle("show");

      // Voir
      const voirBtn = actionMenu.querySelector("span:first-child");
      if (voirBtn) {
        voirBtn.onclick = () => {
          const id = button.closest(".video-card").dataset.id;
          console.log("Voir produit:", id);
        };
      }

      // Modifier
      const modifierBtn = actionMenu.querySelector("a:nth-child(2)");
      if (modifierBtn) {
        modifierBtn.onclick = () => {
          const id = button.closest(".video-card").dataset.id;
          console.log("Modifier produit:", id);
        };
      }

      // Supprimer
      const deleteBtn = actionMenu.querySelector("span:last-child");
      if (deleteBtn) {
        deleteBtn.onclick = () => {
          currentDeleteId = button.closest(".video-card").dataset.id;
          if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
            window.location.href = `/delete_product.php?id=${currentDeleteId}`;
          }
        };
      }
    };
  });

  // Close menus if click outside
  document.addEventListener("click", () => {
    productCards
      .querySelectorAll(".menu .action-menu")
      .forEach((menu) => menu.classList.remove("show"));
  });
}
