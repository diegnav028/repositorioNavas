<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Elige hasta <?= $mazo->getTamano() ?> cartas</h1>
        
    </div>

        <div class="carta-anadir" id="content">
        <div class="atras"><button id="atrasm" onclick="atrasm()">←</button></div>
        <div class="borde-melee" id="bordem">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p id="rareza-textom"></p>
                </div>
                <div id="nombre-carta">
                    <p id="nombre-textom"></p>
                </div>
                <div id="mana">
                    <p id="mana-textom"></p>
                </div>
            </div>
            <div class='foto-carta' id="fotom" >
             
                </div>
            <div class="familias">
                   <text id="claves-textom"></text>
                    <p id="familia-textom"></p>      
             
            
             
            </div>
            <div class="descripcion">
                <p id="descripcion-textom"></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p id="turnos-textom"></p>
                </div>
                <div id="tipo">
                    <p id="tipo-textom"></p>
                </div>
                <div id="ataque">
                    <p id="ataque-textom"></p>
                </div>
            </div>
      </div>
      <div class="alante"><button id="alantem" onclick="alantem()">→</button></div>
      <div class="usar" >
        <button id="addCarta" onclick="addCarta()">Añadir Carta</button>
      </div>
    </div>
    
    
    <div class='selector-todas' id="CartasEnMazo">
        
       
           
        
     

    </div>
    <div class="usar" style="margin-top: 20px;"><button id="confirmar" style="width: 40%;" onclick="confirmar()">Confirmar</button></div>   
    
    
    
    
    

</div>




  <script type="text/javascript">
        var tamano=<?= $mazo->getTamano() ?>;
        var familia=<?= $numero ?>;
        
        var cartasMazo=[];

        var todasCarta=[];

        var idCarta=0;

            //Constructor de cartas
function Carta(id,nombre,familia,clave1,clave2,clave3,multiataque,mana,descripcion,ataque,turnos,tipo,rareza,foto){
    this.id=id;
    this.nombre=nombre;
    this.familia=familia;
    this.clave1=clave1;
    this.clave2=clave2;
    this.clave3=clave3;
    this.multiataque=multiataque;
    this.mana=mana;
    this.descripcion=descripcion;
    this.ataque=ataque;
    this.turnos=turnos;
    this.tipo=tipo;
    this.rareza=rareza;
    this.foto=foto;
}

    <?php foreach($cartasmazo as $c): ?>
cartasMazo.push(new Carta(<?= $c->getId_carta()?>,"<?=$c->getNombre()?>","<?=$c->getFamilia()?>","<?=$c->getClave1()?>","<?=$c->getClave2() ?>","<?=$c->getClave3()?>",<?=$c->getMultiataque() ?>,<?=$c->getMana()?>,"<?= $c->getDescripcion()?>",<?=$c->getAtaque()?>,<?=$c->getTurnos()?>,"<?=$c->getTipo()?>",<?=$c->getRareza()?>,"<?=$c->getFoto()?>"));

 <?php endforeach; ?> 

    <?php foreach($cartasposibles as $c): ?>
todasCarta.push(new Carta(<?= $c->getId_carta()?>,"<?=$c->getNombre()?>","<?=$c->getFamilia()?>","<?=$c->getClave1()?>","<?=$c->getClave2() ?>","<?=$c->getClave3()?>",<?=$c->getMultiataque() ?>,<?=$c->getMana()?>,"<?= $c->getDescripcion()?>",<?=$c->getAtaque()?>,<?=$c->getTurnos()?>,"<?=$c->getTipo()?>",<?=$c->getRareza()?>,"<?=$c->getFoto()?>"));

 <?php endforeach; ?> 



document.addEventListener("DOMContentLoaded",Iniciar);


