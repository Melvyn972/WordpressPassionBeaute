document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dark-mode-toggle');
    const body = document.body;
    const logos = document.querySelectorAll('.logo');

    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
        toggle.checked = true;
        logos.forEach(logo => {
            logo.src = logo.src.replace('logo_passionbeaute.png', 'logo_passionbeaute_darkmode.png');
        });
    }

    updateIconsVisibility(toggle.checked);

    toggle.addEventListener('change', function () {
        if (toggle.checked) {
            body.classList.add('dark-mode');
            localStorage.setItem('dark-mode', 'enabled');
            logos.forEach(logo => {
                logo.src = logo.src.replace('logo_passionbeaute.png', 'logo_passionbeaute_darkmode.png');
            });
        } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('dark-mode', 'disabled');
            logos.forEach(logo => {
                logo.src = logo.src.replace('logo_passionbeaute_darkmode.png', 'logo_passionbeaute.png');
            });
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