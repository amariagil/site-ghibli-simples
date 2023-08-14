<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="/img/ola.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
            body {
                background-color: #d2edf9;
                font-family: 'Nunito', sans-serif;
            }
            .imagem{
            
            
            
                margin-top: 60px;
              margin-left: 10px;
              margin-right: 200px;
              
            }
            
            .p1{
              margin-left: 300px;
            }
            .main{
              
              display:flex;
              justify-content: space-between;
            }
            table {
  width: 100%;
}
th, td {
  padding: 10px;
  text-align: center;
}
tr:hover {background-color: #d2edf9;}


        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top " style="display:flex;position: fixed;  ">
  <div class="container-fluid" >
  <a href="index">
  <a class="navbar-brand" href="index">
      <img src="/img/logo.png" alt="Bootstrap" style="width:200px; height:90px; ">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="margin-top: 30px;margin-left: 30px;">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Filmes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Pagina1">Castelo Animado</a></li>
              <li><a class="dropdown-item" href="Pagina2">A Viagem de Chihiro</a></li>
              <li><a class="dropdown-item" href="Pagina3">Ponyo</a></li>
              <li><a class="dropdown-item" href="Pagina4">Vidas ao vento</a></li>
              <li><a class="dropdown-item" href="Pagina5">Meu amigo Totoro</a></li>
              <li><a class="dropdown-item" href="Pagina6">Serviço de Entregas da Kiki</a></li>
              <li><a class="dropdown-item" href="Pagina7">As Memórias de Marnie</a></li>
            </ul>
          </li>
        </ul>

      </div>
     
</div> 

   </div>
    
 
  
</nav>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/kazeta050.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazeta043.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="/img/kazeta037.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazeta026.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazeta024.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazeta023.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazeta004.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/kazetachinu028.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="main">
<div class= "texto"> 
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 300px;">Vidas ao Vento</h1>
    <p class="p1" style="margin-top: 20px;">Vidas ao Vento é um filme biográfico que conta a vida de Jiro Horikoshi, um engenheiro de aviões, responsável pelo modelo usado pelos aviadores japoneses durante a Segunda Guerra Mundial. </p>
        <p class="p1">Jiro Horikoshi é um jovem que vive em uma cidade no interior do Japão. Ele tem o sonho de voar em um avião com formato de pássaro. A partir desse sonho, Jiro decide que construir um avião como deseja e colocá-lo no ar é a meta de sua vida.  </p>
    <p class="p1">Durante a busca pela realização deste objetivo, ele conhece Naoko, uma jovem encantadora por quem se apaixona. No entanto, Naoko fica profundamente doente, sem saber se sobreviverá, e os planos de Jiro podem estar prestes a mudar. Esta é uma animação muito especial. É o último produzido por Hayao Miyazaki antes de ele se aposentar e fala daquela que é a sua maior paixão: aviação. Mas, podemos sentir muito da própria história de Miyazaki nesta linda história de amor entre um homem que desenha aviões e sua companheira que é capaz de enfrentar com coragem uma terrível doença apenas para estar ao lado de seu grande amor.
</p>
      
            <div style="background-color: white; margin-left: 300px;">
            <h1 style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; text-align: center; color:#d2edf9; "> Dados técnicos</h1>
            <table>
  <tr>
    <th>Studio Ghibli, Inc.</th>
    <td>Vidas ao Vento</td>
  </tr>
  <tr>
    <th>Diretores</th>
    <td>Hayao Miyazaki</td>
  </tr>
  <tr>
    <th>Produtores</th>
    <td>Toshio Suzuki</td>
  </tr>
  <tr>
    <th>Roteiro</th>
    <td>Hayao Miyazaki</td>
  </tr>
  <tr>
    <th>Baseado em</th>
    <td>OKaze Tachinu, de Tatsuo Hori</td>
  </tr>
  <tr>
    <th>Lançamento</th>
    <td>2014</td>
  </tr>
  <tr>
    <th>País</th>
    <td>Japão</td>
  </tr>
</table>
          </div>
  </div>
    <div class="imagem">
    <img style="  width: 400px; height: 740px;" src="/img/ds.jpg">

          </div>
          
          </div>
   


    
          <div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/aosa.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Jiro Horikoshi</h5>
        <p class="card-text">O protagonista, baseado no próprio diretor do longa.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/aaaaa.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nahoko Satomi</h5>
        <p class="card-text">O interesse romântico do protagonista, que desperta o amor no próprio.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-480px;">
  <img src="/img/ggf.jpg" style="width:380px; height:auto;">
</div>










</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>