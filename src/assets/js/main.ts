addEventListener('scroll', (event) => {
    let stickyNavbar = document.getElementById('sticky-navbar');
    if(stickyNavbar == null)
        return;
    if (window.scrollY > 0) {
        stickyNavbar.classList.add('pinned');
    } else {
        stickyNavbar.classList.remove('pinned');
    }
})