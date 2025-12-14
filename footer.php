  <footer>
    <div class="container">
      <p>© 2025 Danus Formatif Store | danusformatif@gmail.com | +62 82377128770</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const animatables = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => { if(entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.18 });
    animatables.forEach(el => observer.observe(el));

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function onScroll() {
      const scrollPos = window.scrollY + 120;
      sections.forEach(section => {
        if (section.offsetTop <= scrollPos && (section.offsetTop + section.offsetHeight) > scrollPos) {
          const id = section.getAttribute('id');
          navLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + id));
        }
      });
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(c => {
      const bsCarousel = bootstrap.Carousel.getOrCreateInstance(c, { interval: parseInt(c.getAttribute('data-bs-interval')) || 4000, ride: 'carousel', pause: 'hover' });
    });

    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
      modal.addEventListener('hidden.bs.modal', event => {
        const car = modal.querySelector('.carousel');
        if (car) {
          const b = bootstrap.Carousel.getInstance(car);
          if (b) {
            b.to(0); 
          }
        }
      });
    });
  </script>
</body>
</html>