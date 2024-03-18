import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  const toggleOffcanvas = document.querySelector('.toggle-offcanvas');
  const offcanvas = document.getElementById('offcanvas');
  const html = document.querySelector('html');

  toggleOffcanvas.addEventListener('click', function (e) {
    html.style.overflow = 'hidden';
    const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');

    offcanvasBackdrop.addEventListener('click', function (e) {
      html.style.overflow = 'auto';
    });
  });

  offcanvas.addEventListener('click', function (e) {
    if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON') {
      html.style.overflow = 'auto';
    }
  });

  function handleResize() {
    if (window.innerWidth > 768) {
      html.style.overflow = 'auto';
    }
  }

  window.addEventListener('resize', handleResize);

  handleResize();
});