function Iniciar(){
generarCartam();
  
var mazo=document.getElementById("CartasEnMazo");

    for (let i = 0; i < cartasMazo.length; i++) {
        const carta = document.createElement('div')
        carta.classList.add('tienda-borde');
    var s="carta-"+i;
      carta.setAttribute('id', s);
      const cartaContenido=document.createElement('div');
      if(cartasMazo[i].familia=="melee"){
      cartaContenido.classList.add('bordetienda-melee');

  }
 if(cartasMazo[i].familia==="gun"){
    cartaContenido.classList.add('bordetienda-gun');
 }
 if(cartasMazo[i].familia==="psi"){
    cartaContenido.classList.add('bordetienda-psi');

 }
 if(cartasMazo[i].familia==="cyber"){
    cartaContenido.classList.add('bordetienda-cyber');

 }
 console.log(carta);
 const cartaCabeza=document.createElement('div');
  cartaCabeza.classList.add('datos-cabeza');
  const cartaRareza=document.createElement('div');
  cartaRareza.setAttribute('id','rareza');
  const pRareza=document.createElement('p');
  pRareza.innerHTML=cartasMazo[i].rareza;

  const cartaNombre=document.createElement('div');
 cartaNombre.setAttribute('id','nombre-carta');
 const pNombre=document.createElement('p');
 pNombre.innerHTML=cartasMazo[i].nombre;


 const cartaMana=document.createElement('div');
cartaMana.setAttribute('id','mana');
const pMana=document.createElement('p');
pMana.innerHTML=cartasMazo[i].mana;

const fotoCarta=document.createElement('div');
fotoCarta.classList.add( 'foto-carta');
const fotosts="url(imagenes/"+cartasMazo[i].foto+")";
fotoCarta.style.backgroundImage=fotosts;

const cartaFamilia=document.createElement('div');
cartaFamilia.classList.add('familias');
const pFamilia1=document.createElement('text');
pFamilia1.innerHTML=cartasMazo[i].clave1+"-"+cartasMazo[i].clave2+"-"+cartasMazo[i].clave3;
const pFamilia2=document.createElement('p');
if(cartasMazo[i].multiataque==0){
    
pFamilia2.innerHTML=cartasMazo[i].familia+"-Singular";
}else{
    pFamilia2.innerHTML=cartasMazo[i].familia+"-Multiataque";
}



const cartaDescripcion=document.createElement('div');
cartaDescripcion.classList.add('descripcion');
const pDescripcion=document.createElement('p');
pDescripcion.innerHTML=cartasMazo[i].descripcion;



const cartaAtaque=document.createElement('div');
  cartaAtaque.classList.add('ataque');
  const cartaTurnos=document.createElement('div');
  cartaTurnos.setAttribute('id','turnos');
  const pTurnos=document.createElement('p');
  pTurnos.innerHTML=cartasMazo[i].turnos;

  const cartaTipo=document.createElement('div');
 cartaTipo.setAttribute('id','tipo');
 const pTipo=document.createElement('p');
 pTipo.innerHTML=cartasMazo[i].tipo;

 const cartaAtk=document.createElement('div');
cartaAtk.setAttribute('id','ataque');
const pAtk=document.createElement('p');
pAtk.innerHTML=cartasMazo[i].ataque;




mazo.appendChild(carta);
carta.appendChild(cartaContenido);
cartaContenido.appendChild(cartaCabeza);
cartaCabeza.appendChild(cartaRareza);
cartaRareza.appendChild(pRareza);
cartaCabeza.appendChild(cartaNombre);
cartaNombre.appendChild(pNombre);
cartaCabeza.appendChild(cartaMana);
cartaMana.appendChild(pMana);
cartaContenido.appendChild(fotoCarta);
cartaContenido.appendChild(cartaFamilia);
cartaFamilia.appendChild(pFamilia1);
cartaFamilia.appendChild(pFamilia2);
cartaContenido.appendChild(cartaDescripcion);
cartaDescripcion.appendChild(pDescripcion);
cartaContenido.appendChild(cartaAtaque);
cartaAtaque.appendChild(cartaTurnos);
cartaTurnos.appendChild(pTurnos);
cartaAtaque.appendChild(cartaTipo);
cartaTipo.appendChild(pTipo);
cartaAtaque.appendChild(cartaAtk);
cartaAtk.appendChild(pAtk);

const cartaBoton=document.createElement('div');
cartaBoton.classList.add('comprar')
const divram=document.createElement('div');
const but=document.createElement('button');
but.setAttribute('id',i);
but.innerText="Quitar carta";
but.addEventListener('click', borrarCarta);

carta.appendChild(cartaBoton);
cartaBoton.appendChild(divram);
divram.appendChild(but);
    
}




}

