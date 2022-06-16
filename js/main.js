let botonRegistrarse = document.getElementById('login')
let botonIngresar = document.getElementById('singin')
let botonera = document.getElementById('botonera')

let registerForm = document.getElementById('registerForm')
let loginForm = document.getElementById('loginForm')


let ingresar = document.getElementById('ingresar')

let canSeeReg= false;
let canSeeLog=false;
let canSeeBtns=true;
function registrarDo(){
    canSeeReg=!canSeeReg
    canSeeBtns=false
    console.log(canSeeReg," registros")
    ingresar.innerHTML=""
    if(canSeeReg){
        ingresar.innerHTML +=`
    <form id="registerForm" action="" class="bg-orange col-10 col-sm-6 mx-auto py-5 my-2 rounded">
        <button class="btn btn-outline-light mb-2 border-0 d-grid" type="button" onclick="registrarDo()">
         <i class="bi bi-arrow-left"></i>
        </button>

        <label for="username" class="label-form p-2 text-white">Nombre Usuario</label>
        <input class="form-control" type="text" name="username" id="usernameRegister">

        <label for="email" class="label-form p-2 text-white">Email</label>
        <input type="email" name="email" id="emailRegister" class="form-control" placesholder="example@email.com">

        <label for="passRegister" class="label-form p-2 text-white">Contraseña</label>
        <input type="password" name="passRegister" id="passRegister" class="form-control" value="password">

        <label for="passRegister" class="label-form p-2 text-white">Confirmar Contraseña</label>
        <input type="password" name="passRegister" id="passRegister" class="form-control" value="password">

        <button type="submit" class="btn btn-outline-dark form-control mt-2 mb-3">Ingresar</button>

        

        <div class="row bg-secondary bg-opacity-50 my-1">
            <h6 class="mt-4 mb-2 col-12">O puede registrarse con:</h6>
            <div class="col-6">
                <button class="btn btn-outline-danger form-control my-3" type="button">
                <i class="bi bi-google" id="HappyGoogle" type="button"></i>
                </button>
            </div>
            <div class="col-6">
                <button class="btn btn-outline-light form-control my-3" type="button">
                <i class="bi bi-apple" id="HappyApple" type="button"></i>
                </button>
            </div>
            <div class="col-6">
                <button class="btn btn-outline-primary form-control my-3" type="button">
                <i class="bi bi-facebook" id="HappyFacebook" type="button"></i>
                </button>
            </div>
            <div class="col-6">
                <button class="btn btn-outline-info form-control my-3" type="button">
                <i class="bi bi-twitter" id="HappyTwitter" type="button"></i>
                </button>
            </div>
        </div>
        
     </form>`
    
    }else{
        canSeeBtns=true
        seeBtns()
    }
    
    
}
function ingresarDo(){
    canSeeLog=!canSeeLog
    canSeeBtns=false
    console.log(canSeeLog," ingresar")
    ingresar.innerHTML = ""
    if(canSeeLog){
        ingresar.innerHTML=`
    <form id="loginForm" action="" class="bg-orange col-10 col-sm-6 mx-auto py-5 my-2 rounded">
        <button class="btn btn-outline-light mb-2 border-0 d-grid" type="button" onclick="ingresarDo()">
          <i class="bi bi-arrow-left"></i>
        </button>
        <label for="username" class="label-form p-2 text-white">Nombre Usuario/Email</label>
        <input class="form-control" type="text" name="username" id="username">

        <label for="passIni" class="label-form p-2 text-white">Contraseña</label>
        <input type="password" name="passIni" id="passIni" class="form-control" value="password">
        <input type="checkbox" name="" id="" class="form-checkbox border-dark border-3 border p-2 ">
        <label for="" class="label-form p-2 text-white">Recordar contraseña</label>

        <button type="submit" class="btn btn-outline-dark form-control mt-2 mb-3">Ingresar</button>



        

        <div class="row bg-secondary bg-opacity-50">
          <h6 class="mt-4 mb-2 col-12">También podes ingresar con:</h6>
          <div class="col-6">
            <button class="btn btn-outline-danger form-control my-3" type="button">
              <i class="bi bi-google" id="HappyGoogle" type="button"></i>
            </button>
          </div>
          <div class="col-6">
            <button class="btn btn-outline-light form-control my-3" type="button">
              <i class="bi bi-apple" id="HappyApple" type="button"></i>
            </button>
          </div>
          <div class="col-6">
            <button class="btn btn-outline-primary form-control my-3" type="button">
              <i class="bi bi-facebook" id="HappyFacebook" type="button"></i>
            </button>
          </div>
          <div class="col-6">
            <button class="btn btn-outline-info form-control my-3" type="button">
              <i class="bi bi-twitter" id="HappyTwitter" type="button"></i>
            </button>
          </div>
        </div>
    </form>
    `
    }else{
        canSeeBtns=true
        seeBtns()
    }
    
    
    
}
function seeBtns(){
    console.log(canSeeBtns," botones")
    ingresar.innerHTML=""
    if(canSeeBtns){
        ingresar.innerHTML=`<div id="botonera" class="bg-orange col-10 col-sm-6 mx-auto py-5 my-2 rounded text-center">
        <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="ingresarDo()" id="btn-login">Ingresar</button>
        <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="registrarDo()"
        id="btn-singin">Registrarse</button>
        </div>`
    }
}