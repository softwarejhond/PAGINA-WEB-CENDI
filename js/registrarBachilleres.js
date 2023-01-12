/**
*REGISTRO DE FUNCIONARIO
-----------------------
*Ingeniero Desarrollador
*Autor: Jhon Darwin Acevedo
*Nombre de aplicación: Registro de bachilleres
*/
firebase.initializeApp({
apiKey: "AIzaSyArqm1cZL8KtjqLOY64JP6DHr7YNaRzJNU",
    authDomain: "observatorio-cfd74.firebaseapp.com",
    databaseURL: "https://observatorio-cfd74.firebaseio.com",
    projectId: "observatorio-cfd74",
    storageBucket: "observatorio-cfd74.appspot.com",
    messagingSenderId: "846040619895"

});


// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();
//FUNCION PARA PASAR LOS DATOS A MAYUSCULAS 
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}


function imprimir(){
db.collection("EstBachiller2019-2").get().then(function(querySnapshot) {
    var responsables = document.getElementById('responsables');
    responsables.innerHTML='';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data()}`);
        responsables.innerHTML+=`
   <td>${doc.data().RESPONSABLE}</td>
   <td>${doc.data().NUMEROID} </td> 
<td>${doc.data().NOMBRE} </td>
<td>${doc.data().APELLIDOS}</td>
<td>${doc.data().IDENTIFICACIONTIPO}</td>
<td>${doc.data().NUMEROID}</td>
<td>${doc.data().FIJO}</td>
<td>${doc.data().CELULAR}</td>
<td>${doc.data().DIRECCION}</td>
<td>${doc.data().EMAIL}</td>
<td>${doc.data().COLEGIO}</td>
<td>${doc.data().BARRIO}</td>
<td>${doc.data().GENERO}</td>
<td>${doc.data().POBLACION}</td>
<td>${doc.data().EDAD}</td>
<td>${doc.data().ESTRATO}</td>
<td>${doc.data().TIEMPO}</td>
<td>${doc.data().INTERNET}</td>
<td>${doc.data().ELECTRICIDAD}</td>
<td>${doc.data().AGUA}</td>
<td>${doc.data().TELEFONIA}</td>
<td>${doc.data().SANEAMIENTO}</td>
<td>${doc.data().TIPOSANEAMIENTO}</td>
<td>${doc.data().TELEVISION}</td>
<td>${doc.data().CELULARP}</td>
<td>${doc.data().COMPUTADORFAMILIAR}</td>
<td>${doc.data().COMPUTADORPERSONAL}</td>
<td>${doc.data().TABLETS}</td>
<td>${doc.data().VIVIENDA}</td>
<td>${doc.data().HERMANOS}</td>
<td>${doc.data().POSICION}</td>
<td>${doc.data().INGRESOS}</td>
<td>${doc.data().EMPLEO}</td>
<td>${doc.data().TRANSPORTE}</td>
<td>${doc.data().SITUCACIONPADRES}</td>
<td>${doc.data().PADRESENU}</td>
<td>${doc.data().HERMANOSENU}</td>
<td>${doc.data().PROVEEDORECONOMICO}</td>
<td>${doc.data().ALCOHOL}</td>
<td>${doc.data().SUSTANCIAS}</td>
<td>${doc.data().SEDENTARISMO}</td>
<td>${doc.data().ETROPICAL}</td>
<td>${doc.data().ERESPIRATORIA}</td>
<td>${doc.data().GASTRITIS}</td>
<td>${doc.data().GASTROENTERIRIS}</td>
<td>${doc.data().ANEMIA}</td>
<td>${doc.data().DIABETES}</td>
<td>${doc.data().FRACTURA}</td>
<td>${doc.data().MIGRAÑA}</td>
<td>${doc.data().TRANSTORNOSA}</td>
<td>${doc.data().TRANSTORNOSP}</td>
<td>${doc.data().INCAPACIDAD}</td>
<td>${doc.data().ICANTIDAD}</td>
<td>${doc.data().IDIAS}</td>
<td>${doc.data().INTERESAU}</td>
<td>${doc.data().NIVELEDUCACION}</td>
<td>${doc.data().CARRERA}</td>
<td>${doc.data().CARRERA2}</td>
<td>${doc.data().CARRERA3}</td>


`
    });


});
}


//****INICIA FUNCION PARA GUARDAR ESTUDIANTES****
function GuardarEstudiante(){
   var Responsable=document.getElementById('responsable').value;
    var apellidos=document.getElementById('apellidosEstudiante').value;
    var nombre = document.getElementById('nombreEstudiante').value;
    var idtipo = document.getElementById('TipoIdEstudiante').value;
    var NumIdentificacion=document.getElementById('numIdEstudiantes').value;
    var telefonofijo= document.getElementById('fijoEstudiante').value; 
    var celular= document.getElementById('celularEstudiante').value;
    var direccion= document.getElementById('direccionEstudiante').value;  
	var Email= document.getElementById('emailEstudiante').value; 
	var colegio= document.getElementById('institucionEstudiante').value;  
    var barrio= document.getElementById('barrioEstudiante').value;  
	var genero= document.getElementById('generoEstudiante').value;
    var poblacion= document.getElementById('poblacionEstudiante').value;
	var edad= document.getElementById('edadEstudiante').value;
  
	
//VARIABLES SOCIOECONOMICOS
      var estrato=document.getElementById('EstudianteEstrato').value;
	  var tiempo=document.getElementById('tiempoEnComuna').value;
	  var internet=document.getElementById('EstudianteInternet').value; 
	  var electricidad=document.getElementById('EstudianteElectricidad').value; 
	  var agua=document.getElementById('EstudianteAgua').value; 
	  var telefonia=document.getElementById('EstudianteFijo').value; 
	  var saneamiento=document.getElementById('EstudianteSaneamiento').value; 
	  var tipoSaneamiento=document.getElementById('EstudianteTipoSaneamiento').value; 
	  var televisión=document.getElementById('EstudianteTelevision').value; 
	  var celularP=document.getElementById('EstudianteCelular').value; 
	  var computadorF=document.getElementById('EstudianteComputador').value; 
	  var computador=document.getElementById('EstudianteComputadorP').value; 
	  var tabletas=document.getElementById('EstudianteTablet').value; 
	 
	  var vivienda=document.getElementById('EstudianteVivienda').value; 
	  var hermanos=document.getElementById('EstudianteHermanos').value; 
	  var Posición=document.getElementById('EstudiantePosicion').value; 
	  var Ingresos=document.getElementById('ingresosHogarEstudiante').value; 
	  var empleo=document.getElementById('EstudianteEmpleo').value; 
	
	var transporte=document.getElementById('EstudianteTransporte').value; 
    var situacionPadres=document.getElementById('situacionPadres').value;
	var padresEnU=document.getElementById('EstudiantePadresEnU').value; 
	var hermanosEnU=document.getElementById('hermanosEnU').value;
	var proveedorEconomico=document.getElementById('proveedorEconomico').value;
	var apoyo=document.getElementById('apoyoPadres').value;
	
		// VARIABLES DE SALUD
	
	var alcohol=document.getElementById('EstudianteAlcohol').value;
	var sustancias=document.getElementById('EstudianteSustancias').value;
	var sedentarismo=document.getElementById('EstudianteSedentarismo').value;
	var Etropical=document.getElementById('EstudianteEnfermedadTropical').value;
	var Erespitatoria=document.getElementById('EstudianteEnfermedadRespiratoria').value;
	var gastritis=document.getElementById('EstudianteGastritis').value;
	var gastroenteritis=document.getElementById('EstudianteGastroenteritis').value;
	var anemia=document.getElementById('EstudianteAnemia').value;
	var diabetes=document.getElementById('EstudianteDiabetes').value;
	var fractura=document.getElementById('EstudianteFracturas').value;
	var migraña=document.getElementById('EstudianteMigraña').value;
	var TrastornosA=document.getElementById('EstudianteTrastornosA').value;
	var TrastornosP=document.getElementById('EstudianteTrastornosP').value;
	var incapacidad=document.getElementById('EstudianteIncapacidad').value;
	var Icantidad=document.getElementById('EstudianteIncapacidadCantidad').value;
	var Idias=document.getElementById('EstudianteIncapacidadCantidadDias').value;
	var interesaU=document.getElementById('interesaU').value;
	var nivelEducacion=document.getElementById('nivelEducacion').value;
	var carrera=document.getElementById('carrera').value;
	var carrera2=document.getElementById('carrera1').value;
	var carrera3=document.getElementById('carrera2').value;
//CONDICIÓN PARA VALIDAR QUE LOS CAMPOS NO ESTEN VACIOS EN CASO DE ESTARLO
    //DEVUELVE UN MENSAJE DE ERROR
if ((Responsable == "") ||(apellidos == "") || (nombre == "") || (idtipo == "") || (NumIdentificacion == "") || (telefonofijo == "")||(celular=="")||(direccion=="")||(Email=="")||(colegio=="")||(barrio=="")||(genero=="")||(poblacion=="")||(edad=="")||(estrato=="")||(tiempo=="")||(internet=="")||(electricidad=="")||(agua=="")||(telefonia=="")||(saneamiento=="")||(tipoSaneamiento=="")||(televisión=="")||(celularP=="")||(computadorF=="")||(computador=="")||(tabletas=="")||(vivienda=="")||(hermanos=="")||(Posición=="")||(Ingresos=="")||(empleo=="")||(transporte=="")||(situacionPadres=="")||(padresEnU=="")||(hermanosEnU=="")||(proveedorEconomico=="")||(apoyo=="")||(alcohol=="")||(sustancias=="")||(sedentarismo=="")||(Etropical=="")||(Erespitatoria=="")||(gastritis=="")||(gastroenteritis=="")||(anemia=="")||(diabetes=="")||(fractura=="")||(migraña=="")||(TrastornosA=="")||(TrastornosP=="")||(incapacidad=="")||(Icantidad=="")||(Idias=="")||(interesaU=="")||(nivelEducacion=="")||(carrera=="")) {  //COMPRUEBA CAMPOS VACIOS
    alert("Los campos no pueden quedar vacios");
}else{
db.collection("EstBachiller2019-2").add({
    
    RESPONSABLE:Responsable,
    APELLIDOS:apellidos,
    NOMBRE:nombre,
    IDENTIFICACIONTIPO:idtipo,
    NUMEROID:NumIdentificacion,
    FIJO:telefonofijo,
    CELULAR:celular,
    DIRECCION:direccion,
    EMAIL:Email,
    COLEGIO:colegio,
    BARRIO:barrio,
	GENERO:genero,
	POBLACION:poblacion,
	EDAD:edad,
	//VARIABLES SOCIOECONOMICAS
	ESTRATO:estrato,
	TIEMPO:tiempo,
	INTERNET:internet,
	ELECTRICIDAD:electricidad,
	AGUA:agua,
	TELEFONIA:telefonia,
	SANEAMIENTO:saneamiento,
	TIPOSANEAMIENTO:tipoSaneamiento,
	TELEVISION:televisión,
	CELULARP:celularP,
	COMPUTADORFAMILIAR:computadorF,
	COMPUTADORPERSONAL:computador,
	TABLETS:tabletas,
	VIVIENDA:vivienda,
	HERMANOS:hermanos,
	POSICION:Posición,
	INGRESOS:Ingresos,
	EMPLEO:empleo,
	TRANSPORTE:transporte,
	SITUCACIONPADRES:situacionPadres,
	PADRESENU:padresEnU,
	HERMANOSENU:hermanosEnU,
	PROVEEDORECONOMICO:proveedorEconomico,
	//VARIABLES DE SALUD
	ALCOHOL:alcohol,
	SUSTANCIAS:sustancias,
	SEDENTARISMO:sedentarismo,
	ETROPICAL:Etropical,
	ERESPIRATORIA:Erespitatoria,
	GASTRITIS:gastritis,
	GASTROENTERIRIS:gastroenteritis,
	ANEMIA:anemia,
	DIABETES:diabetes,
	FRACTURA:fractura,
	MIGRAÑA:migraña,
	TRANSTORNOSA:TrastornosA,
	TRANSTORNOSP:TrastornosP,
	INCAPACIDAD:incapacidad,
	ICANTIDAD:Icantidad,//CANTIDAD DE INCAPACIDADES
	IDIAS:Idias,//DIAS INCAPACITADO
	INTERESAU:interesaU,
	NIVELEDUCACION:nivelEducacion,
    CARRERA:carrera,
	CARRERA2:carrera2,
	CARRERA3:carrera3
})
.then(function(docRef) {
   console.log("Document written with ID: ", docRef.id); 
    console.log("ok");
   alert("ESTUDIANTE REGISTRADO CORRECTAMENTE");
cancelar(); 
})
.catch(function(error) {
    console.error("Error adding document: ", error);
     alert("ERROR AL GUARDAR INTENTA NUEVAMENTE");
});
}
}

function incapacidad(){
  $("#EstudianteIncapacidad").change(function(){
  var otro = $(this).val();
      if (otro!=="SI"){
 document.getElementById("EstudianteIncapacidadCantidad").value="0"; document.getElementById("EstudianteIncapacidadCantidadDias").value="0";
 document.getElementById("cualEstudiante").disabled=true;
      }else{
          document.getElementById("EstudianteIncapacidadCantidad").value="";
          document.getElementById("EstudianteIncapacidadCantidadDias").value="";
      }
});
}

function cancelar(){
	location.reload();
}
// MOSTRAR LOS ESTUDIANTES REGISTRADOS
function mostrarEstudiantes(){
db.collection("Estudiantes2019-2").get().then(function(querySnapshot) {
    var tablaAct = document.getElementById('estudiantesRegistrados');
    estudiantesRegistrados.innerHTML='';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data()}`);
        estudiantesRegistrados.innerHTML+=`
   <tr>
   
      <td>${doc.data().PADRINO}</td>
      <td>${doc.data().APELLIDOS}</td>
      <td>${doc.data().NOMBRE}</td>
 <td><a href="#menu1"data-toggle="modal"data-target="#logoutModal3"><button onclick="ActualizarDiario(
'${doc.id}',
'${doc.data().PADRINO}',
'${doc.data().APELLIDOS}',
'${doc.data().NOMBRE}',
'${doc.data().IDENTIFICACIONTIPO}',
'${doc.data().NUMEROID}',
'${doc.data().FIJO}',
'${doc.data().CELULAR}',
'${doc.data().RH}',
'${doc.data().REGIMEN}',
'${doc.data().EPS}',
'${doc.data().CUAL}',
'${doc.data().GENERO}',
'${doc.data().NACIONALIDAD}',
'${doc.data().EDAD}',
'${doc.data().POBLACION}',
'${doc.data().BARRIO}',
'${doc.data().DIRECCION}',
'${doc.data().PROGRAMA}',
'${doc.data().INSTITUCION}',
'${doc.data().SEMESTRE}',
'${doc.data().ESTADO}',
'${doc.data().ESTRATO}',
'${doc.data().INTERNET}',
'${doc.data().ELECTRICIDAD}',
'${doc.data().AGUA}',
'${doc.data().TELEFONIA}',
'${doc.data().SANEAMIENTO}',
'${doc.data().TIPOSANEAMIENTO}',
'${doc.data().TELEVISION}',
'${doc.data().CELULARP}',
'${doc.data().COMPUTADORFAMILIAR}',
'${doc.data().COMPUTADORPERSONAL}',
'${doc.data().TABLETS}',
'${doc.data().ESCOLARIDADM}',
'${doc.data().ESCOLARIDADP}',
'${doc.data().VIVIENDA}',
'${doc.data().HERMANOS}',
'${doc.data().POSICION}',
'${doc.data().INGRESOS}',
'${doc.data().EMPLEO}',
'${doc.data().APOYOFAMILIAR}',
'${doc.data().VOCACIONAL}',
'${doc.data().TRABAJOANTES}',
'${doc.data().COLEGIO}',
'${doc.data().FECHAGRADUADO}',
'${doc.data().TIPOCOLEGIO}',
'${doc.data().PROMEDIO}',
'${doc.data().MATERIAS}',
'${doc.data().MATERIASCANCELADAS}',
'${doc.data().CREDITOS}',
'${doc.data().DIASDECLASE}',
'${doc.data().EMBARAZO}',
'${doc.data().ALCOHOL}',
'${doc.data().SUSTANCIAS}',
'${doc.data().SEDENTARISMO}',
'${doc.data().ETROPICAL}',
'${doc.data().ERESPIRATORIA}',
'${doc.data().GASTRITIS}',
'${doc.data().GASTROENTERIRIS}',
'${doc.data().ANEMIA}',
'${doc.data().DIABETES}',
'${doc.data().FRACTURA}',
'${doc.data().MIGRAÑA}',
'${doc.data().TRANSTORNOSA}',
'${doc.data().TRANSTORNOSP}',
'${doc.data().INCAPACIDAD}',
'${doc.data().ICANTIDAD}',
'${doc.data().IDIAS}')"type="button" class="btn btn-warning" " style="font-size:12px" title="Añadir contenido al Diario de Campo"><i class="fas fa-edit"></i></button></a></td>
`
    });
});
}
//********FUNCION PARA ACTUALIZAR ACTIVIDADES***************
function ActualizarDiario(id,PADRINO,APELLIDOS,NOMBRE,IDENTIFICACIONTIPO,NUMEROID,FIJO,CELULAR,RH,REGIMEN,EPS,CUAL,GENERO,NACIONALIDAD,EDAD,POBLACION,BARRIO,DIRECCION,PROGRAMA,INSTITUCION,SEMESTRE,ESTADO,ESTRATO,INTERNET,ELECTRICIDAD,AGUA,TELEFONIA,SANEAMIENTO,TIPOSANEAMIENTO,TELEVISION,CELULARP,COMPUTADORFAMILIAR,COMPUTADORPERSONAL,TABLETS,ESCOLARIDADM,ESCOLARIDADP,VIVIENDA,HERMANOS,POSICION,INGRESOS,EMPLEO,APOYOFAMILIAR,VOCACIONAL,TRABAJOANTES,COLEGIO,FECHAGRADUADO,TIPOCOLEGIO,PROMEDIO,MATERIAS,MATERIASCANCELADAS,CREDITOS,DIASDECLASE,EMBARAZO,ALCOHOL,SUSTANCIAS,SEDENTARISMO,ETROPICAL,ERESPIRATORIA,GASTRITIS,GASTROENTERIRIS,ANEMIA,DIABETES,FRACTURA,MIGRAÑA,TRANSTORNOSA,TRANSTORNOSP,INCAPACIDAD,ICANTIDAD,IDIAS){

     document.getElementById('padrinoEstudiante').disabled=true;
document.getElementById('padrinoEstudiante').style.display="none";
	document.getElementById('apellidosEstudiante').disabled=true;
document.getElementById('apellidosEstudiante').style.display="none";
    document.getElementById('nombreEstudiante').disabled=true;
document.getElementById('nombreEstudiante').style.display="none";
    document.getElementById('TipoIdEstudiante').disabled=true;
    document.getElementById('numIdEstudiantes').disabled=true;
document.getElementById('numIdEstudiantes').style.display="none";
    document.getElementById('fijoEstudiante').disabled=true;
document.getElementById('fijoEstudiante').style.display="none";
    document.getElementById('celularEstudiante').disabled=true;
 document.getElementById('celularEstudiante').style.display="none";
    document.getElementById('RHestudiante').disabled=true;
	document.getElementById('regimenEstudiante').disabled=true;
	document.getElementById('epsEstudiante').disabled=true;
    document.getElementById('cualEstudiante').disabled=true;
      document.getElementById('generoEstudiante').disabled=true;
      document.getElementById('nacionalidadEstudiante').disabled=true;
	document.getElementById('edadEstudiante').disabled=true;
    document.getElementById('poblacionEstudiante').disabled=true;
    document.getElementById('barrioEstudiante').disabled=true;
    document.getElementById('direccionEstudiante').disabled=true;
    document.getElementById('programaEstudiante').disabled=true;
    document.getElementById('institucionEstudiante').disabled=true;
	document.getElementById('semestreEstudiante').disabled=true;	document.getElementById('estadoEstudiante').disabled=true;
   //***CAMPOS DE LOS DETERMINANTES EN VARIABLES*****
 document.getElementById('padrinoEstudiante').value=PADRINO; 
 document.getElementById('apellidosEstudiante').value=APELLIDOS; document.getElementById('nombreEstudiante').value=NOMBRE;
document.getElementById('TipoIdEstudiante').value=IDENTIFICACIONTIPO;
document.getElementById('numIdEstudiantes').value=NUMEROID; 
document.getElementById('fijoEstudiante').value=FIJO;
document.getElementById('celularEstudiante').value=CELULAR; 
document.getElementById('RHestudiante').value=RH;
document.getElementById('regimenEstudiante').value=REGIMEN;
document.getElementById('epsEstudiante').value=EPS;
document.getElementById('cualEstudiante').value=CUAL; 
document.getElementById('generoEstudiante').value=GENERO;
document.getElementById('nacionalidadEstudiante').value=NACIONALIDAD;
document.getElementById('edadEstudiante').value=EDAD;
document.getElementById('poblacionEstudiante').value=POBLACION;
document.getElementById('barrioEstudiante').value=BARRIO;
document.getElementById('direccionEstudiante').value=DIRECCION;
document.getElementById('programaEstudiante').value=PROGRAMA;
document.getElementById('institucionEstudiante').value=INSTITUCION;
document.getElementById('semestreEstudiante').value=SEMESTRE;
document.getElementById('estadoEstudiante').value=ESTADO;
	//VARIABLES SOCIOECONOMICAS
document.getElementById('EstudianteEstrato').value=ESTRATO; 
document.getElementById('EstudianteInternet').value=INTERNET; document.getElementById('EstudianteElectricidad').value=ELECTRICIDAD;
document.getElementById('EstudianteAgua').value=AGUA;
document.getElementById('EstudianteFijo').value=TELEFONIA; 
document.getElementById('EstudianteSaneamiento').value=SANEAMIENTO;
document.getElementById('EstudianteTipoSaneamiento').value=TIPOSANEAMIENTO; 
document.getElementById('EstudianteTelevision').value=TELEVISION;
document.getElementById('EstudianteCelular').value=CELULARP;
document.getElementById('EstudianteComputador').value=COMPUTADORFAMILIAR;
document.getElementById('EstudianteComputadorP').value=COMPUTADORPERSONAL; 
document.getElementById('EstudianteTablet').value=TABLETS;
document.getElementById('EstudianteMadre').value=ESCOLARIDADM;
document.getElementById('EstudiantePadre').value=ESCOLARIDADP;
document.getElementById('EstudianteVivienda').value=VIVIENDA;
document.getElementById('EstudianteHermanos').value=HERMANOS;
document.getElementById('EstudiantePosicion').value=POSICION;
document.getElementById('ingresosHogarEstudiante').value=INGRESOS;
document.getElementById('EstudianteEmpleo').value=EMPLEO;
document.getElementById('EstudianteApoyo').value=APOYOFAMILIAR;
document.getElementById('EstudianteVocacional').value=VOCACIONAL;
document.getElementById('EstudianteTrabajo').value=TRABAJOANTES;
//VARIABLES ACADEMICAS
	document.getElementById('EstudianteColegio').value=COLEGIO; 
    document.getElementById('estudianteAnoGraduado').value=FECHAGRADUADO;
	document.getElementById('EstudianteTipoColegio').value=TIPOCOLEGIO; 
	document.getElementById('estudiantePromedio').value=PROMEDIO;
	document.getElementById('EstudianteMaterias').value=MATERIAS;
    document.getElementById('EstudianteMateriasCanceladas').value=MATERIASCANCELADAS;
	document.getElementById('estudianteCreditos').value=CREDITOS;
	document.getElementById('estudianteDiaClases').value=DIASDECLASE;
		// VARIABLES DE SALUD
	document.getElementById('EstudianteEmbarazo').value=EMBARAZO;
	document.getElementById('EstudianteAlcohol').value=ALCOHOL;
	document.getElementById('EstudianteSustancias').value=SUSTANCIAS;
	document.getElementById('EstudianteSedentarismo').value=SEDENTARISMO;
	document.getElementById('EstudianteEnfermedadTropical').value=ETROPICAL;
	document.getElementById('EstudianteEnfermedadRespiratoria').value=ERESPIRATORIA;
	document.getElementById('EstudianteGastritis').value=GASTRITIS;
	document.getElementById('EstudianteGastroenteritis').value=GASTROENTERIRIS;
	document.getElementById('EstudianteAnemia').value=ANEMIA;
	document.getElementById('EstudianteDiabetes').value=DIABETES;
	document.getElementById('EstudianteFracturas').value=FRACTURA;
	document.getElementById('EstudianteMigraña').value=MIGRAÑA;
	document.getElementById('EstudianteTrastornosA').value=TRANSTORNOSA;
	document.getElementById('EstudianteTrastornosP').value=TRANSTORNOSP;
	document.getElementById('EstudianteIncapacidad').value=INCAPACIDAD;
	document.getElementById('EstudianteIncapacidadCantidad').value=ICANTIDAD;
	document.getElementById('EstudianteIncapacidadCantidadDias').value=IDIAS;
var botonGuardarDiario=document.getElementById('btnGuardarEstudiante');
botonGuardarDiario.innerHTML='GUARDAR DIARIO DE CAMPO';


botonGuardarDiario.onclick=function(){
    
var washingtonRef = db.collection("RegistroDeEstudiantes").doc(id);
 var padrino=document.getElementById('padrinoEstudiante').value; 
    var apellidos=document.getElementById('apellidosEstudiante').value;
    var nombre = document.getElementById('nombreEstudiante').value;
    var idtipo = document.getElementById('TipoIdEstudiante').value;
    var NumIdentificacion=document.getElementById('numIdEstudiantes').value;
    var telefonofijo= document.getElementById('fijoEstudiante').value; 
    var celular= document.getElementById('celularEstudiante').value;
    var rh = document.getElementById('RHestudiante').value;
    var regimen = document.getElementById('regimenEstudiante').value;
    var eps= document.getElementById('epsEstudiante').value; 
    var cual= document.getElementById('cualEstudiante').value;
	var genero= document.getElementById('generoEstudiante').value;
    var nacionalidad= document.getElementById('nacionalidadEstudiante').value;  
	var edad= document.getElementById('edadEstudiante').value;
    var poblacion= document.getElementById('poblacionEstudiante').value;
    var barrio= document.getElementById('barrioEstudiante').value;
    var direccion= document.getElementById('direccionEstudiante').value;  
    var programa= document.getElementById('programaEstudiante').value;
    var institucion= document.getElementById('institucionEstudiante').value;
    var semestre= document.getElementById('semestreEstudiante').value; 
    var estado= document.getElementById('estadoEstudiante').value; 
//VARIABLES SOCIOECONOMICOS
      var estrato=document.getElementById('EstudianteEstrato').value;
	  var internet=document.getElementById('EstudianteInternet').value; 
	  var electricidad=document.getElementById('EstudianteElectricidad').value; 
	  var agua=document.getElementById('EstudianteAgua').value; 
	  var telefonia=document.getElementById('EstudianteFijo').value; 
	  var saneamiento=document.getElementById('EstudianteSaneamiento').value; 
	  var tipoSaneamiento=document.getElementById('EstudianteTipoSaneamiento').value; 
	  var televisión=document.getElementById('EstudianteTelevision').value; 
	  var celularP=document.getElementById('EstudianteCelular').value; 
	  var computadorF=document.getElementById('EstudianteComputador').value; 
	  var computador=document.getElementById('EstudianteComputadorP').value; 
	  var tabletas=document.getElementById('EstudianteTablet').value; 
	  var escolaridadM=document.getElementById('EstudianteMadre').value; 
	  var escolaridadP=document.getElementById('EstudiantePadre').value; 
	  var vivienda=document.getElementById('EstudianteVivienda').value; 
	  var hermanos=document.getElementById('EstudianteHermanos').value; 
	  var Posición=document.getElementById('EstudiantePosicion').value; 
	  var Ingresos=document.getElementById('ingresosHogarEstudiante').value; 
	  var empleo=document.getElementById('EstudianteEmpleo').value; 
	  var apoyoFamiliar=document.getElementById('EstudianteApoyo').value; 
	  var vocacional=document.getElementById('EstudianteVocacional').value; 
	  var trabajoAntes=document.getElementById('EstudianteTrabajo').value; 
	// VARIABLES ACADEMICAS
	var ColegioGraduado=document.getElementById('EstudianteColegio').value; 
    var AnoGraducacion=document.getElementById('estudianteAnoGraduado').value;
	var tipoColegio=document.getElementById('EstudianteTipoColegio').value; 
	var promedio=document.getElementById('estudiantePromedio').value;
	var materias=document.getElementById('EstudianteMaterias').value;
	var materiasCanceladas=document.getElementById('EstudianteMateriasCanceladas').value;
	var creditos=document.getElementById('estudianteCreditos').value;
	var diasDeClase=document.getElementById('estudianteDiaClases').value;
	// VARIABLES DE SALUD
	var embarazo=document.getElementById('EstudianteEmbarazo').value;
	var alcohol=document.getElementById('EstudianteAlcohol').value;
	var sustancias=document.getElementById('EstudianteSustancias').value;
	var sedentarismo=document.getElementById('EstudianteSedentarismo').value;
	var Etropical=document.getElementById('EstudianteEnfermedadTropical').value;
	var Erespitatoria=document.getElementById('EstudianteEnfermedadRespiratoria').value;
	var gastritis=document.getElementById('EstudianteGastritis').value;
	var gastroenteritis=document.getElementById('EstudianteGastroenteritis').value;
	var anemia=document.getElementById('EstudianteAnemia').value;
	var diabetes=document.getElementById('EstudianteDiabetes').value;
	var fractura=document.getElementById('EstudianteFracturas').value;
	var migraña=document.getElementById('EstudianteMigraña').value;
	var TrastornosA=document.getElementById('EstudianteTrastornosA').value;
	var TrastornosP=document.getElementById('EstudianteTrastornosP').value;
	var incapacidad=document.getElementById('EstudianteIncapacidad').value;
	var Icantidad=document.getElementById('EstudianteIncapacidadCantidad').value;
	var Idias=document.getElementById('EstudianteIncapacidadCantidadDias').value;
	
return washingtonRef.update({
    PADRINO: padrino,
    APELLIDOS:apellidos,
    NOMBRE:nombre,
    IDENTIFICACIONTIPO:idtipo,
    NUMEROID:NumIdentificacion,
    FIJO:telefonofijo,
    CELULAR:celular,
    RH:rh,
    REGIMEN:regimen,
    EPS:eps,
    CUAL:cual,
	GENERO:genero,
    NACIONALIDAD:nacionalidad,
	EDAD:edad,
    POBLACION:poblacion,
    BARRIO:barrio,
    DIRECCION:direccion,
    PROGRAMA:programa,
    INSTITUCION:institucion,
    SEMESTRE:semestre,
	ESTADO:estado,
		//VARIABLES SOCIOECONOMICAS
	ESTRATO:estrato,
	INTERNET:internet,
	ELECTRICIDAD:electricidad,
	AGUA:agua,
	TELEFONIA:telefonia,
	SANEAMIENTO:saneamiento,
	TIPOSANEAMIENTO:tipoSaneamiento,
	TELEVISION:televisión,
	CELULARP:celularP,
	COMPUTADORFAMILIAR:computadorF,
	COMPUTADORPERSONAL:computador,
	TABLETS:tabletas,
	ESCOLARIDADM:escolaridadM,
	ESCOLARIDADP:escolaridadP,
	VIVIENDA:vivienda,
	HERMANOS:hermanos,
	POSICION:Posición,
	INGRESOS:Ingresos,
	EMPLEO:empleo,
	APOYOFAMILIAR:apoyoFamiliar,
	VOCACIONAL:vocacional,
	TRABAJOANTES:trabajoAntes,
	//VARIABLES ACADEMICAS
	COLEGIO:ColegioGraduado,
	FECHAGRADUADO:AnoGraducacion,
	TIPOCOLEGIO:tipoColegio,
	PROMEDIO:promedio,
	MATERIAS:materias,
	MATERIASCANCELADAS:materiasCanceladas,
	CREDITOS:creditos,
	DIASDECLASE:diasDeClase,
	//VARIABLES DE SALUD
	EMBARAZO:embarazo,
	ALCOHOL:alcohol,
	SUSTANCIAS:sustancias,
	SEDENTARISMO:sedentarismo,
	ETROPICAL:Etropical,
	ERESPIRATORIA:Erespitatoria,
	GASTRITIS:gastritis,
	GASTROENTERIRIS:gastroenteritis,
	ANEMIA:anemia,
	DIABETES:diabetes,
	FRACTURA:fractura,
	MIGRAÑA:migraña,
	TRANSTORNOSA:TrastornosA,
	TRANSTORNOSP:TrastornosP,
	INCAPACIDAD:incapacidad,
	ICANTIDAD:Icantidad,//CANTIDAD DE INCAPACIDADES
	IDIAS:Idias//DIAS INCAPACITADO

})
.then(function() {
     
botonGuardarDiario.innerHTML='GUARDAR';
document.getElementById('padrinoEstudiante').value="0"; 
document.getElementById('apellidosEstudiante').value=""; document.getElementById('nombreEstudiante').value="";
document.getElementById('TipoIdEstudiante').value="0";
document.getElementById('numIdEstudiantes').value=""; 
document.getElementById('fijoEstudiante').value="";
document.getElementById('celularEstudiante').value=""; 
document.getElementById('RHestudiante').value="0";
document.getElementById('regimenEstudiante').value="0";
document.getElementById('epsEstudiante').value="0";
document.getElementById('cualEstudiante').value=""; 
document.getElementById('generoEstudiante').value="0";
document.getElementById('nacionalidadEstudiante').value="0";
document.getElementById('edadEstudiante').value="";
document.getElementById('poblacionEstudiante').value="0";
document.getElementById('barrioEstudiante').value="";
document.getElementById('direccionEstudiante').value="";
document.getElementById('institucionEstudiante').value="0";
document.getElementById('semestreEstudiante').value="0";
document.getElementById('estadoEstudiante').value="0";
	//VARIABLES SOCIOECONOMICAS
document.getElementById('EstudianteEstrato').value="0"; 
document.getElementById('EstudianteInternet').value="0"; document.getElementById('EstudianteElectricidad').value="0";
document.getElementById('EstudianteAgua').value="0";
document.getElementById('EstudianteFijo').value="0"; 
document.getElementById('EstudianteSaneamiento').value="0";
document.getElementById('EstudianteTipoSaneamiento').value="0"; 
document.getElementById('EstudianteTelevision').value="0";
document.getElementById('EstudianteCelular').value="0";
document.getElementById('EstudianteComputador').value="0";
document.getElementById('EstudianteComputadorP').value=""; 
document.getElementById('EstudianteTablet').value="0";
document.getElementById('EstudianteMadre').value="0";
document.getElementById('EstudiantePadre').value="";
document.getElementById('EstudianteVivienda').value="0";
document.getElementById('EstudianteHermanos').value="";
document.getElementById('EstudiantePosicion').value="";
document.getElementById('ingresosHogarEstudiante').value="";
document.getElementById('EstudianteEmpleo').value="0";
document.getElementById('EstudianteApoyo').value="0";
document.getElementById('EstudianteVocacional').value="0";
document.getElementById('EstudianteTrabajo').value="0";
//VARIABLES ACADEMICAS
	document.getElementById('EstudianteColegio').value=""; 
    document.getElementById('estudianteAnoGraduado').value="";
	document.getElementById('EstudianteTipoColegio').value="0"; 
	document.getElementById('estudiantePromedio').value="";
	document.getElementById('EstudianteMaterias').value="";
    document.getElementById('EstudianteMateriasCanceladas').value="0";
	document.getElementById('estudianteCreditos').value="";
	document.getElementById('estudianteDiaClases').value="";
	// VARIABLES DE SALUD
	document.getElementById('EstudianteEmbarazo').value="0";
	document.getElementById('EstudianteAlcohol').value="0";
	document.getElementById('EstudianteSustancias').value="0";
	document.getElementById('EstudianteSedentarismo').value="0";
	document.getElementById('EstudianteEnfermedadTropical').value="0";
	document.getElementById('EstudianteEnfermedadRespiratoria').value="0";
	document.getElementById('EstudianteGastritis').value="0";
	document.getElementById('EstudianteGastroenteritis').value="0";
	document.getElementById('EstudianteAnemia').value="0";
	document.getElementById('EstudianteDiabetes').value="0";
	document.getElementById('EstudianteFracturas').value="0";
	document.getElementById('EstudianteMigraña').value="0";
	document.getElementById('EstudianteTrastornosA').value="0";
	document.getElementById('EstudianteTrastornosP').value="0";
	document.getElementById('EstudianteIncapacidad').value="0";
	document.getElementById('EstudianteIncapacidadCantidad').value="0";
	document.getElementById('EstudianteIncapacidadCantidadDias').value="";
alert("Se ha añadido nuevo contenido al diario de campo correctamente gracias");

    location.reload();
})
.catch(function(error) {
    // The document probably doesn't exist.
    alert("ERROR AL GUARDAR LA ACTUALIZACIÓN");
    console.error("Error updating document: ", error);
});
 }
    }
