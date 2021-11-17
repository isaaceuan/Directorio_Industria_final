const listarInfoEmpresa = async() =>{

    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    const data = new FormData();
    data.append('id',params.id );
    const tituloEmpresa = document.querySelector('.empresaTitulo');
    const divCuadroEmpresa = document.querySelector('.cuadroEmpresa');
    const logoEmpresa = document.querySelector('.logoEmpresa');
    const text_desc = document.querySelector('.texto-descripcion');
    const contImgDestacados = document.querySelector('.img_destacadas');
    const contDatos = document.querySelector('.contenedorDatos');
    const highlogic = document.querySelector('.hihgLogic');
    const video = document.querySelector('.video-responsive');
    const catalogo = document.querySelector('.catalogoP');


    // console.log(params.id);
    // let divCat= document.querySelector(".iconos_cat");


      const peticion = await fetch('class/datosEmpresa.php',{
      method: 'POST',
      body: data
  })
     const resp = await peticion.json();
     console.log(resp);

     for(empresa of resp){


       const longTextoFormat = empresa.informacion.replace(/\n/g, '<br />');



        logoEmpresa.innerHTML = `

        <div class="contenedorImgProducto gallery">
                        
                    </div>

        <img class="logoEmpresa1" src="src/img/${empresa.logo_url}" alt="">
        
    <div class="iconosCat">
        
    </div>
        `;

        if(empresa.miembro === "1"){

            if(empresa.direccion_web == null){

                // tituloEmpresa.innerHTML= `${empresa.nombre}`;
                divCuadroEmpresa.innerHTML += `
                <h2>${empresa.nombre}</h2>
                <h5 class="mb-3">Miembro representante: </h5>
                <div class="row align-items-center mb-3 representante">
                  <div class="col-2"><img width="65" src="src/img/${empresa.url_foto_rep}" alt=""></div>
                  <div class="col-7"><p class="mb-0">${empresa.nombre_rep}</p>
                  <p>${empresa.puesto_rep}</p>
                  </div>
                </div>
                <h4>Tel:</h4>
                <p>${empresa.telefono}</p>
                <h4>Email:</h4>
                <p>${empresa.email}</p>
                <h4>Ubicación: </h4>
                <p>${empresa.direccion}</p>
                <div class="contenedorBoton">
                <a class="botonContactar" href="mailto:${empresa.email}">CONTACTAR</a>
                </div>
               
        
                <div class="redes">
                </div>

                 
                `;
            }else{


                // tituloEmpresa.innerHTML= empresa.nombre;
                divCuadroEmpresa.innerHTML += `
                <h2>${empresa.nombre}</h2>
                <h5 class="mb-3">Miembro representante: </h5>
                <div class="row align-items-center mb-3 representante">
                  <div class="col-2"><img width="65" src="src/img/${empresa.url_foto_rep}" alt=""></div>
                  <div class="col-7"><p class="mb-0">${empresa.nombre_rep}</p>
                  <p>${empresa.puesto_rep}</p>
                  </div>
                </div>
                <h4>Tel:</h4>
                <p>${empresa.telefono}</p>
                <h4>Email:</h4>
                <p>${empresa.email}</p>
                <h4>Ubicación: </h4>
                <p>${empresa.direccion}</p>
                <h4>Dirección web: </h4>
                 <a class="" href="${empresa.direccion_web}"><p>${empresa.direccion_web}</p></a>
                <div class="contenedorBoton">
                <a class="botonContactar" href="mailto:${empresa.email}">CONTACTAR</a>
                </div>
               
        
                <div class="redes">
                </div>

                 
                `;
            }
        
     
        if(empresa.facebook == null ){
            document.querySelector('.redes').innerHTML+=``

        }else{
            document.querySelector('.redes').innerHTML+=`<a href="${empresa.facebook}"><img src="src/img/fb.png"></a>`

        }
        if(empresa.youtube == null ){
            document.querySelector('.redes').innerHTML+=``

            
        }else{
            document.querySelector('.redes').innerHTML+=`<a href="${empresa.youtube}"><img src="src/img/ico-yt.png"></a>`

        }
        if(empresa.instagram == null ){
            document.querySelector('.redes').innerHTML+=``

            
        }else{
            document.querySelector('.redes').innerHTML+=`<a href="${empresa.instagram}"><img src="src/img/it.png"></a>`

        }
        if(empresa.twitter == null ){
            document.querySelector('.redes').innerHTML+=``  
        }else{
            document.querySelector('.redes').innerHTML+=`<a href="${empresa.twitter}"><img src="src/img/tw.png"></a>`

        }

        if(empresa.whatsapp == null ){
            document.querySelector('.redes').innerHTML+=``  
        }else{
            document.querySelector('.redes').innerHTML+=`<a href="https://wa.me/52${empresa.whatsapp}"><img src="src/img/ico-wa.png"></a>`

        }

        if(empresa.url_higherlogic == null ){
            document.querySelector('.redes').innerHTML+=``  
        }else{
            document.querySelector('.redes').innerHTML+=`<a href="${empresa.url_higherlogic}"><img src="src/img/hl.png"></a>`

        }

            
        const peticion2 = await fetch('class/productosEmpresa.php',{
            method: 'POST',
            body: data
        })
           const resp2 = await peticion2.json();
    
           const contGaleria = document.querySelector('.contenedorImgProducto');
    
           let i = 1;
    
           if(resp2 === 'vacio'){
    
            // console.log(resp2);
    
            logoEmpresa.style.justifyContent = 'center';
            logoEmpresa.removeChild(contGaleria);
    
           }else{
            for ( [index,{url_producto}] of resp2.entries()){
    
                // console.log(index,producto);
        
                    contGaleria.innerHTML+=`
                   
        
                <a href="src/img/${url_producto}"><img src="src/img/${url_producto}"  title="Producto ${index+1}"/></a>
        
                    `;
        
                
               }
           }
           if(empresa.video_url !== null){
            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
            var match = empresa.video_url.match(regExp);
            let url_video_final = (match&&match[7].length==11)? match[7] : false;
            video.innerHTML= `<iframe  src="//www.youtube.com/embed/${url_video_final}" frameborder="0" allowfullscreen></iframe>`;  
           }
          
            // console.log(url_video_final);
        //    video.innerHTML =`<object width="700" height="350" data="https://www.youtube.com/watch?v=1j_XvebOg4c&list=RD1j_XvebOg4c&start_radio=1" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/watch?v=1j_XvebOg4c&list=RD1j_XvebOg4c&start_radio=1" /></object>`;
        
        if(empresa.catalogo_url!== null ){
            catalogo.innerHTML= `<div class="col-12">
            <h4>Catalogo de productos</h4>
            <div class="col-12 d-flex align-items-center justify-content-center">
             <a href="${empresa.catalogo_url}" class="botonCatalogo">Ver catálogo completo</a>
             </div
          </div`;
           }
          
        }if(empresa.miembro === "0"){
            logoEmpresa.style.justifyContent="center";



            if(empresa.direccion_web === null){

                // tituloEmpresa.innerHTML= empresa.nombre;
                divCuadroEmpresa.innerHTML += `
                <h2>Empresa: ${empresa.nombre}</h2>
                <h4>Pais:</h4>
                <p>${empresa.pais}</p>
                <h4>Ciudad:</h4>
                <p>${empresa.ciudad}</p>
                <h4>Representante:</h4>
                <p>${empresa.nombre_rep}</p>
             
                 
                `;
            }else{
                // tituloEmpresa.innerHTML= empresa.nombre;
                divCuadroEmpresa.innerHTML += `
                <h2>Empresa: ${empresa.nombre}</h2>
                <h4>Pais:</h4>
                <p>${empresa.pais}</p>
                <h4>Ciudad:</h4>
                <p>${empresa.ciudad}</p>
                <h4>Representante:</h4>
                <p>${empresa.nombre_rep}</p>
                 
                `;
            }
          

        }


        text_desc.innerHTML = longTextoFormat;
        


        let contIconosCat = document.querySelector('.iconosCat')

        
    
        const peticion3 = await fetch('class/iconosCategoriaEmpresa.php',{
            method: 'POST',
            body : data
        })
           const respIconoCat = await peticion3.json();
           console.log(respIconoCat);

           for(iconos of respIconoCat){
            contIconosCat.innerHTML +=`
           
           <a href="categorias.php?id_cat=${iconos.id_cat}"><img src="src/img/${iconos.url_img}" alt=""></a>

           
           `;

           }

      
           
           ;

    
        

        

        //  console.log(empresa);
     }





    

       







    const data_mostrar = new FormData();
    data_mostrar.append('mostrar', 3)

    const peticion3 = await fetch('class/imgDestacada.php',{
        method: 'POST',
        body : data_mostrar
    })
       const resp3 = await peticion3.json();
       console.log(resp3);



       for ( imgDestacada of resp3){
           console.log(imgDestacada);
           contImgDestacados.innerHTML+=`

           <a href="empresa.php?id=${imgDestacada.id}">
           
           <img src="src/img/${imgDestacada.logo_url}" alt="">


           </a>
           `
          
       }
    




       




       var lightbox = $('.gallery a').simpleLightbox({ /* options */ 
            'nav' : true,
            'captions' : true,
            'history' : false
    });



 
}

listarInfoEmpresa();