<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rambla:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top-bar"></div>
    <nav>
        <div class="titulo">
            <h1>Desayunos Maria Elena</h1>
            <h4>Tienda Desayunos</h4>
        </div>
        <img src="{{ asset('imgs/logo3.png') }}" alt="Logo" class="logo">
       <a href="{{ route('paghome') }}" class="navtabla">Inicio</a>

    </nav>

    <div class="cart-container">
        <h1>Carrito</h1>
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas del carrito se llenarán dinámicamente con JavaScript -->
            </tbody>
        </table>
        <p id="total">Total: Bs 0.00</p>
        <div class="cart-actions">
            <a href="{{ route('domicilio') }}"><button class="action-btn">Domicilio</button></a>
            <a href="{{ route('reserva') }}"><button class="action-btn">Reserva</button></a>
        </div>
    </div>

    <script src="{{ asset('js/carritoS.js') }}"></script>
    
    <footer>
        <div class="fondo2">
            <div class="texto-encima2">
                <h3>Desayunos Maria Elena</h3>
                <img src="{{ asset('imgs/logo3.png') }}" alt="">
            </div>
            <div class="imagen-adicional2">
                <img src="{{ asset('imgs/wa-removebg-preview (1).png') }}" alt="" class="imgfooter">
                <p>69431581</p>
                <img src="{{ asset('imgs/abed6cd354d56006bfb22b48c147c70b-removebg-preview.png') }}" alt="" class="imgfooter">
                <p>Av.Ayacucho</p>
                <img src="{{ asset('imgs/face-removebg-preview.png') }}" alt="" class="imgfooter">
                <p>Desayunos Maria Elena</p>
            </div>
        </div>
    </footer>
</body>
</html>

