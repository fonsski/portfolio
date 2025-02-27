// Modal functionality
const modal = document.getElementById("contactModal");
const contactButtons = document.querySelectorAll(".btn");
const closeBtn = document.querySelector(".close");
const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
const nav = document.querySelector("nav");

// Open modal when contact button is clicked
contactButtons.forEach((btn) => {
  if (btn.textContent === "Contact") {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.style.display = "block";
    });
  }
});

// Close modal when X is clicked
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// Close modal when clicking outside
window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});

// Mobile menu toggle
mobileMenuBtn.addEventListener("click", () => {
  nav.classList.toggle("active");
  mobileMenuBtn.classList.toggle("active");
});

// Handle form submission
document.getElementById("contactForm").addEventListener("submit", (e) => {
  e.preventDefault();
  // Add your form submission logic here
  alert("Message sent successfully!");
  modal.style.display = "none";
});
