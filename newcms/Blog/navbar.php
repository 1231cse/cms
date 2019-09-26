
  <!--Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top orange lighten-1">
    <a class="navbar-brand" href="https://www.musen.in"><i class="fas fa-home"></i> MUSEN</a>
    <button class="navbar-toggler first-button" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false"
      aria-label="Toggle navigation">
      <div class="animated-icon1"><span></span><span></span><span></span></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto"data-toggle="tooltip" data-placement="top" title="Blog">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?page=1"><i class="fab fa-blogger-b"></i>Blog
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="top" title="About Us">
          <a class="nav-link" href="about.php"><i class="fas fa-address-card"></i>About Us</a>
        </li>
        <li class="nav-item material-tooltip-main" data-toggle="tooltip"  data-placement="top" title="News">
          <a class="nav-link" href="#"><i class="far fa-newspaper"></i></a>
        </li>
        <li class="nav-item dropdown" data-toggle="tooltip" data-placement="top" title="Blog Category">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-blog"></i>
          </a>
          <div class="dropdown-menu dropdown-content selected-dropdown dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-555">
            <?php
                global $ConnectingDB;
                $sql = "SELECT * FROM category ORDER BY id desc";
                $stmt = $ConnectingDB->query($sql);
                while ($DataRows = $stmt->fetch()) {
                  $CategoryId = $DataRows["id"];
                  $CategoryName=$DataRows["title"];
                 ?>
                <a class="dropdown-item" href="index.php?category=<?php echo $CategoryName; ?>"> <?php echo $CategoryName; ?> </a>
               <?php } ?>
          </div>
        </li>
        <li class="nav-item dropdown" data-toggle="tooltip" data-placement="top" title="Entertainment">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-video"></i>
          </a>
          <div class="dropdown-menu dropdown-content selected-dropdown dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-555">
            <a class="dropdown-item" href="#">jokes</a>
            <a class="dropdown-item" href="#">quotes</a>
            <a class="dropdown-item" href="#">Memes</a>
            <a class="dropdown-item" href="#">Funny Videos</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-auto" action="index.php">
        <input class="form-control"  type="search" name="Search" placeholder="Search" value="" aria-label="Search" />
        <button class="btn btn-outline-white btn-md my-2 my-sm-0" type="submit" name="SearchButton">Search</button>
      </form>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">1
            <i class="fas fa-envelope"></i>
          </a>
        </li>
        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img style="width: 25px;height:25px;" src="../Images/mohan.jpg" class="rounded-circle z-depth-0"
              alt="avatar image" />
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Logout</a>
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
