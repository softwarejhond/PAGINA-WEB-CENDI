<div id="click" onclick="AFMenu()">
  <i class="fas fa-plus fa-3x p-3" id="btn"></i>
</div>
<div id="menu">
  <a class="ico" href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank" data-toggle="tooltip" data-placement="right" title="Q10 PARA TÉCNICOS"><i class="fa-brands fa-quora"></i><i class="fa-solid fa-1"></i><i class="fa-solid fa-0"></i></a>
  <a class="ico" href="https://moodle.cendi.fundacionview.org/" target="_blank" data-toggle="tooltip" data-placement="right" title="APLICACIONES WEB Y ANDROID"><i class="fa-brands fa-android"></i></a>
  <a class="ico" href="https://cendi.kurve.digital/" target="_blank" data-toggle="tooltip" data-placement="right" title="CAMPUS VIRTUAL"><i class="fa-solid fa-rocket"></i></a>
  <a class="ico" href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Q10 PARA BACHILLERATO"><i class="fa-brands fa-quora"></i><i class="fa-solid fa-1"></i><i class="fa-solid fa-0"></i></a>
  <a class="ico" href="#" data-toggle="modal" data-target="#pqrsModal"><i class="fa-solid fa-circle-question"></i></a>
  <a class="ico" href="#"></a>
</div>
<style>
#btn{
    transition: .5s;
}
#click{
  cursor:pointer;
  height:50px;
  width:50px;
  background:red;
  position:fixed;
  top:0;left:1;right:0;bottom:1;
  margin-top: 231px;
  margin-right: 110px;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  color:white;
  z-index: 999;
  
}
#menu{
  transition: .5s;
  height:70px;
  width:70px;
  margin-top: 226px;
  margin-right: 100px;
  transform:scale(0);
  background: #f5f5f5;
  border:2px solid #020031;
  z-index:998;
  position:fixed;
  top:0;left:1;right:0;bottom:1;
  border-radius:50%;
  box-shadow: 0 0 5px rgba(255, 0, 0,0.3);
}
#menu a{
  position:absolute;
  font-size:9px;
}
#menu a:nth-child(1):hover{
  color:#7733ff;
}
#menu a:nth-child(2):hover{
  color:#ff6600;
}
#menu a:nth-child(3):hover{
  color:#3399ff;
}
#menu a:nth-child(4):hover{
  color:#ff0000;
}
#menu a:nth-child(5):hover{
  color:#ffcc00;
}
#menu a:nth-child(6):hover{
  color:#00b33c;
}
#menu a:nth-child(1){
color:black;
  top:5px;
  left:50%;
  transform:translateX(-50%);
}
#menu a:nth-child(2){
  color:black;
  top:50%;
  left:70%;
  transform:translateY(-120%);
}
#menu a:nth-child(3){
color: black;
  top:100%;
  left:70%;
  transform:translateY(-180%);
}
#menu a:nth-child(4){
color: black;
  bottom:5px;
  left:50%;
  transform:translateX(-50%);
}
#menu a:nth-child(5){
color: black;
  top:100%;
  left:10%;
  transform:translateY(-180%);
}
#menu a:nth-child(6){
color: black;
  top:50%;
  left:10%;
  transform:translateY(-120%);
}
#click:hover::before,#click:hover::after{
  opacity:1;
  visibility:visible;
}
#click::before{
  visibility:hidden;
  font-family:Arial;
  transition: .5s ease-in-out;
content:'Servicios';
  height:30px;
   opacity:0;
  text-align:center;
  padding:5px;
  box-sizing:border-box;
  width:max-content;
  background:#020031;
  position:absolute;
  top:-40px;
  border-radius:3px;
}
#click::after{
    visibility:hidden;
    transition: .5s ease-in-out;
  content:'';
  opacity:0;
  border-style:solid;
  border-size:20px;
  position:absolute;
  border-color: #020031 transparent transparent transparent;
  top:-10px;
}
</style>
<script>
    var i = 0;
function AFMenu(){
  if(i==0){ document.getElementById("menu").style.transform="scale(3)";
           document.getElementById("btn").style.transform="rotate(45deg)";

    i=1;
  }else{
    document.getElementById("menu").style.transform="scale(0)";
    document.getElementById("btn").style.transform="rotate(0)";
    i=0;
  }
}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script src="https://kit.fontawesome.com/d78c995630.js" crossorigin="anonymous"></script>