const getAlluser = new Promise((resolve)=>{
    $.ajax({
        url:"http://localhost/php_notoficator/functions/sqlFunc/getAllUser.php",
        type: 'get',
        dataType: 'json',
        success: function(respuesta){
            console.log(respuesta);
            resolve(respuesta)
        },
        error: function(error){
            console.log(error)
            resolve(error)
        }
    })
})

export default getAlluser;