function generarCartam(){
      var car=todasCarta[idCarta];
if(idCarta==0){
    document.getElementById("atrasm").disabled=true;
}else{
    document.getElementById("atrasm").disabled=false;
}

if(idCarta==(todasCarta.length-1)){
    document.getElementById("alantem").disabled=true;
}else{
   
    document.getElementById("alantem").disabled=false;
}

var rar=6-car.rareza;
var cont=0;

for (let i = 0; i < cartasMazo.length; i++) {
    if(car.id==cartasMazo[i].id){
        cont=cont+1;
    }
    
}

if(cont>=rar){
    document.getElementById("addCarta").disabled=true;
}else{
    if(cartasMazo.length>=tamano){
        document.getElementById("addCarta").disabled=true;
    }else{
        document.getElementById("addCarta").disabled=false;
    }

}




  if(car.familia=="melee"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-melee");

  }
 if(car.familia=="gun"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-gun");

 }
 if(car.familia=="psi"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-psi");

 }
 if(car.familia=="cyber"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-cyber");

 }
document.getElementById("rareza-textom").innerHTML=car.rareza;
document.getElementById("nombre-textom").innerHTML=car.nombre;
document.getElementById("mana-textom").innerHTML=car.mana;
var fotost="url(imagenes/"+car.foto+")";
document.getElementById("fotom").style.backgroundImage=fotost;
document.getElementById("claves-textom").innerHTML=car.clave1+"-"+car.clave2+"-"+car.clave3;
if(car.multiataque==0){
    document.getElementById("familia-textom").innerHTML=car.familia+"-Singular";
}else{
    document.getElementById("familia-textom").innerHTML=car.familia+"-Multiataque";
}
document.getElementById("descripcion-textom").innerHTML=car.descripcion;
document.getElementById("turnos-textom").innerHTML=car.turnos;
document.getElementById("tipo-textom").innerHTML=car.tipo;

    document.getElementById("ataque-textom").innerHTML=car.ataque;

}

function atrasm(){
   idCarta=idCarta-1;
    generarCartam();
}

function alantem(){
    idCarta=idCarta+1;
    generarCartam();
}

