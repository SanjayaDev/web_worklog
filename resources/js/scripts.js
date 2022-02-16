window.addEventListener('DOMContentLoaded', event => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// toggle darkmode use localstorage
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');


toggleSwitch.addEventListener('change', switchTheme, false);

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); //add this
    }
}
const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}


// LOGIN / REGISTER PASSWORD TOGGLE
// Password toggle

function togglePassword() {
    let loginRegister = document.getElementById("password-login-register-page");
    if (loginRegister.type === "password") {
        loginRegister.type = "text";
        document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
    } else {
        loginRegister.type = "password";
        document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
    }
}

// =============================================== SCRIPT GET DATA PREE ORDER ========================================================