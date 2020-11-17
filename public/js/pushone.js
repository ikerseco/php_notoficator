$(".postUser").click(()=>{
    console.log("clik")
    let payload = $.trim($(".msgPay").val());//$(".msgPay").val()
    let user = localStorage.getItem("userSeclt")
    console.log(payload)
    $.ajax({
        type: "POST",
        url: "http://localhost/php_notoficator/functions/sendNotifi.php",
        data:{name:user,payload:payload},
        success: (data)=>{
            console.log(data)
        }
    })
})