<!DOCTYPE html>
 <html>
  <head>
   <meta charset="UTF-8">
   <title>Almacenamiento en Firebase</title>
   <style media="screen">
      body {
        display: flex;
        min-height: 100vh;
        width: 100%;
        padding: 0;
        margin: 0;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      #uploader {
        -webkit-appearance: none;
        appearance: none;
        width: 50%;
        margin-bottom: 10px;
      }


   </style>   

  </head>

  <body>
    <progress value="0" max="100" id="uploader">0%</progress>
    <input type="file" value="upload" id="fileButton" />


    <script src="https://www.gstatic.com/firebasejs/3.6.2/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAvb4jD2WIKi_aIbtEqF-kKwmzQKYT74Ug",
    authDomain: "cendi-system.firebaseapp.com",
    databaseURL: "https://cendi-system.firebaseio.com",
    projectId: "cendi-system",
    storageBucket: "cendi-system.appspot.com",
    messagingSenderId: "12924926840",
    appId: "1:12924926840:web:4119c129befd358878668d",
    measurementId: "G-WQFPMJL2L4"
      };
      firebase.initializeApp(config);

      // Obtener Elementos
      var uploader = document.getElementById('uploader');
      var fileButton = document.getElementById('fileButton');

      // Vigilar selección archivo
      fileButton.addEventListener('change', function(e) {
        //Obtener archivo
        var file = e.target.files[0];

        // Crear un storage ref
        var storageRef = firebase.storage().ref('mis_fotos/' + file.name);


        // Subir archivo
        var task = storageRef.put(file);

        // Actualizar barra progreso
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








    </script>

  </body>
 </html>