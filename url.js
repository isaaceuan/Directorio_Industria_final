const listarCategorias = async()=>{
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  // console.log(params.id_cat);
  const tituloCat = document.querySelector(".nombre_cat");
  const textoMensaje = document.querySelector(".texto-cat");
  const contendorEmpresa = document.querySelector(".contenedor-empresas");
  const contenidoBody = document.querySelector('.contenido');

  // const textoMensajeN = document.querySelector(".text-cat-negritas");


  tituloCat.classList.add("text-center");

  const data = new FormData();
  data.append('id',params.id_cat );


    const peticion = await fetch('class/listarResultados.php',{
    method: 'POST',
    body: data
})
   const resp = await peticion.json();
   console.log(resp);

    
   
   
   if(resp==='vacio'){
   


      const data2 = new FormData();
  data2.append('id',params.id_cat );


    const peticion = await fetch('class/traerCategorias.php',{
    method: 'POST',
    body: data2
})
   const resp2 = await peticion.json();
   console.log(resp2);

  //  
  

   textoMensaje.innerHTML = `No hay resultados para la categoría: `;
   const texto = document.createElement("span");
  texto.innerText = resp2.categoria;
  texto.classList.add("text-cat-negritas");
  textoMensaje.appendChild(texto);

   tituloCat.innerHTML = "";
   
  //  paginador.style.display = "none";

  //  mostrarCategoriasAside();

    }else{
   
         for(cat of resp){

      //  console.log(cat);
      if(cat.categoria == undefined) {
        tituloCat.innerHTML = `Todas las empresas`;
        if(resp ==='vacios'){
          textoMensaje.innerHTML = `No hay ninguna empresa registrada aun `;

        }else{
          textoMensaje.innerHTML = "";

        }


      }else{
        tituloCat.innerHTML = cat.categoria;
        textoMensaje.innerHTML = "";
      }


      

       if (cat.miembro === "1"){
      

       const card = document.createElement("div");
       card.classList.add("card","cuerpo-contenido-p" ,"cuerpo-contenido");

       const urlImg = document.createElement('a')
       urlImg.href =  `empresa.php?id=${cat.id}`;

       card.appendChild(urlImg);

       const imgEmpresa = document.createElement('img');
       imgEmpresa.classList.add("imgEmpresa");
       imgEmpresa.src = `src/img/${cat.logo_url}`;
       imgEmpresa.style.setProperty("width", "180px");
       imgEmpresa.style.setProperty("height", "180px"); 
       urlImg.appendChild(imgEmpresa);

        const cardBody = document.createElement("div");
       //  cardBody.innerText = cat.nombre;
        cardBody.classList.add("tcard-body" ,"cuerpo-card");
        card.appendChild(cardBody);

        const tituloEmpresa = document.createElement('h4');
        tituloEmpresa.innerText=  cat.nombre;
        cardBody.appendChild(tituloEmpresa);



          const iconoanpr = document.createElement('div');
        iconoanpr.classList.add("anpr-icono");

        const contenedorimgAnpr = document.createElement('div');
        contenedorimgAnpr.classList.add("div-iconoanpr");

        
        const imgIcono = document.createElement('img');
        imgIcono.src ='src/img/icono-miembro.jpeg'


        const verMas = document.createElement('div');
        verMas.classList.add("div-boton-mas");

        
        const botonVerMas =document.createElement('a');
        botonVerMas.classList.add("boton-ver-mas");
        botonVerMas.href = `empresa.php?id=${cat.id}`;
        botonVerMas.innerText = 'Más Información';

        let iconomasInfo = document.createElement('i');
        iconomasInfo.classList.add("bi")
        iconomasInfo.classList.add("bi-plus-lg")

        botonVerMas.appendChild(iconomasInfo);
        verMas.appendChild(botonVerMas);

        const enviarMensaje = document.createElement('div');
        enviarMensaje.classList.add("enviar-mensaje");

        
        const botonEnviarMensaje =document.createElement('a');
        botonEnviarMensaje.classList.add("boton-enviar-mensaje");
        // botoEnviarMensaje.href = `empresa.php?id=${cat.id}`;
        botonEnviarMensaje.innerText = 'Enviar Mensaje';

        let iconoEnviarM = document.createElement('i');
        iconoEnviarM.classList.add("bi")
        iconoEnviarM.classList.add("bi-envelope-fill")

        botonEnviarMensaje.appendChild(iconoEnviarM);

        const contactoOcultar = document.createElement('div');
        contactoOcultar.classList.add("ocultar");

        

        let telefonoOcultar= document.createElement('a');
        telefonoOcultar.classList.add("cel-responsive");
        telefonoOcultar.innerText = cat.telefono;
        telefonoOcultar.href= `tel:${cat.telefono}`;

        let icono_tel_ocultar = document.createElement('i');
        icono_tel_ocultar.classList.add("bi")
        icono_tel_ocultar.classList.add("bi-phone")

        telefonoOcultar.appendChild(icono_tel_ocultar);


        contactoOcultar.appendChild(telefonoOcultar);





        enviarMensaje.appendChild(botonEnviarMensaje)


        contenedorimgAnpr.appendChild(imgIcono);
        contenedorimgAnpr.appendChild(contactoOcultar);
        contenedorimgAnpr.appendChild(enviarMensaje);
        contenedorimgAnpr.appendChild(verMas);
        card.appendChild(contenedorimgAnpr);
        
     

        const descripcionEmpresa = document.createElement('p')
          descripcionEmpresa.innerText = cat.direccion;


          const contenedorimgAnproculto = document.createElement('div');
          contenedorimgAnproculto.classList.add("ocultar","iconoanproculto");

        
        const imgIconoOculto = document.createElement('img');
        imgIconoOculto.src ='src/img/icono-miembro.jpeg'


        contenedorimgAnproculto.appendChild(imgIconoOculto);
          cardBody.appendChild	(descripcionEmpresa);
          cardBody.appendChild(contenedorimgAnproculto);


        contendorEmpresa.appendChild(card);

        const premium = document.createElement('div');
        premium.classList.add("contenido-premium");




        const contacto = document.createElement('div');
        contacto.classList.add("div-contacto");

        

        let telefono= document.createElement('a');
        telefono.innerText = cat.telefono;
        telefono.href= `tel:${cat.telefono}`;

        let icono_tel = document.createElement('i');
        icono_tel.classList.add("bi")
        icono_tel.classList.add("bi-phone")

        telefono.appendChild(icono_tel);


        contacto.appendChild(telefono);


        premium.appendChild(contacto);

        
        cardBody.appendChild(premium);
        // cardBody.appendChild(iconoanpr);

       }if(cat.miembro === "0"){
        

        const card = document.createElement("div");
        card.classList.add("card","cuerpo-contenido-p" ,"cuerpo-contenido");
 
        const urlImg = document.createElement('a')
 
        card.appendChild(urlImg);
 
        const imgEmpresa = document.createElement('img');
        imgEmpresa.classList.add("imgEmpresa");
        imgEmpresa.src = `src/img/logofree.png`;
        imgEmpresa.style.setProperty("width", "180px");
        imgEmpresa.style.setProperty("height", "180px"); 
        urlImg.appendChild(imgEmpresa);
 
         const cardBody = document.createElement("div");
        //  cardBody.innerText = cat.nombre;
         cardBody.classList.add("tcard-body" ,"cuerpo-card");
         card.appendChild(cardBody);
 
         const tituloEmpresa = document.createElement('h4');
         tituloEmpresa.innerText=  cat.nombre;
         cardBody.appendChild(tituloEmpresa);
 
 
 
 
         const contenedorimgAnpr = document.createElement('div');
         contenedorimgAnpr.classList.add("div-iconoanprfree");
 
         
    
 
 
        
 
        //  const enviarMensaje = document.createElement('div');
        //  enviarMensaje.classList.add("enviar-mensaje");
 
         
        //  const botonEnviarMensaje =document.createElement('a');
        //  botonEnviarMensaje.classList.add("boton-enviar-mensaje");
        //  botonEnviarMensaje.href="#";
        //  // botoEnviarMensaje.href = `empresa.php?id=${cat.id}`;
        //  botonEnviarMensaje.innerText = 'Enviar Mensaje';
 
        //  let iconoEnviarM = document.createElement('i');
        //  iconoEnviarM.classList.add("bi")
        //  iconoEnviarM.classList.add("bi-envelope-fill")
 
        //  botonEnviarMensaje.appendChild(iconoEnviarM);
 
 
 
        //  enviarMensaje.appendChild(botonEnviarMensaje)
 
 
        //  contenedorimgAnpr.appendChild(enviarMensaje);


         const contactoOcultar = document.createElement('div');
        contactoOcultar.classList.add("ocultar");

        

        let telefonoOcultar= document.createElement('a');
        telefonoOcultar.classList.add("cel-responsive","r-free");
        telefonoOcultar.innerText = cat.telefono;
        telefonoOcultar.href= `tel:${cat.telefono}`;

        let icono_tel_ocultar = document.createElement('i');
        icono_tel_ocultar.classList.add("bi")
        icono_tel_ocultar.classList.add("bi-phone")

        telefonoOcultar.appendChild(icono_tel_ocultar);


        contactoOcultar.appendChild(telefonoOcultar);
        contenedorimgAnpr.appendChild(contactoOcultar);

         card.appendChild(contenedorimgAnpr);
         
      
 
         const descripcionEmpresa = document.createElement('p')
           descripcionEmpresa.innerText = cat.direccion;
           cardBody.appendChild	(descripcionEmpresa);
 
         contendorEmpresa.appendChild(card);
 
         const premium = document.createElement('div');
         premium.classList.add("contenido-premium");
 
 
 
 
         const contacto = document.createElement('div');
         contacto.classList.add("div-contacto");
 
         
 
         let telefono= document.createElement('a');
         telefono.innerText = cat.telefono;
         telefono.href= `tel:${cat.telefono}`;
 
         let icono_tel = document.createElement('i');
         icono_tel.classList.add("bi")
         icono_tel.classList.add("bi-phone")
 
         telefono.appendChild(icono_tel);
 
 
 
 
         
     
 
       
 
         
 
 
         contacto.appendChild(telefono);
 
 
        
 
 
 
         premium.appendChild(contacto);
 
         
         cardBody.appendChild(premium);

         
         
    
  
  
    

       }
       
       contendorEmpresa.innerHTML += `
       <hr class="separadorEmpresas">
       
       `;
       
   
                

   }
    }

    const divPaginador = document.createElement('div');
    divPaginador.setAttribute("id","pagination-container");
    contenidoBody.appendChild(divPaginador);

    let items = $(".contenedor-empresas .card");
    let items2 = $(".contenedor-empresas hr");
  let numItems = items.length;
  let perPage = 4;
  let perPage2 = perPage-1;


  items.slice(perPage).hide();
  items2.slice(perPage2).hide();


  $('#pagination-container').pagination({
      items: numItems,
      itemsOnPage: perPage,
      prevText: "&laquo;",
      nextText: "&raquo;",
      onPageClick: function (pageNumber) {
          let showFrom = perPage * (pageNumber - 1);
          let showTo = showFrom + perPage;
          items.hide().slice(showFrom, showTo).show();
          items2.hide().slice(showFrom, showTo).show();

      }
  });



      // if(resp ==='vacio'){
      //   paginador.style.display='none';
      // }else{
      //   paginador.style.display='block';

      // }
      // if(resp ==='vacios'){
      //   paginador.style.display='none';
      // }else{
      //   paginador.style.display='block';

      // }
   
   



    // contenedorEmpresaPrincipal.innerHTML += `
    // <hr>
    
    // `;
     

}



