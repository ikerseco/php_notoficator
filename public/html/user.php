<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <form class="form-horizontal" style="margin-top: 5%; text-align: center;">
                            <h2 id="username">Contact us</h2>
                            <div class="form-group text-center" style="margin-top: 6%;">
                                <h5 style="border-bottom: solid; padding-bottom:1rem;">selecciona icono</h5>
                                <div class="col-md-12">
                                    <!-- Material checked -->
                                    <div class="form-group " style="margin-top: 3%;">
                                        <ul style="display: flex; flex-direction: row; justify-content:space-evenly;">
                                            <li ><span class="fa-li" ><img class="campana" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/campana.png" src="../jpg/iconSmg/campana.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li" ><img class="correo" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/correo.png" src="../jpg/iconSmg/correo.png" height="50px" alt="campana"/></span></li>
                                            <li ><span class="fa-li" ><img class="ok" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/ok.png" src="../jpg/iconSmg/ok.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li" ></span><img class="saldo" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/saldo.png" src="../jpg/iconSmg/saldo.png" height="50px" alt="campana"/></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center" style="margin-top: 5%;">
                                <h5 style="border-bottom: solid; padding-bottom:1rem;">mensaje</h5>
                                <div class="col-md-12" style="margin-top: 3%;">
                                    <textarea class="form-control msgPay" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                </div>
                            </div>
                    </form>
                    <div class="col-md-12 text-center">
                        <button  class="btn btn-primary btn-lg  postUser">Enviar</button>
                    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery-min.js"></script>
    <script type="text/javascript" src="../js/pushone.js"></script>
</body>
</html>