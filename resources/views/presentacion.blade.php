<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seccion video -->
    <script src="https://cdn.plyr.io/3.6.7/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" />
    <!-- seccion video -->
    <title>Presentacion</title>
    <link rel="stylesheet" href="{{ asset('css/presentacion.css') }}">
    <script src="{{ asset('js/presentacion.js') }}"></script>
</head>
<header>
  <div class="header fade-in">
    <div class="menu-container">
      <ul class="menu">
        <li><a href="#">Nombre de la Empresa</a></li>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
        <li><a href="{{ route('conocenos') }}">Conócenos</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>
      </ul>
    </div>
  </div>
  
</header>
<body>
<div class="container">
  <div class="text">
    <h1>Título de la empresa</h1>
    <p>Característica inventada: Nuestra empresa se destaca por ofrecer soluciones innovadoras y personalizadas para tus necesidades. Con más de una década de experiencia en el mercado, nuestro equipo de expertos trabaja arduamente para garantizar la máxima calidad en cada proyecto. ¡Confía en nosotros para llevar tu negocio al siguiente nivel!</p>
  </div>
  <div class="image">
  <img src="{{ asset('images/beee.jpg') }}" alt="Imagen" id="myImage" onmouseover="changeImage()" onmouseout="restoreImage()">
  </div>
</div>


<div class="section-header">
  <h1>Nuestros mejores videos!</h1>
</div>

<div class="grid-container-wrapper">
  <div class="grid-container">
    <div class="grid-item">
      <div class="video-item">
        <img src="{{ asset('images/beee.jpg') }}" alt="Video 1">
        <video src="{{ asset('videos/video.mp4') }}" loop></video>
      </div>
      <p>Descripción del video 1</p>
    </div>
    <div class="grid-item">
      <div class="video-item">
        <img src="{{ asset('images/beee.jpg') }}" alt="Video 2">
        <video src="{{ asset('videos/video.mp4') }}" loop></video>
      </div>
      <p>Descripción del video 2</p>
    </div>
    <div class="grid-item">
      <div class="video-item">
        <img src="{{ asset('images/beee.jpg') }}" alt="Video 3">
        <video src="{{ asset('videos/video.mp4') }}" loop></video>
      </div>
      <p>Descripción del video 3</p>
    </div>
    <div class="grid-item">
      <div class="video-item">
        <img src="{{ asset('images/beee.jpg') }}" alt="Video 4">
        <video src="{{ asset('videos/video.mp4') }}" loop></video>
      </div>
      <p>Descripción del video 4</p>
    </div>
    <!-- Agrega más elementos de grid-item según sea necesario -->
  </div>
</div>
    
</body>
</html>