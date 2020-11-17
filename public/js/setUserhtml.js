import getAlluser from './getUsers.js'
const users = getAlluser


const setUsers = async ()=>{
  console.log("html:")
  await  users.then((dat)=>{
        var html = ''
        dat.forEach(elm => {
            console.log(elm)
            html += `
            <div class="p-2">
                <div class="card car" style="width: 18rem;">
                  <img src="public/jpg/unsplash.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">User</h5>
                      <h6 class="card-subtitle mb-2 text-muted">${elm.user}</h6>
                      <ul class="list-group cardsLi">
                          <li class="list-group-item">
                              <p class="card-text"> Subscribe Time : Seco </p>
                          </li>
                      </ul>
                      <a href="#" data-name="${elm.user}" class="btn btn-primary cardsB">Go somewhere</a>
                  </div>
                </div>
            </div>
            `
        });
        console.log(html)
        $(".userListall").html(html)    
    })
    console.log("ok")
}


const visualSync = async ()=>{
    await setUsers()
    $(".cardsB").on( "click", function() {
        let user = $(this).data("name");
        localStorage.setItem('userSeclt',user)

        location.href = "http://localhost/php_notoficator/public/html/user.html";
    });  
}

visualSync()



