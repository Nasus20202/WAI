addEventListener('scroll', function (event) {
    var stickyNavbar = document.getElementById('sticky-navbar');
    if (stickyNavbar == null)
        return;
    if (window.scrollY > 0) {
        stickyNavbar.classList.add('pinned');
    }
    else {
        stickyNavbar.classList.remove('pinned');
    }
});
