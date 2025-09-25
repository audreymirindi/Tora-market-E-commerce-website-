// === Tab Toggle Logic ===
const tabs = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Remove active class from all tabs and contents
    tabs.forEach((t) => t.classList.remove("active"));
    contents.forEach((c) => c.classList.remove("active"));

    // Add active class to clicked tab and corresponding content
    tab.classList.add("active");
    document.getElementById(tab.dataset.target).classList.add("active");

    // Re-render charts if analytics tab is active
    if (tab.dataset.target === "analytics") {
      updateAnalyticsCharts();
    }
  });
});

// === Analytics Charts Refresh Function ===
function updateAnalyticsCharts() {
  // Destroy and recreate charts if needed (example: clientsChart & categoryChart)
  // Here you could re-call Chart.js initialization if charts need dynamic re-render
  console.log("Analytics charts should re-render now.");
}

// Generate confetti elements dynamically
function generateConfetti() {
  const container = document.querySelector(".confetti");
  for (let i = 0; i < 20; i++) {
    const piece = document.createElement("span");
    piece.style.left = Math.random() * 100 + "vw";
    piece.style.backgroundColor = Math.random() > 0.5 ? "gold" : "white";
    piece.style.animationDuration = 2 + Math.random() * 3 + "s";
    container.appendChild(piece);
  }
}

generateConfetti();
