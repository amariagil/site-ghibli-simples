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
      <img src="/img/marnie004.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie014.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="/img/marnie018.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie020.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie021.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie028.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie035.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/marnie050.jpg" class="d-block w-100" alt="...">
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
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 300px;">As Memórias de Marnie</h1>
    <p class="p1" style="margin-top: 20px;">Conhecemos a história de Anna, órfã criada por pais adotivos que sofre de asma e tem graves problemas de comunicação. Sempre quieta, com dificuldade para lidar com outras pessoas, especialmente da própria idade, ela se refugia em seus desenhos pintados em um bloco. Em especial, de uma mansão à beira-mar. Quando a garota sofre um ataque muito forte, sua mãe resolve mandá-la para o interior na casa de um querido casal para que a garota respire melhor no contato com a natureza. Bem acolhida e livre para andar pelo campo, Anna se depara justamente com a mansão dos seus sonhos. Lá vive Marnie, uma garota tão solitária quanto ela e com quem cria um forte vínculo de amizade. </p>
        <p class="p1">A dúvida que paira sobre a existência de Marnie. Seria ela um fantasma, alguém do passado ou pura imaginação de Anna para fugir da solidão? Enquanto nada é revelado, o público é apresentado a cenários deslumbrantes e que, apesar de serem "do mundo real", assim digamos, contém elementos fantásticos. </p>
    <p class="p1">Um dos pontos mais importantes da obra é como se desenvolve a relação de Anna com Marnie e, especialmente, o que a garota faz para que isto aconteça. É graças a esta amizade que a protagonista começa a se libertar da falta de traquejos sociais, se permitindo ter contato não apenas com outras pessoas, mas com a própria natureza.  </p>
      
            <div style="background-color: white; margin-left: 300px;">
            <h1 style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; text-align: center; color:#d2edf9; "> Dados técnicos</h1>
            <table>
  <tr>
    <th>Studio Ghibli, Inc.</th>
    <td>As memórias de Marnie</td>
  </tr>
  <tr>
    <th>Diretores</th>
    <td>Hiromasa Yonebayashi</td>
  </tr>
  <tr>
    <th>Produtores</th>
    <td>Yoshiaki Nishimura</td>
  </tr>
  <tr>
    <th>Roteiro</th>
    <td>Masashi Ando</td>
  </tr>
  <tr>
    <th>Baseado em</th>
    <td>When Marnie Was There, de Joan G. Robinson</td>
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
    <img style="  width: 400px; height: 740px;" src="/img/gggg.jpg">

          </div>
          
          </div>
   


    
          <div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/imagess.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Anne</h5>
        <p class="card-text">A protagonista triste que não entende o motivo de ter se mudado para uma casa antiga.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/marnies.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Marnie</h5>
        <p class="card-text">A garotinha misteriosa que precisa de ajuda para descobrir seu próprio passado.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-480px;">
  <img src="/img/livro.jpg" style="width:380px; height:auto;">
</div>








</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>