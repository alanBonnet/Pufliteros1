/*!
* Start Bootstrap - One Page Wonder v6.0.5 (https://startbootstrap.com/theme/one-page-wonder)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-one-page-wonder/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
let canSeeFormContact = true;
let contactoForm = document.getElementById('contacto');
function mostrarContacto(){
    canSeeFormContact = !canSeeFormContact;
    if(canSeeFormContact == false){
        contactoForm.className = 'container my-3 animate__animated animate__bounceIn';
        contactoForm.hidden = canSeeFormContact;
    }else{
        contactoForm.className = 'container my-3 animate__animated animate__bounceOut'
        setTimeout(()=>{
            contactoForm.hidden = canSeeFormContact;
        },700);
    }
    
}
