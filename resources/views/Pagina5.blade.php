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
      <img src="/img/totoro0255.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro019.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="/img/totoro024.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro025.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro036.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro041.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro044.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/totoro030.jpg" class="d-block w-100" alt="...">
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
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 300px;">Meu Amigo Totoro</h1>
    <p class="p1" style="margin-top: 20px;">As irmãs Mei e Satsuki se mudam para uma casa no interior do Japão. O pai delas precisou fazer isto porque a mãe das meninas foi internada em um hospital próximo a este lugar com uma doença da qual o autor não diz o que é. Mas, parece ser algo grave porque a mãe precisa ficar internada por algum tempo. O pai das meninas é um professor universitário e as duas passam boa parte do dia sozinhas. Satsuki vai a escola enquanto Mei precisa ficar com uma gentil senhora que cuida dela.  </p>
        <p class="p1">Ao explorarem o quintal de sua nova casa, Mei descobre um caminho secreto através de um arbusto que a leve até uma árvore enorme onde vive uma criatura gigante. Esta criatura é um troll, uma espécie de guardião da floresta. Mas, Mei não consegue falar o nome dele direito e, ao invés de falar To-ro-ru (a pronúncia de troll em japonês), ela fala To-to-ru. A trama acelera quando elas recebem uma ligação do hospital dizendo que a mãe havia piorado. Elas ficam muito tristes, mas desejam ver a mãe a qualquer custo.  </p>
    <p class="p1">m resumo, uma história simples, em certos momentos com tom de fábula, que nem por isso deixa de ter profundidade, daqueles filmes que são fáceis de se entender porque são clássicos. Recomendado para qualquer um que goste de cinema bem feito.</p>
      
            <div style="background-color: white; margin-left: 300px;">
            <h1 style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; text-align: center; color:#d2edf9; "> Dados técnicos</h1>
            <table>
  <tr>
    <th>Studio Ghibli, Inc.</th>
    <td>Meu Amigo Totoro</td>
  </tr>
  <tr>
    <th>Diretores</th>
    <td>Hayao Miyazaki</td>
  </tr>
  <tr>
    <th>Produtores</th>
    <td>Toru Hara</td>
  </tr>
  <tr>
    <th>Roteiro</th>
    <td>Hayao Miyazaki</td>
  </tr>
  <tr>
    <th>Ano de Lançamento</th>
    <td>1988</td>
  </tr>
  <tr>
    <th>Duração</th>
    <td>87 min</td>
  </tr>
  <tr>
    <th>País</th>
    <td>Japão</td>
  </tr>
</table>
          </div>
  </div>
    <div class="imagem">
    <img style="  width: 400px; height: 740px;" src="/img/hb.jpg">

          </div>
          
          </div>
   
   
 

    
          <div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/totoro.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Totoro</h5>
        <p class="card-text">Um ser sobrenatural que possui a forma de um gato ou urso, e ajuda crianças.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/cat_bus.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">CatBus</h5>
        <p class="card-text">É um ônibus em forma de gato, outro ser sobrenatural amigavel.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-420px;">
  <img src="/img/bg.jpg" style="width:380px; height:auto;">
</div>









</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>