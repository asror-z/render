const items = document.querySelectorAll(".accordion a");
items.forEach((item) => item.addEventListener('click', toggleAccordion));

function toggleAccordion() {
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
}