
<?php
//include "php/verifysession.php";
include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyFlix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/myStyle.css" type="text/css" rel="stylesheet" />

     <!-- Font Awesome -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body style="background-color: rgb(24, 23, 23);">

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark " >
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)"><img src="logo.png" class="rounded" alt="Cinque Terre"
          style=" width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Home</a>
          </li>

        </ul>
      </div>
    </div>





    <button type="button" class="btn btn-dark" style="font-size:36px" onclick="myFunction()"><i class="fa fa-sign-out" aria-hidden="true"></i></button>

  </nav>


      <!-- Start your project here-->
<!-- Carousel wrapper -->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
  
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner" style="height: 800px; width: 100%;">
    <!-- Single item -->
    <div class="carousel-item active" style="height: 800px; width:100%;">
      <video class="img-fluid" style="width:100%;" autoplay loop muted>
        <source src="Video/11.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Harry Potter And The Philosopher's Stone </h5>
        <p>
        Is a 2001 fantasy film directed by Chris Columbus from a screenplay by Steve Kloves, 
        based on the 1997 novel of the same name by J. K. Rowling. It is the first instalment 
        in the Harry Potter film series. The film stars Daniel Radcliffe as Harry Potter, with Rupert Grint as Ron Weasley, 
        and Emma Watson as Hermione Granger. Its story follows Harry's first year at Hogwarts School of Witchcraft and Wizardry as he discovers that he is a famous wizard and begins his formal wizarding education.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item" style="height: 800px; width:100%;">
      <video class="img-fluid "  style="width:100%;" autoplay loop muted>
        <source src="Video/12.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Frozen II</h5>
        <p>
        Is a 2019 American computer-animated musical fantasy film produced by Walt Disney Animation Studios and distributed by Walt Disney Studios Motion Pictures.
           The 58th animated film produced by the studio, it is the sequel to Frozen (2013). The film was directed by Chris Buck and Jennifer Lee,
            produced by Peter Del Vecho, and written by Lee,[a] Buck, Marc Smith, Kristen Anderson-Lopez, and Robert Lopez. It stars the voices of Kristen Bell,
             Idina Menzel, Josh Gad, and Jonathan Groff. Set three years after the first film, Frozen II follows sisters Anna and Elsa, Kristoff, his reindeer Sven, 
             and the snowman Olaf as they travel to an enchanted forest to unravel the origin of Elsa's magical power.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item" style="height: 800px; width: 100%;">
      <video class="img-fluid"  style="width:100%;"  autoplay loop muted>
        <source
          src="https://d36bjt6lrk4ok.cloudfront.net/5.mp4" type="video/mp4"
        />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Smallfoot</h5>
        <p>
        Smallfoot (stylized as SMALL FOOT) is a 2018 American computer-animated musical comedy film produced by the Warner Animation Group and distributed by Warner Bros. 
        Pictures. Based on the unpublished children's book Yeti Tracks by Sergio Pablos, the film was co-written and directed by Karey Kirkpatrick, and stars the voices of Channing Tatum, 
        James Corden, Zendaya, Common, LeBron James, Gina Rodriguez, Danny DeVito, Yara Shahidi, Ely Henry and Jimmy Tatro. The plot follows a tribe of Himalayan Yeti who come across a human being,
         with each species thinking the other was just a myth.
        </p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
    <!-- End your project here-->

  <div class=" d-flex align-items-center " style="height: 100px;">
    <h1 style="color: rgb(252, 252, 252);">Movies</h1>
  </div>
  <div class=" d-flex align-items-center " style="height: 50px;">
    <h2 style="color: rgb(139, 139, 139);">Most Trending Movies</h2>
  </div>

<div class="row">
<?php
   $mongoViewvideo = mongoViewvideos();
  // print_r($mongoViewvideo);
   foreach($mongoViewvideo as $docs){
      $_id =  $docs->_id;
      $id = $docs->id;
      $mv_name = $docs->mv_name;
      $desctription =  $docs->desctription;
      $category =  $docs->category;
      $mv_length =  $docs->mv_length;
      $director =  $docs->director;
      $year = $docs->year;
      
  ?>
<div class="col-md-3 mb-3">
                 <a href='Video/<?php echo $id."mp4";?>'>
                   <iframe id="<?php echo $id;?>"src="Video/<?php echo $id.".mp4";?>" allowfullscreen></iframe>  
                </a>
                <br>
                <button type="button" style="background-color:black;"><i class="fa fa-thumbs-up" style='font-size:15px;color:blue'></i></button>
                <button type="button" style="background-color:black;"><i class="fa fa-eye" style='font-size:15px;color:blue'></i></button>


</div>
             
<?php
}
?>

  </div>

</body>


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  
  function myFunction() {
   
   window.location="index.html";
  }
  </script>
    </html>