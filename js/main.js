let botonRegistrarse = document.getElementById('login')
let botonIngresar = document.getElementById('singin')
let botonera = document.getElementById('botonera')
let registerForm = document.getElementById('registerForm')
let loginForm = document.getElementById('loginForm')


let canSeeReg= false;
let canSeeLog=false;
function registrarDo(){
    
    
    canSeeReg = !canSeeReg
    if (canSeeReg){
        registerForm.hidden = false
        botonera.hidden=true
    }else{
        registerForm.hidden = true
        botonera.hidden= false
    }
    
    
}
function ingresarDo(){
    
    
    canSeeReg = !canSeeReg
    if (canSeeReg){
        loginForm.hidden = false
        botonera.hidden=true
    }else{
        loginForm.hidden = true
        botonera.hidden= false
    }
    
    
}
