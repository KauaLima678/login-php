const passwordInput = document.getElementById('senha')
const iconEye = document.getElementById("eye")

iconEye.addEventListener('click', function () {

    if(passwordInput.type === 'password'){
        passwordInput.type = 'text'
        iconEye.classList.remove('fa-eye-slash')
        iconEye.classList.add('fa-eye')
        
    } else {
        passwordInput.type = "password"
          iconEye.classList.add('fa-eye-slash')
        iconEye.classList.remove('fa-eye')
    }
})
