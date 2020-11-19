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

//iconos

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