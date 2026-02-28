// Mobile menu toggle functionality
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const hamburgerIcon = document.getElementById("hamburger-icon");
  const closeIcon = document.getElementById("close-icon");

  mobileMenuButton.addEventListener("click", function () {
    // Toggle mobile menu visibility
    mobileMenu.classList.toggle("hidden");

    // Toggle icons
    hamburgerIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
  });

  // Close mobile menu when clicking on a link
  const mobileLinks = mobileMenu.querySelectorAll("a");
  mobileLinks.forEach((link) => {
    link.addEventListener("click", function () {
      mobileMenu.classList.add("hidden");
      hamburgerIcon.classList.remove("hidden");
      closeIcon.classList.add("hidden");
    });
  });

  // Typewriter effect
  const texts = [
    "Financial Translation Services",
    "Servicios de Traducción Financiera",
    "Services de Traduction Financière",
  ];

  let textIndex = 0;
  let charIndex = texts[0].length; // Start with full English text
  let isDeleting = true; // Start by deleting after pause
  let typewriterSpeed = 100;

  const typewriterDesktop = document.getElementById("typewriter-desktop");
  const typewriterMobile = document.getElementById("typewriter-mobile");

  // Display initial English text immediately
  if (typewriterDesktop) typewriterDesktop.textContent = texts[0];
  if (typewriterMobile) typewriterMobile.textContent = texts[0];

  function type() {
    const currentText = texts[textIndex];

    if (isDeleting) {
      // Delete word by word
      const displayText = currentText.substring(0, charIndex);
      const lastSpaceIndex = displayText.lastIndexOf(" ");
      charIndex = lastSpaceIndex > 0 ? lastSpaceIndex : 0;
    } else {
      charIndex++;
    }

    const displayText = currentText.substring(0, charIndex);
    if (typewriterDesktop) typewriterDesktop.textContent = displayText;
    if (typewriterMobile) typewriterMobile.textContent = displayText;

    if (!isDeleting && charIndex === currentText.length) {
      // Finished typing, pause before deleting
      typewriterSpeed = 3000;
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      // Finished deleting, move to next text
      isDeleting = false;
      textIndex = (textIndex + 1) % texts.length;
      typewriterSpeed = 3000;
    } else {
      // Normal typing/deleting speed
      typewriterSpeed = isDeleting ? 100 : 100;
    }

    setTimeout(type, typewriterSpeed);
  }

  // Start the typewriter effect after 3 seconds
  setTimeout(type, 3000);
});
