<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css-->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <ul class="list-group devFelx">
                    <li style = "margin-right: 6%;">
                        <div class="card car" style="width: 18rem;">
                            <img src="public/jpg/unsplash.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">User</h5>
                                <h6 class="card-subtitle mb-2 text-muted">SECO</h6>
                                <ul class="list-group cardsLi">
                                    <li class="list-group-item">
                                        <p class="card-text"> Subscribe Time : Seco </p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary cardsB">Go somewhere</a>
                            </div>
                          </div>
                    </li>
                    <li style = "margin-right: 6%;">
                        <div class="card" style="width: 18rem;">
                            <img src="public/jpg/unsplash.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">User</h5>
                                <h6 class="card-subtitle mb-2 text-muted">SECO</h6>
                                <ul class="list-group cardsLi">
                                    <li class="list-group-item">
                                        <p class="card-text"> Subscribe Time : Seco </p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary cardsB">Go somewhere</a>
                            </div>
                          </div>
                    </li>
                    <li style = "margin-right: 6%;">
                        <div class="card" style="width: 18rem;">
                            <img src="public/jpg/unsplash.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">User</h5>
                                <h6 class="card-subtitle mb-2 text-muted">SECO</h6>
                                <ul class="list-group cardsLi">
                                    <li class="list-group-item">
                                        <p class="card-text"> Subscribe Time : Seco </p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary cardsB">Go somewhere</a>
                            </div>
                          </div>
                    </li>
                    <?php
                      require "./conect.php";
                      require "./functions/sqlFunc/getAllUser.php";
                      $allUser = alluser($conect);;
                      $max = sizeof($allUser);
                      $o = 1;
                      for ($i = 0; $i < $max; $i++) {
              
                       if($o == 3){
                          echo $allUser[$i]["user"];
                          $o = 0;          
                       }else{
                          $o++;
                       }
                      }
                    ?>
                  </ul>
            </div>
        </div>
      </div>
      <!--js-->
      <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="public/js/jquery-min.js"></script>
      <script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>