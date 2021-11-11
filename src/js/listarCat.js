const listarCatImg = async() =>{
    const data = new FormData();
    data.append('membresia','algo' );


    let divCat= document.querySelector(".iconos_cat");


      const peticion = await fetch('class/listarIconosCat.php',{
      method: 'POST',
      body: data
  })
     const resp = await peticion.json();
    //  console.log(resp);

     for(cat of resp){
        //  console.log(cat);

         const fila = document.createElement("div");
         fila.classList.add("categorias-home__item");

         // La celda del nombre
         const link = document.createElement("a");
         link.href = `categorias.php?id_cat=${cat.id_cat}`;
         link.classList.add('link_cat');
       

         fila.appendChild(link);


         const texto = document.createElement("figcaption");
         texto.innerText = cat.categoria;
         link.appendChild(texto);



         const img = document.createElement("img");
         img.src=`src/img/${cat.url_img}`;
         img.style.setProperty("width", "40px");
         img.style.setProperty("height", "40px"); 

         link.appendChild(img);

         divCat.appendChild(fila);




        //  let contenido = `
         
        //  <div class="col categorias-home__item">
        // <a href="categorias.html?id_cat=${cat.id_cat}">
        // <img src="src/img/${cat.url_img}" alt="">
        //     </a>
        // </div>
         
        //  `;

        //  divCat.innerHTML += contenido;


     }
     let filas = document.querySelector('.categorias-home__item');
     const textoCat = document.createElement('h3');
     textoCat.classList.add("nuestrascat");
     textoCat.innerText='Nuestras categorías';

     const hr = document.createElement('hr');
     hr.classList.add("hrresponsive");

     filas.appendChild(textoCat);
     filas.appendChild(hr);


}
listarCatImg();