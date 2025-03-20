// Modal functionality
const modal = document.getElementById("contactModal");
const contactButtons = document.querySelectorAll(".btn");
const closeBtn = document.querySelector(".close");
const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
const nav = document.querySelector("nav");
const contactForm = document.getElementById("contactForm");

// Проверяем существование элементов перед добавлением обработчиков
if (contactButtons) {
    contactButtons.forEach((btn) => {
        if (btn.textContent === "Contact") {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                if (modal) modal.style.display = "block";
            });
        }
    });
}

if (closeBtn && modal) {
    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });
}

if (modal) {
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
}

if (mobileMenuBtn && nav) {
    mobileMenuBtn.addEventListener("click", () => {
        nav.classList.toggle("active");
        mobileMenuBtn.classList.toggle("active");
    });
}

if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        // Add your form submission logic here
        alert("Message sent successfully!");
        if (modal) modal.style.display = "none";
    });
}
