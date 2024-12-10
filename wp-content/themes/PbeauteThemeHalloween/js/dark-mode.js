document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dark-mode-toggle');
    const body = document.body;

    // Load the saved mode from localStorage
    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
        toggle.checked = true;
    }

    // Update icons visibility based on the initial state
    updateIconsVisibility(toggle.checked);

    toggle.addEventListener('change', function () {
        if (toggle.checked) {
            body.classList.add('dark-mode');
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('dark-mode', 'disabled');
        }
        updateIconsVisibility(toggle.checked);
    });

    function updateIconsVisibility(isChecked) {
        const sunIcon = document.querySelector('.bi-sun');
        const moonIcon = document.querySelector('.bi-moon');
        if (isChecked) {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        } else {
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        }
    }
});