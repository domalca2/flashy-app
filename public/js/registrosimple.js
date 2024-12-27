
// obtener el formulario
const form = document.querySelector('form');
const terminos = document.getElementById('terminos');
const submit = document.getElementById('submit');
const ojo1 = document.getElementById("ojo1");
const ojo2 = document.getElementById("ojo2");

// Agregar un evento de escucha para el evento de blur del campo nombre, para validar el campo 
const nombre = document.querySelector('#usuario');
nombre.addEventListener('keyup', function(event) {
  const nombre = event.target.value;

  if (nombre.length < 3 || nombre.length > 12) {
    //insertar texto html en errorusuario
    document.getElementById("errorusuario").innerHTML = "El nombre debe contener entre 3 y 12 caracteres";
    // cambiar el color del borde del campo texto a rojo
    document.getElementById("usuario").style.borderColor = "red";
  
    
    return;
  }
  else{
    document.getElementById("errorusuario").innerHTML = "";
    document.getElementById("usuario").style.borderColor = "green";
  }
}
);

const password = document.querySelector('#password');
password.addEventListener('keyup', function(event) {
  const password = event.target.value;
//La contraseña debe contener entre al menos 6 caracteres y 1 caracter especial, comporbarlo con una expresion regular '/^(?=.*\W).{6,}$/'
  const regex = /^(?=.*\W).{6,}$/;
  if (!regex.test(password)) {
    //insertar texto html en errorusuario
    document.getElementById("errorpassword").innerHTML = "La contraseña debe contener entre al menos 6 caracteres con al menos 1 de ellos especial";
    // cambiar el color del borde del campo texto a rojo
    document.getElementById("password").style.borderColor = "red";
  
    
    return;
  }
  else{
    document.getElementById("errorpassword").innerHTML = "";
    document.getElementById("password").style.borderColor = "green";
  }
}
);

// Agregar un evento de escucha para el evento de blur del campo password2, para validar que las contraseñas coinciden
const password2 = document.querySelector('#password2');
password2.addEventListener('blur', function(event) {
  const password1 = document.querySelector('#password').value;
  const password2 = event.target.value;
  if (password1 !== password2) {
    //insertar texto html en errorusuario
    document.getElementById("errorpassword2").innerHTML = "Las contraseñas no coinciden";
    // cambiar el color del borde del campo texto a rojo
    document.getElementById("password2").style.borderColor = "red";
    return;
  }
  else{
    document.getElementById("errorpassword2").innerHTML = "";
    document.getElementById("password2").style.borderColor = "green";
  }
}
);

// Agregar un evento que al hacer submit del formulario compruebe que las contraseñas son correctas y si no son correctas no envia el formulario
form.addEventListener('submit', function(event) {
  const password1 = document.querySelector('#password').value;
  const password2 = document.querySelector('#password2').value;
  if (password1 !== password2) {
    event.preventDefault();
    return;
  }
}
);


//evento que al cargar la pagina completa elimina el valor del campo password2, ya que cuando se recarga la pagina el campo password2 se completa solo
window.addEventListener('load', function(event) {
  document.querySelector('#password2').value = "";
}
);

const cambioboton = function() {
  if (terminos.checked) {
    submit.removeAttribute('disabled');
  } else {
    submit.setAttribute('disabled', true);
  }
}


//Mostar contraseña ojo1
ojo1.addEventListener('click', function(event) {
  const password = document.querySelector('#password');
  if (password.type === "password") {
    password.type = "text";
    //cambiar el icono
    document.getElementById("ojo1").className = "bx bx-show";
    
  } else {
    password.type = "password";
    //cambiar el icono
    document.getElementById("ojo1").className = "bx bx-hide";
    
  }
});

//Mostar contraseña ojo2
ojo2.addEventListener('click', function(event) {
  const password = document.querySelector('#password2');
  if (password.type === "password") {
    password.type = "text";
    //cambiar el icono
    document.getElementById("ojo2").className = "bx bx-show";
    
  } else {
    password.type = "password";
    //cambiar el icono
    document.getElementById("ojo2").className = "bx bx-hide";
    
  }
});



