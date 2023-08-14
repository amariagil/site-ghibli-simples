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
      <img src="/img/chihiro007.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro045.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="/img/chihiro006.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro021.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro029.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro043.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro015.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/chihiro014.jpg" class="d-block w-100" alt="...">
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
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 300px;">A Viagem de Chihiro</h1>
    <p class="p1" style="margin-top: 20px;">A história gira em torno de Chihiro, uma menina que está de mudança junto de seus pais em direção a outra cidade. Os motivos não são explicados, mas Chihiro está muito desgostosa por ter deixado todas as suas lembranças e amizades para trás. 
    Como toda a criança de sua idade, ela não gosta de ter sua vida mudada de tal forma. </p>
        <p class="p1">Ao chegar na nova cidade, o pai de Chihiro tenta pegar um atalho, mas acaba se perdendo. No final do "atalho", eles descem e observam um imenso túnel que leva a um espaço aberto. Ao atravessarem esse túnel, Chihiro e seus pais chegam a uma espécie de cidade abandonada.  Enquanto Chihiro pede para seus pais se apressarem para poderem sair dali, eles devoram diversos alimentos deixados aparentemente para trás. Chateada, Chihiro segue explorando a cidade, mas percebe algo errado. </p>
    <p class="p1">Quando chega em uma ponte que leva a um imenso prédio vermelho, ela se encontra com Haku que pede que ela saia dali o quanto antes. Infelizmente o nível da água subiu e ela não consegue retornar ao túnel por onde ela veio. A menina descobre que seus pais se tornaram porcos por terem devorado alimentos que não eram para humanos e o enorme prédio vermelho é uma espécie de casa de banhos para deuses e espíritos. Graças a Haku e a Kamaji, Chihiro consegue arrumar um trabalho na casa de banhos enquanto pensa em como libertar seus pais. </p>
      
            <div style="background-color: white; margin-left: 300px;">
            <h1 style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; text-align: center; color:#d2edf9; "> Dados técnicos</h1>
            <table>
  <tr>
    <th>Studio Ghibli, Inc.</th>
    <td>A Viagem de Chihiro</td>
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
    <th>Cinematografia</th>
    <td>Atsushi Okui</td>
  </tr>
  <tr>
    <th>Lançamento</th>
    <td>2003</td>
  </tr>
  <tr>
    <th>País</th>
    <td>Japão</td>
  </tr>
</table>
          </div>
  </div>
    <div class="imagem">
    <img style="  width: 400px; height: 740px;" src="/img/gg.png">

          </div>
          
          </div>
   
   
 
    
          <div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/mkj.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Chihiro Ogino</h5>
        <p class="card-text">É um exemplo da criança moderna, mas quando ela embarca em um outro mundo tem que lutar para voltar ao seu mundo. Ela precisará de coragem para lembrar de seu nome, acima de tudo.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/fds.webp" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Haku</h5>
        <p class="card-text">É um dragão sob o disfarce de um ser humano, que ajuda Chihiro. Haku trabalha como subordinado de Yubaba, muitas vezes realizando missões para ela.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-550px;">
  <img src="/img/cringe.webp" style="width:380px; height:auto;">
</div>

<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:50px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/aoaos.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Ratinho que segue a Chihiro</h5>
        <p class="card-text">Ele segue a chihiro e é fofo, não vejo um motivo para não mostrar ele aqui.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    
  </div>
  
</div>


<div class="card mb-3" style="max-width: 540px; margin-left:200px; margin-top:60px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/aoaod.gif" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">No-Face</h5>
        <p class="card-text">É um espírito neutro que tem interesse em Chihiro. Vendo Sem-Face do lado de fora na chuva, Chihiro tem pena da criatura e deixa-o entrar na casa de banhos para que ele se abrigue da tempestade.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div style="  display:flex; justify-content: space-between; float:right; margin-right: 200px; margin-top:-550px;">
  <img src="/img/poster2.jpg" style="width:380px; height:auto;">
</div>









</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>