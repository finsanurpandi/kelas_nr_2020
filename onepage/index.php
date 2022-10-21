<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .nav-item {
            padding-right: 50px;
        }

        .carousel-item img {
            height: 100vh;
        }

        p {
            text-align: justify;
        }
    </style>
  </head>
  <body>
  
<!-- NAVBAR -->
<nav id="navbar-custom" class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fakultas Teknik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
    </div>
  </div>
</nav>

<!-- HOME -->
<section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/img-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/img-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/img-3.jpg" class="d-block w-100" alt="...">
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
</section>

<!-- ABOUT -->
<section id="about" style="padding-top:50px">
    <div class="container">
        <h1 class="text-center">About</h1>
        <div class="row" style="padding-top:50px" data-aos="zoom-in">
            <div class="col-md-6">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, aperiam nobis amet, ab voluptas necessitatibus magnam deserunt nemo et, dicta quibusdam repudiandae numquam eum commodi illo. Aliquid omnis impedit molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde in blanditiis nisi? Voluptatibus, aliquid. Ipsa soluta tenetur, deserunt praesentium illo aperiam blanditiis ipsum temporibus eaque odit enim eligendi ducimus ea.</p>
            </div>
            <div class="col-md-6">
                <img src="images/img-4.jpg" class="img-rounded" width="100%"/>
            </div>
        </div>
        <div class="row" style="padding-top:100px" data-aos="zoom-in">
            <div class="col-md-6">
                <img src="images/img-5.jpg" class="img-rounded" width="100%"/>
            </div>
            <div class="col-md-6">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, aperiam nobis amet, ab voluptas necessitatibus magnam deserunt nemo et, dicta quibusdam repudiandae numquam eum commodi illo. Aliquid omnis impedit molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde in blanditiis nisi? Voluptatibus, aliquid. Ipsa soluta tenetur, deserunt praesentium illo aperiam blanditiis ipsum temporibus eaque odit enim eligendi ducimus ea.</p>
            </div>
        </div>
        <div class="row" style="padding-top:100px" data-aos="zoom-in">
            <div class="col-md-6">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, aperiam nobis amet, ab voluptas necessitatibus magnam deserunt nemo et, dicta quibusdam repudiandae numquam eum commodi illo. Aliquid omnis impedit molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde in blanditiis nisi? Voluptatibus, aliquid. Ipsa soluta tenetur, deserunt praesentium illo aperiam blanditiis ipsum temporibus eaque odit enim eligendi ducimus ea.</p>
            </div>
            <div class="col-md-6">
                <img src="images/img-6.jpg" class="img-rounded" width="100%"/>
            </div>
        </div>
    </div>
</section>

<!-- LOCATION -->
<section id="location" style="padding-top:50px;">
    <div class="container-fluid">
        <h1 class="text-center">Location</h1>
        <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.705013672494!2d107.13840251431597!3d-6.805693368454496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e697990cef%3A0x2ddbb36bc8af404e!2sUniversitas%20Suryakancana!5e0!3m2!1sid!2sid!4v1665057268524!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" style="height:500px; background-color:blue;">
    <div class="container">
        <div class="row" style="padding-top:50px">
            <div class="col-md-6 text-white">
                <h1>Contact</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, qui accusamus modi aliquam nemo unde perferendis architecto voluptatem cumque sapiente, error quis quos ex harum commodi, ea odio aspernatur adipisci! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem magni ea provident eveniet recusandae incidunt facere totam dolore neque, sint, asperiores placeat natus reprehenderit nesciunt atque adipisci quas deserunt voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis laborum quidem qui reiciendis sit corrupti labore nulla, aperiam, quas cumque nostrum eius repellat! Magni enim nesciunt pariatur doloribus vero.</p>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</section>
<footer class="container-fluid" style="height:50px">
    <div class="row">
            <span class="text-center" style="padding:15px">Copyright@2022</span>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        let navbar = document.getElementById('navbar-custom');

        window.addEventListener('scroll', function(){
            let scroll = window.scrollY;

            if (scroll > 50) {
                navbar.classList.add('bg-primary');
                // navbar.classList.remove('navbar-dark');
            } else {
                navbar.classList.remove('bg-primary');
                // navbar.classList.add('navbar-dark');
            }
        });
    </script>
  </body>
</html>