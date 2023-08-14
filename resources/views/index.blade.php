<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="/img/ola.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
            body {
                background-color: #99e699;
                font-family: 'Nunito', sans-serif;
            }
            .imagem{
            
            
            
            margin-top: 60px;
          margin-left: 10px;
          margin-right: 200px;
          
        }
        
        .p1{
          margin-left: 100px;
          margin-right: 100px;
        }
        .main{
          
          display:flex;
          justify-content: space-between;
        }
        
div.card {
  margin-top: 520px;
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  
}

div.card:hover {
  border: 1px solid #777;
}

div.card img {
  width: 100%;
  height: auto;
}

.main2{
  
  display:flex;
  justify-content: space-between;
}
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




<div id="carouselExampleCaptions" class="carousel slide carousel-fade" style="margin: 0 auto" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>

  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/cenario1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Cenário de <i>Castelo Animado</i></b></h5>
        <p>O cenário foi desenhado para o filme <i>Castelo Animado</i></p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/chihiro1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Cenario de <i>A Viagem de Chihiro</i></b></h5>
        <p>Cenário feito para o filme <i>A viagem de Chihiro</i>.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/howl026.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Howl e Sophie de <i>Castelo Animado</i></b></h5>
        <p>O mago Howl e a mocinha nem tão mocinha Sophie.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/ponyo020.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Várias ponyos de <i>Ponyo</i></b></h5>
        <p>Irmãs da ponyo do filme <i>Ponyo</i> e a própria Ponyo.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/majo047.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Kiki e Tombo de <i>O Serviço de Entregas de Kiki</i></b></h5>
        <p>A bruxinha Kiki e seu melhor amigo Tombo.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/chihiro015.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Patos de <i>A Viagem de Chihiro</i></b></h5>
        <p>Patos.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/totoro025.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Totoro de <i>Meu amigo Totoro</i></b></h5>
        <p>O animal não identificado Totoro.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/kazeta024.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Jiro e Nahoko de <i>Vidas ao vento</i></b></h5>
        <p>O progetista de aviões Jiro e sua amada Nahoko.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/majo018.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Kiki de <i>O Serviço de Enrtregas da Kiki</i></b></h5>
        <p>A bruxinha favorita de O serviço de Entregas da Kiki e seu gato Jiji.</p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="/img/marnie021.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Marnie e Anna de <i>As Memórias de Marnie</i></b></h5>
        <p>A Marnie e a Anna em um lago.</p>
      </div>
    </div>



  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="main">
  <img src="/img/file.jpg" style="margin-left:100px; margin-top: 50px; width:300px; height:auto;">
<div class= "texto"> 
    <h1 class="g-col-4" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-top: 50px; margin-left: 100px;"> Estúdio Ghibli</h1>
    <p class="p1" style="margin-top: 20px;">O Studio Ghibli é um estúdio de animação japonês, sediado em Koganei, Tóquio. Fundado em 1985, o estúdio já produziu 21 longas de animação, sendo o primeiro O Castelo no Céu (1986) e o mais recente As Memórias de Marnie (2014).</p>
        <p class="p1">O Studio Ghibli foi fundado em 1985 por Hayao Miyazaki, Isao Takahata, Toshio Suzuki e Yasuyoshi Tokuma, logo após o sucesso de Nausicaä do Vale do Vento, no ano anterior. O estúdio lançou seu primeiro filme, O Castelo no Céu, no ano seguinte. O logotipo da empresa é o Totoro, o personagem do filme Meu Amigo Totoro, lançado em 1988. Com exceção de seis produções, todos os filmes do estúdio foram dirigidos por Hayao Miyazaki e Isao Takahata. Toshio Suzuki, por sua vez, é o produtor da maioria deles. Em 2001, o Museu Ghibli, um museu dedicado as obras do estúdio, foi inaugurado. </p>
    <p class="p1"><b>Caso queira conhecer os filmes mais famosos da Estudio Ghibli:</b> </p>
      
            
          </div>
          </div>
   
   
    <div>
          <div style="margin-left: 100px;margin-top: 50px; width: 290px; " class="card">
  <img src="/img/dd.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Howl's Moving Castle narra a história da jovem Sophie e o ladrão de corações Howl.</p>
  </div>
</div>


<div class="card" style="width: 18rem;margin-top: 50px;">
  <img src="/img/chihiro005.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Spireted Away narra a história de Chihiro em um mundo desconhecido e novo.</p>
  </div>
</div>

<div class="card" style="width: 18rem;margin-top: 50px;">
  <img src="/img/aaaa.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Ponyo, narra a história de um ser aquático chamado ponyo explorando as terras firmes.</p>
  </div>
</div>

<div class="card" style="width: 18rem;margin-top: 50px;">
  <img src="/img/bbbbb.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">The Wind Rises narra a história de um projetista de aviões aprendendo sobre amor.</p>
  </div>
</div>
 
  
  <div class="card" style="width: 18rem; margin-top: 50px;">
  <img src="/img/vf.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Meu Amigo Totoro, narra a história de crianças e um animal desconhecido chamado Totoro.</p>
  </div>
</div>

  <div class="card" style="width: 18rem;">
  <img src="/img/hh.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Kiki's Delivery Service narra a história de uma bruxinha buscando indepêndencia.</p>
  </div>
</div>

  <div class="card" style="width: 18rem;">
  <img src="/img/mf.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">When Marnie Was There narra a história de uma menina em busca do passado de outra.</p>
  </div>
</div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/abcs.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Muitos filmes do estúdio abordam temas mais abstratos, o que torna interesante sua perspectiva.</p>
  </div>
</div>
</div>

<div  >
<div class= "texto2" style="max-width:800px"> 
    <h1 class="col-12 col-md-8" style=" font-weight: bold;font-family: Tahoma, Verdana, sans-serif; margin-left: 100px;">O Criador</h1>
    <p class="p1" style="margin-top: 20px;">Hayao Miyazaki é um animador, cineasta, roteirista, escritor e artista de mangá japonês. É co-fundador do Studio Ghibli, uma companhia de cinema e animação, tendo conquistado reconhecimento e aclamação internacional pela qualidade de seus vários longas-metragens de animação, os quais ele normalmente escreve e dirige, sendo amplamente considerado como um dos principais nomes da indústria de animação japonesa.</p>
        <p class="p1">O Studio Ghibli foi fundado em 1985 por Hayao Miyazaki, Isao Takahata, Toshio Suzuki e Yasuyoshi Tokuma, logo após o sucesso de Nausicaä do Vale do Vento, no ano anterior. O estúdio lançou seu primeiro filme, O Castelo no Céu, no ano seguinte. O logotipo da empresa é o Totoro, o personagem do filme Meu Amigo Totoro, lançado em 1988. Com exceção de seis produções, todos os filmes do estúdio foram dirigidos por Hayao Miyazaki e Isao Takahata. Toshio Suzuki, por sua vez, é o produtor da maioria deles. Em 2001, o Museu Ghibli, um museu dedicado as obras do estúdio, foi inaugurado. </p>
 
      
            
          </div>
          </div>

          <div class="row" >
<div class="col-xs-6">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 500px; height:500px; float:right; margin-right: 100px; margin-top: -350px"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/vc.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/vei.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/outrovei.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>