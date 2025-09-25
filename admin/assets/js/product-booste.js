// === Script: Boosted Products AJAX + Pagination + Dropdowns ===

// Elements
const productCards2 = document.getElementById("productCards2");
const paginationContainer2 = document.getElementById("pagination2");

let currentPage2 = 1;
const cardsPerPage2 = 4;
let currentDeleteId2 = null;

// === Load all boosted products from server via AJAX ===
function loadCards2() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/booste.php", true);
  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      productCards2.innerHTML = xhr.response;

      // After replacing cards, re-run pagination + dropdowns
      renderCards2();
    }
  };
  xhr.send();
}

// 🔥 First load
loadCards2();

// === Pagination ===
function renderCards2() {
  const allCards = Array.from(productCards2.querySelectorAll(".video-card2"));
  const totalPages = Math.ceil(allCards.length / cardsPerPage2);

  // Show/hide cards based on current page
  allCards.forEach((card, index) => {
    card.style.display =
      index >= (currentPage2 - 1) * cardsPerPage2 &&
      index < currentPage2 * cardsPerPage2
        ? "flex"
        : "none";
  });

  renderPagination2(totalPages);
  attachDropdowns2();
}

function renderPagination2(totalPages) {
  paginationContainer2.innerHTML = "";

  const prevBtn = document.createElement("button");
  prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
  prevBtn.disabled = currentPage2 === 1;
  prevBtn.addEventListener("click", () => {
    if (currentPage2 > 1) {
      currentPage2--;
      renderCards2();
    }
  });
  paginationContainer2.appendChild(prevBtn);

  if (currentPage2 > 2) {
    createPageButton2(1);
    if (currentPage2 > 3) createDots2();
  }

  for (let i = currentPage2 - 1; i <= currentPage2 + 1; i++) {
    if (i > 0 && i <= totalPages) createPageButton2(i);
  }

  if (currentPage2 < totalPages - 1) {
    if (currentPage2 < totalPages - 2) createDots2();
    createPageButton2(totalPages);
  }

  const nextBtn = document.createElement("button");
  nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
  nextBtn.disabled = currentPage2 === totalPages;
  nextBtn.addEventListener("click", () => {
    if (currentPage2 < totalPages) {
      currentPage2++;
      renderCards2();
    }
  });
  paginationContainer2.appendChild(nextBtn);
}

function createPageButton2(page) {
  const btn = document.createElement("button");
  btn.textContent = page;
  if (page === currentPage2) btn.classList.add("active");
  btn.addEventListener("click", () => {
    currentPage2 = page;
    renderCards2();
  });
  paginationContainer2.appendChild(btn);
}

function createDots2() {
  const dots = document.createElement("span");
  dots.innerHTML = '<i class="ri-more-fill"></i>';
  paginationContainer2.appendChild(dots);
}

// === Dropdown menu logic ===
function attachDropdowns2() {
  const menu_buttons = productCards2.querySelectorAll(".menu2 button");

  menu_buttons.forEach((button) => {
    button.onclick = (e) => {
      e.stopPropagation();
      const actionMenu = button.nextElementSibling;

      // Close all other menus
      productCards2
        .querySelectorAll(".menu2 .action-menu2")
        .forEach((menu) => menu.classList.remove("show"));

      actionMenu.classList.toggle("show");

      // Booster
      const boosterBtn = actionMenu.querySelector("a:first-child");
      if (boosterBtn) {
        boosterBtn.onclick = () => {
          const id = button.closest(".video-card2").dataset.id;
          console.log("Booster produit:", id);
        };
      }

      // Performance
      const perfBtn = actionMenu.querySelector("a:nth-child(2)");
      if (perfBtn) {
        perfBtn.onclick = () => {
          const id = button.closest(".video-card2").dataset.id;
          console.log("Voir performance du produit:", id);
        };
      }

      // Modifier
      const modifierBtn = actionMenu.querySelector("a:nth-child(3)");
      if (modifierBtn) {
        modifierBtn.onclick = () => {
          const id = button.closest(".video-card2").dataset.id;
          console.log("Modifier produit:", id);
        };
      }

      // Supprimer
      const deleteBtn = actionMenu.querySelector("span:last-child");
      if (deleteBtn) {
        deleteBtn.onclick = () => {
          currentDeleteId2 = button.closest(".video-card2").dataset.id;
          if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
            window.location.href = `/delete_product.php?id=${currentDeleteId2}`;
          }
        };
      }
    };
  });

  // Close menus if click outside
  document.addEventListener("click", () => {
    productCards2
      .querySelectorAll(".menu2 .action-menu2")
      .forEach((menu) => menu.classList.remove("show"));
  });
}
