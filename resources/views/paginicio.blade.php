

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Rambla:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
   
</head>

<body>


    <nav>
        <div class="titulo">
            <h1>Desayunos Maria Elena</h1>
            <h4>Tienda Desayunos</h4>
        </div>
        <img src="{{ asset('imgs/logo3.png') }}" alt="Logo" class="logo">
        <ul>
            <li><a href="#" class="navtabla">Inicio</a></li>
            <li><a href="#productos" class="navtabla">Productos</a></li>
            <li><a href="#acercade" class="navtabla">Acerca de</a></li>
            <li><a href="#contactenos" class="navtabla">Contáctenos</a></li>
        </ul>     
        <a href="{{ route('carrito') }}" class="carrito"><img src="{{ asset('imgs/carrito.png') }}" alt="" ></a>
    </nav>
    <div class="fondo">
        <div class="texto-encima">
            <h3>¡Bienvenido!</h3><br>
            <h3>Aquí puede encontrar sus productos favoritos.</h3>
        </div>
        <div class="imagen-adicional">
            <img src="{{ asset('imgs/api.png') }}" alt="Nueva Imagen">
        </div>
    </div>   
    
    <div class="productos" id="productos">
        <h1 class="pTitulo" id="pTitulo2">Productos</h1>
        <h3 class="pTitulo" id="pTitulo3">¡Pedí ahora tu Producto!</h3>
        <!-- <input type="text" class="buscador" placeholder="Buscador de productos..."> -->

        <!-- <h2 class="pTitulo4">Bebidas y Masas</h2> -->

     <div class="section">
  
        <div class="card-container">
        @foreach ($productos as $producto)
               
        <div class="card" 
                 data-id="{{$producto->id}}"
                 data-nombre="{{$producto->nombre}}"
                 data-precio="{{$producto->precio}}"
                 data-cantidad-total="{{$producto->cantidad}}">
                <img src="{{ asset('storage/images/' . $producto->image) }}" alt="Product Image" class="product-image">
                <h2 class="product-name">{{$producto->nombre}}</h2>
                <p class="product-price">Bs {{$producto->precio}}</p>
                <p class="product-quantity">Cantidad Total: <span id="total-quantity-{{$producto->id}}">{{$producto->cantidad}}</span></p>
                <p class="temporary-quantity"><span id="temp-quantity-{{$producto->id}}">0</span></p>
                <button class="increment-button" onclick="incrementQuantity('{{$producto->id}}')">
                    <i class="fas fa-cart-plus"></i> Agregar al carrito
                </button>
            </div>
        @endforeach
        </div>
        <script src="{{ asset('js/carritoS.js') }}">
         
        </script>
    </div>

    </div>

    <div class="acercade" id="acercade">
        <h1 class="AcercaTitulo">Acerca de Nosotros</h1>
    <div class="about-section">
        <div class="content">
            <h2>Nuestra Oferta</h2>
            <p>En Desayunos Maria Elena, nos dedicamos a proporcionar una experiencia culinaria auténtica que celebra la rica herencia gastronómica de Bolivia. Nuestra tienda ofrece una selección limitada pero cuidadosamente elegida de desayunos y productos de repostería.</p>
        </div>
        <div class="image">
            <img src="{{ asset('imgs/apipastel.png') }}" alt="Desayuno">
        </div>
    </div>
    </div>

   <div>
    <h1 class="AcercaTitulo" id="contactenos">Contáctenos</h1>
    <div class="contact-container">
        <div class="contact-form">
            <h2>Envíanos un mensaje</h2>
            <form>
                <input type="text" id="name" name="name" placeholder="Nombre">
                <input type="text" id="phone" name="phone" placeholder="Teléfono">
                <input type="text" id="subject" name="subject" placeholder="Asunto">
                <textarea id="message" name="message" placeholder="Mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Información</h2>
            <p>Teléfono: 69431581</p>
            <p>E-Mail: fon0033651@est.univalle.edu</p>
            <img src="{{ asset('imgs/logo3.png') }}" alt="Desayunos Maria Elena" class="infoimg">
        </div>
    </div>
   </div>

<div class="fondo2" >
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
</div>   
</body>
</html>