function addCarta(){
    var car=todasCarta[idCarta];
var mazo=document.getElementById("CartasEnMazo");
    const carta = document.createElement('div');
        carta.classList.add('tienda-borde');
        var s="carta-"+cartasMazo.length;
      carta.setAttribute('id', s);
      const cartaContenido=document.createElement('div');
      if(car.familia=="melee"){
      cartaContenido.classList.add('bordetienda-melee');

  }
 if(car.familia==="gun"){
    cartaContenido.classList.add('bordetienda-gun');
 }
 if(car.familia==="psi"){
    cartaContenido.classList.add('bordetienda-psi');

 }
 if(car.familia==="cyber"){
    cartaContenido.classList.add('bordetienda-cyber');

 }
 const cartaCabeza=document.createElement('div');
  cartaCabeza.classList.add('datos-cabeza');
  const cartaRareza=document.createElement('div');
  cartaRareza.setAttribute('id','rareza');
  const pRareza=document.createElement('p');
  pRareza.innerHTML=car.rareza;

  const cartaNombre=document.createElement('div');
 cartaNombre.setAttribute('id','nombre-carta');
 const pNombre=document.createElement('p');
 pNombre.innerHTML=car.nombre;


 const cartaMana=document.createElement('div');
cartaMana.setAttribute('id','mana');
const pMana=document.createElement('p');
pMana.innerHTML=car.mana;

const fotoCarta=document.createElement('div');
fotoCarta.classList.add( 'foto-carta');
const fotosts="url(imagenes/"+car.foto+")";
fotoCarta.style.backgroundImage=fotosts;

const cartaFamilia=document.createElement('div');
cartaFamilia.classList.add('familias');
const pFamilia1=document.createElement('text');
pFamilia1.innerHTML=car.clave1+"-"+car.clave2+"-"+car.clave3;
const pFamilia2=document.createElement('p');
if(car.multiataque==0){
    
pFamilia2.innerHTML=car.familia+"-Singular";
}else{
    pFamilia2.innerHTML=car.familia+"-Multiataque";
}



const cartaDescripcion=document.createElement('div');
cartaDescripcion.classList.add('descripcion');
const pDescripcion=document.createElement('p');
pDescripcion.innerHTML=car.descripcion;



const cartaAtaque=document.createElement('div');
  cartaAtaque.classList.add('ataque');
  const cartaTurnos=document.createElement('div');
  cartaTurnos.setAttribute('id','turnos');
  const pTurnos=document.createElement('p');
  pTurnos.innerHTML=car.turnos;

  const cartaTipo=document.createElement('div');
 cartaTipo.setAttribute('id','tipo');
 const pTipo=document.createElement('p');
 pTipo.innerHTML=car.tipo;

 const cartaAtk=document.createElement('div');
cartaAtk.setAttribute('id','ataque');
const pAtk=document.createElement('p');
pAtk.innerHTML=car.ataque;




mazo.appendChild(carta);
carta.appendChild(cartaContenido);
cartaContenido.appendChild(cartaCabeza);
cartaCabeza.appendChild(cartaRareza);
cartaRareza.appendChild(pRareza);
cartaCabeza.appendChild(cartaNombre);
cartaNombre.appendChild(pNombre);
cartaCabeza.appendChild(cartaMana);
cartaMana.appendChild(pMana);
cartaContenido.appendChild(fotoCarta);
cartaContenido.appendChild(cartaFamilia);
cartaFamilia.appendChild(pFamilia1);
cartaFamilia.appendChild(pFamilia2);
cartaContenido.appendChild(cartaDescripcion);
cartaDescripcion.appendChild(pDescripcion);
cartaContenido.appendChild(cartaAtaque);
cartaAtaque.appendChild(cartaTurnos);
cartaTurnos.appendChild(pTurnos);
cartaAtaque.appendChild(cartaTipo);
cartaTipo.appendChild(pTipo);
cartaAtaque.appendChild(cartaAtk);
cartaAtk.appendChild(pAtk);

const cartaBoton=document.createElement('div');
cartaBoton.classList.add('comprar');
const divram=document.createElement('div');
const but=document.createElement('button');
but.setAttribute('id',cartasMazo.length);
but.innerText="Quitar carta";
but.addEventListener('click', borrarCarta);

carta.appendChild(cartaBoton);
cartaBoton.appendChild(divram);
divram.appendChild(but);

cartasMazo.push(car);

var rar=6-car.rareza;
var cont=0;

for (let i = 0; i < cartasMazo.length; i++) {
    if(car.id==cartasMazo[i].id){
        cont=cont+1;
    }
    
}

if(cont>=rar){
    document.getElementById("addCarta").disabled=true;
}else{
    if(cartasMazo.length>=tamano){
        document.getElementById("addCarta").disabled=true;
    }else{
        document.getElementById("addCarta").disabled=false;
    }

}
if(cartasMazo.length==0){
    document.getElementById("confirmar").disabled=true;
}else{
        document.getElementById("confirmar").disabled=false;
}





}


function borrarCarta(){
    let cartaId = this.getAttribute('id');
    var s="carta-"+cartaId;
    var catabor=document.getElementById(s);
    var x=Number(cartaId)+1;
for (let i = x; i < cartasMazo.length; i++){
    var sedit="carta-"+i;
    var sedit2="carta-"+(i-1);
    var cartaedit=document.getElementById(sedit);
    cartaedit.setAttribute('id',sedit2);
    var ids=i-1;
    var botonedit=document.getElementById(i);
    botonedit.setAttribute('id',ids);
}


    cartasMazo.splice(cartaId,1);

catabor.parentNode.removeChild(catabor);

    var car=todasCarta[idCarta];

var rar=6-car.rareza;
var cont=0;

for (let i = 0; i < cartasMazo.length; i++) {
    if(car.id==cartasMazo[i].id){
        cont=cont+1;
    }
    
}

if(cont>=rar){
    document.getElementById("addCarta").disabled=true;
}else{
    if(cartasMazo.length>=tamano){
        document.getElementById("addCarta").disabled=true;
    }else{
        document.getElementById("addCarta").disabled=false;
    }

}

if(cartasMazo.length==0){
    document.getElementById("confirmar").disabled=true;
}else{
        document.getElementById("confirmar").disabled=false;
}


}

function confirmar(){
    var arrayEnviar=[];

    for (let i = 0; i < cartasMazo.length; i++) {
        arrayEnviar.push(cartasMazo[i].id);


        
    }

    var enviarString=arrayEnviar.toString();
    location.href = 'http://localhost/JuegoCartas/index.php?action=guardarMazo&cartas='+enviarString+'&numero='+familia;
    
}

</script>









    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>
