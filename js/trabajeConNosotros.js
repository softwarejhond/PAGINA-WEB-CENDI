/**
*REGISTRO DE FUNCIONARIO
-----------------------
*Ingeniero Desarrollador
*Autor: Jhon Darwin Acevedo
*Nombre de aplicación: Registro de trabaje con nosotros
*/
 // Your web app's Firebase configuration
   // Your web app's Firebase configuration
   firebase.initializeApp({
    apiKey: "AIzaSyAvb4jD2WIKi_aIbtEqF-kKwmzQKYT74Ug",
    authDomain: "cendi-system.firebaseapp.com",
    databaseURL: "https://cendi-system.firebaseio.com",
    projectId: "cendi-system",
    storageBucket: "cendi-system.appspot.com",
    messagingSenderId: "12924926840",
    appId: "1:12924926840:web:4119c129befd358878668d",
    measurementId: "G-WQFPMJL2L4"
    });
  // Initialize Firebase
  var db = firebase.firestore();
 // Obtener Elementos
 var uploader = document.getElementById('uploader');
 var fileButton = document.getElementById('file');
 // Vigilar selección archivo
 fileButton.addEventListener('change', function(e) {
   //Obtener archivo
   var file = e.target.files[0];
   // Crear un storage ref
   var storageRef = firebase.storage().ref('Hojas_De_Vida/' + file.name);
   // Subir archivo
   var task = storageRef.put(file);
   // actualizar barra progreso
   task.on('state_changed',

     function progress(snapshot) {
       var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
       uploader.value = percentage;
     },
     function error(err) {
     },
    
     function complete() {
     } 
     )
 });
    //FUNCION PARA PASAR LOS DATOS A MAYUSCULAS 
    function aMayusculas(obj,id){
        obj = obj.toUpperCase();
        document.getElementById(id).value = obj;
    }   
    //****INICIA FUNCION PARA GUARDAR ESTUDIANTES****
    function GuardarAspirante(){
       var nombre=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var direccion = document.getElementById('adress').value;
        var telefono = document.getElementById('phone').value;
        var celular=document.getElementById('cellphone').value;
        var ciudad= document.getElementById('city').value; 
        var cargo= document.getElementById('employ').value; 
  
    //CONDICIÓN PARA VALIDAR QUE LOS CAMPOS NO ESTEN VACIOS EN CASO DE ESTARLO
        //DEVUELVE UN MENSAJE DE ERROR
    if ((nombre == "") ||(email == "") || (direccion == "") || (telefono == "") || (celular == "") || (ciudad == "") || (cargo == "")) {  //COMPRUEBA CAMPOS VACIOS
        alert("Ningún de los campos pueden quedar vacios");
    }else{
    db.collection("TrabajeConNosotros").add({
        
        NOMBRE:nombre,
        EMAIL:email,
        DIRECCION:direccion,
        TELEFONO:telefono,
        CELULAR:celular,
        CIUDAD:ciudad,
        CARGO:cargo,
        DOCUMENTO:storageRef
    })
    .then(function(docRef) {
       console.log("Document written with ID: ", docRef.id); 
       alert("DATOS REGISTRADOS CORRECTAMENTE");
    cancelar(); 
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
         alert("ERROR AL GUARDAR INTENTA NUEVAMENTE");
    });
    }
    }
    
    function cancelar(){
        
    }
  