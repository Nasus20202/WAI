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

function toggleTheme() : void {
    let theme = localStorage.getItem('theme');
    if(theme == null || theme == 'light') {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
    updateTheme();
}

function updateTheme() {
    let body = document.getElementsByTagName('body')[0];
    let themeToggler = document.getElementById('theme-toggler');
    if (themeToggler == null || body == null)
        return;
    let theme = localStorage.getItem('theme');
    if(theme == null || theme == 'light') {
        body.classList.remove('dark');
        localStorage.setItem('theme', 'light');
        themeToggler.innerHTML = "&#127769;";
    } else {
        body.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        themeToggler.innerHTML = "&#9728;&#65039;";
    }
}

document.addEventListener('DOMContentLoaded', function() {
    updateTheme();
}, false);