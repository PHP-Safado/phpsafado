let btn_login = document.querySelector(".btn-login");
let login_interface = document.querySelector("div.area-login");
let btn_leave = document.querySelector("div.btn-leave");

btn_login.addEventListener("click", ()=>{
    login_interface.style.display = "block";


    btn_leave.addEventListener("click", (e)=>{
        login_interface.style.display = "none";
        e.preventDefault();
    })
})
