function hidePageLoader() {
    const loader = document.getElementById('page-loader');

    if (loader) {
        loader.classList.add('loader-hidden');
    }
}

function showPageLoader() {
    const loader = document.getElementById('page-loader');

    if (loader) {
        loader.classList.remove('loader-hidden');
    }
}

// Hide loader when page is fully loaded
window.addEventListener('load', hidePageLoader);

// Show loader when a form is submitted
document.addEventListener('submit', function (event) {
    const form = event.target;

    if (form.checkValidity()) {
        showPageLoader();
    }
});