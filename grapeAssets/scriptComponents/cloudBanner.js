let text = document.getElementById('text');
window.addEventListener('scroll', function () {
    let value = window.scrollY;
    text.style.marginBottom = value * 2 + 'px';
})