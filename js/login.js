const express = require('express');
const session = require('express-session');
const path = require('path');

const app = express();
const PORT = 5500;

app.use(express.urlencoded({ extended: true })); // Para recibir datos del formulario
app.use(session({
    secret: 'clave_secreta',  // Clave secreta para las sesiones
    resave: false,
    saveUninitialized: true
}));

// Servir archivos estáticos (HTML, CSS, JS)
app.use(express.static(path.join(__dirname, 'public')));

// Ruta para manejar el login
app.post('/login', (req, res) => {
    const { password } = req.body;
    if (password === 'aylih') {
        req.session.loggedIn = true;
        res.redirect('/bienvenido.html');
    } else {
        res.send('<script>alert("Clave incorrecta"); window.location.href = "/";</script>');
    }
});

// Middleware para proteger bienvenido.html
app.use('/bienvenido.html', (req, res, next) => {
    if (!req.session.loggedIn) {
        return res.redirect('/');
    }
    next();
});

app.listen(PORT, () => {
    console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
