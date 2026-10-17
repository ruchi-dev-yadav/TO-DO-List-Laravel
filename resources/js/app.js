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



// global toaster js
document.addEventListener('DOMContentLoaded', function () {
    const toasts = document.querySelectorAll('.toast');

    function closeToast(toast) {
        if (!toast || toast.classList.contains('toast-hiding')) {
            return;
        }

        toast.classList.add('toast-hiding');

        setTimeout(function () {
            toast.remove();
        }, 300);
    }

    toasts.forEach(function (toast) {
        const closeButton = toast.querySelector('.toast-close');

        if (closeButton) {
            closeButton.addEventListener('click', function () {
                closeToast(toast);
            });
        }

        // Automatically hide after 5 seconds
        setTimeout(function () {
            closeToast(toast);
        }, 5000);
    });
});