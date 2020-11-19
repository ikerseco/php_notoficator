<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
      <?php
        require('header.php')
      ?>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header">All User</legend>
                            <div class="form-group text-center" style="margin-top: 6%;">
                                <h5 style="border-bottom: solid; padding-bottom:1rem;">seleccionar tipo de usuario</h5>
                                <div class="col-md-12 text-center">
                                    <div class="form-check">
                                        <label>post-pago</label>
                                        <input style="margin-left: 1px; margin-right: 3%;" class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."/>
                                        <label>pre-pago</label>
                                        <input style="margin-left: 1px; margin-right: 3%;" class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."/>
                                        <label>sin-pago</label>
                                        <input style="margin-left: 1px; margin-right: 3%;" class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."/>
                                    </div>                                      
                                </div>
                            </div>    
                            <div class="form-group text-center" style="margin-top: 6%;">
                                <h5 style="border-bottom: solid; padding-bottom:1rem;">icono</h5>
                                <div class="col-md-12">
                                    <div class="form-group " style="margin-top: 3%;">
                                        <ul style="display: flex; flex-direction: row; justify-content:space-evenly;">
                                            <li ><span class="fa-li"><img class="campana" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/campana.png" src="../jpg/iconSmg/campana.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li"><img class="correo" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/correo.png" src="../jpg/iconSmg/correo.png" height="50px" alt="campana"/></span></li>
                                            <li ><span class="fa-li"><img class="ok" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/ok.png" src="../jpg/iconSmg/ok.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li"><img class="saldo" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/saldo.png" src="../jpg/iconSmg/saldo.png" height="50px" alt="campana"/></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>   
                            <div class="form-group text-center" style="margin-top: 6%;">
                                <h5 style="border-bottom: solid; padding-bottom:1rem;">texto</h5>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                </div>
                            </div>  
                            <div class="form-group" style="margin-top: 6%;">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
      </div>
      <!--js-->
      <script type="text/javascript" src=../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/jquery-min.js"></script>
</body>
</html>

