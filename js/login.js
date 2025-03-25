const handleLogin = () => {
    const passwordInput = document.querySelector('input');
    const password = passwordInput.value;
    let errorMsg = document.querySelector('.error-message');

    if (!errorMsg) {
        errorMsg = document.createElement('div');
        errorMsg.classList.add('error-message');
        passwordInput.parentNode.insertBefore(errorMsg, passwordInput.nextSibling);
    }

    if (password === 'aylih') {
        window.location.href = 'bienvenido.html';
    } else {
        errorMsg.textContent = 'Contraseña incorrecta. Inténtalo de nuevo.';
        errorMsg.style.color = 'red';
        passwordInput.style.borderColor = 'red';
    }
};

document.querySelector('button').addEventListener('click', handleLogin);

document.querySelector('input').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') handleLogin();
});
