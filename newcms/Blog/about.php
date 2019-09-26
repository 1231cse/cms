<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Page</title>
  <link rel="stylesheet" href="../Css/Styles.css">  
  <style media="screen">
  .heading{
      font-family: Bitter,Georgia,"Times New Roman",Times,serif;
      font-weight: bold;
       color: #005E90;
  }
  .heading:hover{
    color: #0090DB;
  }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <?php require_once("navbar.php"); ?>
  <br>
  <br>
    <!-- NAVBAR END -->
    <section id="team" class="pb-5">
    <div class="container">
      <h5 class="section-title h1">OUR TEAM</h5>
      <div class="row">
        <!-- Team member -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
              <div class="frontside">
                <div class="card">
                  <div class="card-body text-center">
                    <p><img class=" img-fluid"
                        src="../Images/Profile-Photo.jpg" alt="card image">
                    </p>
                    <h4 class="card-title">NIRANJAN</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
                  </div>
                </div>
              </div>
              <div class="backside">
                <div class="card">
                  <div class="card-body text-center mt-4">
                    <h4 class="card-title">Niranjan Chaurosia</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                      basic card with image on top, title, description and button.This is basic card with image on top,
                      title, description and button.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/niranjan.int">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/niranjan-chourasia/">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ./Team member -->
        <!-- Team member -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
              <div class="frontside">
                <div class="card">
                  <div class="card-body text-center">
                    <p><img class=" img-fluid"
                        src="../Images/mohan.jpg" alt="card image">
                    </p>
                    <h4 class="card-title">MANMOHAN</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
                  </div>
                </div>
              </div>
              <div class="backside">
                <div class="card">
                  <div class="card-body text-center mt-4">
                    <h4 class="card-title">Mamohan Kumar Yadav</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                      basic card with image on top, title, description and button.This is basic card with image on top,
                      title, description and button.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/1231mohan">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/manmohankumar/">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ./Team member -->
        <!-- Team member -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
              <div class="frontside">
                <div class="card">
                  <div class="card-body text-center">
                    <p><img class=" img-fluid"
                        src="../Images/mukesh.jpg" alt="card image">
                    </p>
                    <h4 class="card-title">Mukesh</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
                  </div>
                </div>
              </div>
              <div class="backside">
                <div class="card">
                  <div class="card-body text-center mt-4">
                    <h4 class="card-title">Mukesh Suman</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.This is
                      basic card with image on top, title, description and button.This is basic card with image on top,
                      title, description and button.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="https://in.linkedin.com/in/mukesh-suman">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ./Team member -->
      </div>
    </div>
  </section>
    <!-- FOOTER -->
    <?php require_once("footer.php"); ?>
    <!-- FOOTER END-->
  <script src="Js/my-script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $('#year').text(new Date().getFullYear());
</script>
</body>
</html> 
