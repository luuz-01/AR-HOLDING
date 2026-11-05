
/* Toggle de visibilidad de la contraseña */
const passwordInput = document.getElementById('password');
    const passwordToggle = document.querySelector('.password-toggle');
    const passwordToggleIcon = passwordToggle.querySelector('i');

    passwordToggle.addEventListener('click', () => {
        const isVisible = passwordInput.type === 'password';
        passwordInput.type = isVisible ? 'text' : 'password';
        passwordToggle.setAttribute('aria-pressed', String(isVisible));
        passwordToggle.setAttribute('aria-label', isVisible ? 'Ocultar contraseña' : 'Mostrar contraseña');
        passwordToggleIcon.classList.toggle('bi-eye', !isVisible);
        passwordToggleIcon.classList.toggle('bi-eye-slash', isVisible);
    });