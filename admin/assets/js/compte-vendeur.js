// === Script: Boosted Products AJAX + Pagination + Dropdowns ===

// Elements
const productCards4 = document.getElementById("productCards4");
const paginationContainer4 = document.getElementById("pagination4");

let currentPage4 = 1;
const cardsPerPage4 = 4;
let currentDeleteId4 = null;

// === Load all boosted products from server via AJAX ===
function loadCards4() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/compte-vendeur.php", true);
  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      productCards4.innerHTML = xhr.response;

      // After replacing cards, re-run pagination + dropdowns
      renderCards4();
    }
  };
  xhr.send();
}

// 🔥 First load
loadCards4();

// === Pagination ===
function renderCards4() {
  const allCards = Array.from(productCards4.querySelectorAll(".video-card4"));
  const totalPages = Math.ceil(allCards.length / cardsPerPage4);

  // Show/hide cards based on current page
  allCards.forEach((card, index) => {
    card.style.display =
      index >= (currentPage4 - 1) * cardsPerPage4 &&
      index < currentPage4 * cardsPerPage4
        ? "flex"
        : "none";
  });

  renderPagination4(totalPages);
  attachDropdowns4();
}

function renderPagination4(totalPages) {
  paginationContainer4.innerHTML = "";

  const prevBtn = document.createElement("button");
  prevBtn.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
  prevBtn.disabled = currentPage4 === 1;
  prevBtn.addEventListener("click", () => {
    if (currentPage4 > 1) {
      currentPage4--;
      renderCards4();
    }
  });
  paginationContainer4.appendChild(prevBtn);

  if (currentPage4 > 2) {
    createPageButton4(1);
    if (currentPage4 > 3) createDots4();
  }

  for (let i = currentPage4 - 1; i <= currentPage4 + 1; i++) {
    if (i > 0 && i <= totalPages) createPageButton4(i);
  }

  if (currentPage4 < totalPages - 1) {
    if (currentPage4 < totalPages - 2) createDots4();
    createPageButton4(totalPages);
  }

  const nextBtn = document.createElement("button");
  nextBtn.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
  nextBtn.disabled = currentPage4 === totalPages;
  nextBtn.addEventListener("click", () => {
    if (currentPage4 < totalPages) {
      currentPage4++;
      renderCards4();
    }
  });
  paginationContainer4.appendChild(nextBtn);
}

function createPageButton4(page) {
  const btn = document.createElement("button");
  btn.textContent = page;
  if (page === currentPage4) btn.classList.add("active");
  btn.addEventListener("click", () => {
    currentPage4 = page;
    renderCards4();
  });
  paginationContainer4.appendChild(btn);
}

function createDots4() {
  const dots = document.createElement("span");
  dots.innerHTML = '<i class="ri-more-fill"></i>';
  paginationContainer4.appendChild(dots);
}

// === Dropdown menu logic ===
function attachDropdowns4() {
  const menu_buttons = productCards4.querySelectorAll(".menu4 button");

  menu_buttons.forEach((button) => {
    button.onclick = (e) => {
      e.stopPropagation();
      const actionMenu = button.nextElementSibling;

      // Close all other menus
      productCards4
        .querySelectorAll(".menu4 .action-menu4")
        .forEach((menu) => menu.classList.remove("show"));

      actionMenu.classList.toggle("show");

      // Booster
      const boosterBtn = actionMenu.querySelector("a:first-child");
      if (boosterBtn) {
        boosterBtn.onclick = () => {
          const id = button.closest(".video-card4").dataset.id;
          console.log("Booster produit:", id);
        };
      }

      // Performance
      const perfBtn = actionMenu.querySelector("a:nth-child(2)");
      if (perfBtn) {
        perfBtn.onclick = () => {
          const id = button.closest(".video-card4").dataset.id;
          console.log("Voir performance du produit:", id);
        };
      }

      // Modifier
      const modifierBtn = actionMenu.querySelector("a:nth-child(3)");
      if (modifierBtn) {
        modifierBtn.onclick = () => {
          const id = button.closest(".video-card4").dataset.id;
          console.log("Modifier produit:", id);
        };
      }

      // Supprimer
      const deleteBtn = actionMenu.querySelector("span:last-child");
      if (deleteBtn) {
        deleteBtn.onclick = () => {
          currentDeleteId4 = button.closest(".video-card4").dataset.id;
          if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
            window.location.href = `/delete_product.php?id=${currentDeleteId4}`;
          }
        };
      }
    };
  });

  // Close menus if click outside
  document.addEventListener("click", () => {
    productCards4
      .querySelectorAll(".menu4 .action-menu4")
      .forEach((menu) => menu.classList.remove("show"));
  });
}