//FUNCION PARA ORDENAR TABLA EN ORDEN ALFABETICO
function ordenarTabla() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("registros");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
//FUNCION PARA BUSCAR ESTUDIANTE EN CAMPO DE TEXTO
function BuscarEstudiante() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("registros");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function validarUsuario(){
    if(document.getElementById('validacionDiario').value===document.getElementById('numIdEstudiantes').value){
       document.getElementById('validacionDiario').value="";
        document.getElementById('mensajeAct').innerHTML=("Información correcta ahora has click en continuar");
        document.getElementById('continuar').style.display="block";
 document.getElementById('validarEstudiante').style.display="none";
       	//*****HABILITAR LOS CAMPOS****
		
    document.getElementById('padrinoEstudiante').disabled=false;
document.getElementById('padrinoEstudiante').style.display="block";
	document.getElementById('apellidosEstudiante').disabled=false;
document.getElementById('apellidosEstudiante').style.display="block";
    document.getElementById('nombreEstudiante').disabled=false;
document.getElementById('nombreEstudiante').style.display="block";
    document.getElementById('TipoIdEstudiante').disabled=false;
    document.getElementById('numIdEstudiantes').disabled=false;
document.getElementById('numIdEstudiantes').style.display="block";
    document.getElementById('fijoEstudiante').disabled=false;
document.getElementById('fijoEstudiante').style.display="block";
    document.getElementById('celularEstudiante').disabled=false;
 document.getElementById('celularEstudiante').style.display="block";
    document.getElementById('RHestudiante').disabled=false;
	document.getElementById('regimenEstudiante').disabled=false;
	document.getElementById('epsEstudiante').disabled=false;
    document.getElementById('cualEstudiante').disabled=false;
    document.getElementById('generoEstudiante').disabled=false;
    document.getElementById('nacionalidadEstudiante').disabled=false; document.getElementById('edadEstudiante').disabled=false;
    document.getElementById('poblacionEstudiante').disabled=false;
    document.getElementById('barrioEstudiante').disabled=false;
    document.getElementById('direccionEstudiante').disabled=false;
    document.getElementById('programaEstudiante').disabled=false;
    document.getElementById('institucionEstudiante').disabled=false;
	document.getElementById('semestreEstudiante').disabled=false;
	document.getElementById('estadoEstudiante').disabled=false;
        

      
    }else{
	 document.getElementById('intentar').style.display="block";
    document.getElementById('continuar').style.display="none";
	document.getElementById('validarEstudiante').style.display="none";
	document.getElementById('TipoIdDiario').value="0";
    document.getElementById('numIdDiario').value="";
    document.getElementById('gestorDiario').value; 
    document.getElementById('apellidosDiario').value="";
    document.getElementById('nombreDiario').value="";
    document.getElementById('fijoDiario').value=""; 
    document.getElementById('celularDiario').value="";
	document.getElementById('generoDiario').value="0";
    document.getElementById('nacionalidadEstudiante').value="0";   document.getElementById('edadEstudiante').value="";
    document.getElementById('poblacionEstudiante').value="0";
	document.getElementById('barrioDiario').value="";
    document.getElementById('direccionDiario').value="";  
    document.getElementById('RHdiario').value="0";
    document.getElementById('regimenDiario').value="0";
    document.getElementById('epsDiario').value="0"; 
    document.getElementById('cualDiario').value="";
    document.getElementById('programaDiario').value;
	document.getElementById('semestreDiario').value="0"; document.getElementById('estadoEstudiante').value="0"; 
		
   //***CAMPOS DE LOS DETERMINANTES EN VARIABLES*****

		
		//*****INHABILITAR LOS CAMPOS****
	
	document.getElementById('validarEstudiante').disabled=true;
	document.getElementById('TipoIdDiario').disabled=true;
    document.getElementById('numIdDiario').disabled=true;
    document.getElementById('gestorDiario').disabled=true;
    document.getElementById('apellidosDiario').disabled=true;
    document.getElementById('nombreDiario').disabled=true;
    document.getElementById('fijoDiario').disabled=true;
    document.getElementById('celularDiario').disabled=true;
	document.getElementById('generoDiario').disabled=true;
    document.getElementById('nacionalidadEstudiante').disabled=true;
    document.getElementById('edadEstudiante').disabled=true;
    document.getElementById('poblacionEstudiante').disabled=true;
	document.getElementById('barrioDiario').disabled=true;
    document.getElementById('direccionDiario').disabled=true;
    document.getElementById('RHdiario').disabled=true;
    document.getElementById('regimenDiario').disabled=true;
    document.getElementById('epsDiario').disabled=true;
    document.getElementById('cualDiario').disabled=true;
    document.getElementById('programaDiario').disabled=true;
	document.getElementById('semestreDiario').disabled=true;
	document.getElementById('estadoEstudiante').disabled=true;
   //***CAMPOS DE LOS DETERMINANTES EN VARIABLES*****


	}
}
