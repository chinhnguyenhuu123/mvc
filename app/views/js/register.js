var hoten = document.getElementById('hoten').value
var username = document.getElementById('username').value
var email = document.getElementById('email').value
var password = document.getElementById('password').value
var repeatpassword = document.getElementById('repeatpassword').value
var diachi = document.getElementById('diachi').value
var phone = document.getElementById('phone').value

function format(){ 
    if(hoten==""||username==""||email==""||password==""||repeatpassword==""||diachi==""||phone==""){
        document.getElementById('hoten').placeholder="thieu"
    }

}

form.addEventListener("submit", format);