const mostrarCategoriasAside = async() =>{
const contendorEmpresa = document.querySelector(".contenedor-empresas");
const body = document.querySelector('body');

  const data = new FormData();
  data.append('membresia','algo' );

  let divCat= document.querySelector(".lista_cat");


    const peticion = await fetch('class/listarIconosCat.php',{
    method: 'POST',
    body: data
})
   const resp = await peticion.json();
  //  console.log(resp);

   for(cat of resp){
      //  console.log(cat);
     

      const contenedor = document.createElement("div");
      contenedor.classList.add("cont-cat");
      divCat.appendChild(contenedor);

         
       const fila = document.createElement("a");
       fila.innerText = cat.categoria;
       fila.classList.add("cat");
       fila.id=`${cat.id_cat}`;
       fila.href = `categorias.php?id_cat=${cat.id_cat}`;
       contenedor.appendChild(fila);

       
       const fila2 = document.createElement("img");
      fila2.src = `src/img/${cat.url_img}`;
      fila2.style.setProperty("width", "20px");
      fila2.style.setProperty("height", "20px"); 
      contenedor.appendChild(fila2);



   }

   const buttons = document.querySelectorAll(".cat");
for (const button of buttons) {
button.addEventListener('click', function(event) {
event.preventDefault();
// MostrarCatClick(this.id);
history.pushState("", "", this.href);
contendorEmpresa.innerHTML="";
algo = document.querySelector('#pagination-container');

if(algo === null){
  algo.style.display = 'none';

}else{
algo.style.display = 'none';

var ocultar = setTimeout(function() { 

algo.style.display = 'block';


 // $("#pagination-container").show();

}, 1000);

}



listarCategorias();


})
}

}






listarCategorias();
mostrarCategoriasAside();