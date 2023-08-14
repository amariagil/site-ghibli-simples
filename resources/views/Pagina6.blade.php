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
      <img src="/img/majo029.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo027.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="/img/majo041.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo011.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo018.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo003.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo038.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/majo028.jpg" class="d-block w-100" alt="...">
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
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 300px;">Serviço de Entregas da Kiki</h1>
    <p class="p1" style="margin-top: 20px;">Vestido preto, laço vermelho no cabelo, a vassoura da mãe, rádio do pai a tiracolo, uma mala e Jiji, seu gatinho preto. Kiki não precisa de mais do que isso para sair em sua grande jornada. A partida para o treinamento em “uma noite perfeita” era a maneira ideal de começar a nova fase da vida com o pé direito. Nada poderia dar errado, certo? </p>
        <p class="p1">No universo de Kiki, só se pode ter uma bruxa em cada cidade. Apesar de conviverem normalmente com humanos e eles saberem de sua existência, elas não são muito comuns neste mundo — o que, é claro, faz com que ela atraia bastante atenção. Kiki não apenas é uma bruxa, mas é também uma garota recém-chegada na cidade — uma que, diga-se de passagem, aterrissa com a vassoura no meio da multidão e leva o gato preto no ombro. Esse lado outsider é reforçado também pelo vestido preto — simples, largo e com mangas longas — e o grande laço vermelho na cabeça, que destoam completamente das roupas que os habitantes da cidade usam. Essa questão é algo que a animação usa não apenas com um elemento estético que destoa Kiki das outras pessoas, mas também como parte do sentimento dela própria de se adaptar a um local novo, no qual ela se sente fora do lugar.</p>
    <p class="p1">As dificuldades de se adaptar a uma nova cidade e, consequentemente, aos seus costumes, a um novo estilo de vida e a pessoas diferentes é algo que acompanha Kiki do início ao fim do filme. Vemos essas mudanças e novidades tanto externa como internamente, em questões práticas, como encontrar um lugar para morar, e também subjetivas, quando a personalidade e o modo que Kiki vê a vida vão se modificando. Hayao Miyazaki — produtor, diretor e roteirista da animação — apresenta isso como parte do processo de amadurecimento da personagem. O ano de treinamento não é só um período em que Kiki descobrirá sua vocação como bruxa, mas também é o período de transição entre a infância e a vida adulta. </p>
      
            <div style="background-color: white; margin-left: 300px;">
            <h1 style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; text-align: center; color:#d2edf9; "> Dados técnicos</h1>
            <table>
  <tr>
    <th>Studio Ghibli, Inc.</th>
    <td>O Serviço de Entregas de Kiki</td>
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
    <td>Majo no Takkyūbin, de Eiko Kadono</td>
  </tr>
  <tr>
    <th>Lançamento</th>
    <td>1989</td>
  </tr>
  <tr>
    <th>País</th>
    <td>Japão</td>
  </tr>
</table>
          </div>
  </div>
    <div class="imagem">
    <img style="  width: 400px; height: 740px;" src="/img/mimi.jpeg">

          </div>
          
          </div>
   
   
 

    
          <div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/original.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Kiki</h5>
        <p class="card-text">Uma bruxinha buscando sua indepêndencia, sempre com seu laço vermelho e sua vassoura.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/jiji.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Jiji</h5>
        <p class="card-text">O companheiro felino de Kiki.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-480px;">
  <img src="/img/alos.webp" style="width:380px; height:auto;">
</div>

<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/tombo.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tombo</h5>
        <p class="card-text">O mais novo melhor amigo de Kiki, e possivél primeiro amor.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/jijiNamo.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Namorada do Jiji</h5>
        <p class="card-text">Sim, o gato tem uma namorada.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-400px;">
  <img src="/img/bicho.jpg" style="width:380px; height:auto;">
</div>







</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>