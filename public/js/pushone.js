let user = localStorage.getItem("userSeclt")
$("#username").html("User: "+user)

var url ;

$(".postUser").click(()=>{
    console.log("clik")
    let payload = $.trim($(".msgPay").val());//$(".msgPay").val()
    let user = localStorage.getItem("userSeclt")
    console.log(payload)
    $.ajax({
        type: "POST",
        url: "http://localhost/php_notoficator/functions/sendNotifi.php",
        data:{name:user,payload:payload,icono:url},
        success: (data)=>{
            console.log(data)
        }
    })
})

$(".campana").on('click',()=>{
   let urld = $(".campana").data("url") 
   $(".campana").css({"border": "solid"});
   $(".ok").css({"border": "none"});
   $(".saldo").css({"border": "none"});
   $(".correo").css({"border": "none"});
   url = urld
   console.log(url)
})

$(".correo").on('click',()=>{
    let urld = $(".correo").data("url")
    $(".campana").css({"border": "none"});
    $(".ok").css({"border": "none"});
    $(".saldo").css({"border": "none"});
    $(".correo").css({"border": "solid"});
    url = urld
    console.log(url)
})

$(".ok").on('click',()=>{
    let urld = $(".ok").data("url")
    $(".campana").css({"border": "nano"});
    $(".ok").css({"border": "solid"});
    $(".saldo").css({"border": "none"});
    $(".correo").css({"border": "none"});
    url = urld
    console.log(url)
})

$(".saldo").on('click',()=>{
    let urld = $(".saldo").data("url")
    $(".campana").css({"border": "none"});
    $(".ok").css({"border": "none"});
    $(".saldo").css({"border": "solid"});
    $(".correo").css({"border": "none"});
    url = urld
    console.log(url)
})
/*class="campana" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/campana.png" src="../jpg/iconSmg/campana.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li" ><img class="imgIcon" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/campana.png" src="../jpg/iconSmg/correo.png" height="50px" alt="campana"/></span></li>
                                            <li ><span class="fa-li" ><img class="imgIcon" data-url="http://localhost/php_notoficator/public/jpg/iconSmg/campana.png" src="../jpg/iconSmg/ok.png" height="50px" alt="campana"/></span></li>
                                            <li><span class="fa-li" ></span><img class="imgIcon */