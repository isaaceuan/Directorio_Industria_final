const validar= ()=>{

//  DATOS EMPRESA
    let nombre= document.getElementById("nombre").value;
    let direccion= document.getElementById("direccion").value;
    // let email= document.getElementById("email").value;
    // let telefono= document.getElementById("telefono").value;
    // let direccionweb= document.getElementById("direccionweb").value;
    // let informacion= document.getElementById("informacion").value;
    // let whatsapp= document.getElementById("whatsapp").value;
    // let videourl= document.getElementById("videourl").value;
    // let catalogourl= document.getElementById("catalogourl").value;
    let pais= document.getElementById("pais").value;
    let ciudad= document.getElementById("ciudad").value;
    let lada= document.getElementById("lada").value;
    let telE= document.getElementById("tel_e").value;

    // let file= document.getElementById("file").value;
    // let file2= document.getElementById("file2").value;
    // let file3= document.getElementById("file3").value;
// // DATOS REPRESENTANTE
    let nombreRep= document.getElementById("nom-rep").value;
    let telRep = document.getElementById("tele-rep").value;
    let puestoRep = document.getElementById("puesto-rep").value;
    let correoRep = document.getElementById("correo-rep").value;
    let checkbox = document.querySelectorAll('input[type=checkbox]:checked');



    //  let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    //  let nombreC =/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
    // let imgProducto = [];
    // $("input[name='archivo[]']").each(function() {
    //   imgProducto.push($(this).val());
    // });
    // let nombreProducto = [];
    // $("input[name='nom-prod[]']").each(function() {
    //   nombreProducto.push($(this).val());
    // });
    // let descProducto = [];
    // $("textarea[name='desc-prod[]']").each(function() {
    //   descProducto.push($(this).val());
    // });
    //  var valor = true;
  




    if (nombre ==""
    ||ciudad==""||pais==""||direccion==""||lada==""||telE==""||nombreRep==""||telRep==""
    ||puestoRep==""||correoRep==""||checkbox.length==0) {
      // console.log(descProducto);
        Swal.fire({ title: "Campos obligatorios marcados con *",
        text: "Porfavor completa de manera correcta los campos",
        icon: "error",customClass: "swal-wide",}).then(okay => {
          if (okay) {

         }
       });
       return false;

    }



    }

    const validar_premium = ()=>{

      //  DATOS EMPRESA
      let nombre= document.getElementById("nombre1").value;
      let direccion= document.getElementById("direccion1").value;
      let email= document.getElementById("email1").value;
      let telefono= document.getElementById("telefono1").value;
      let informacion= document.getElementById("informacion1").value;
      let pais= document.getElementById("pais1").value;
      let ciudad= document.getElementById("ciudad1").value;
      let file= document.getElementById("files1").value;
      let file2= document.getElementById("files2").value;
  // // DATOS REPRESENTANTE
      let nombreRep= document.getElementById("nom-rep1").value;
      let telRep = document.getElementById("tele-rep1").value;
      let puestoRep = document.getElementById("puesto-rep1").value;
      let correoRep = document.getElementById("correo-rep1").value;
      let checkbox = document.querySelectorAll('input[type=checkbox]:checked');
  
  
  
      //  let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
      //  let nombreC =/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
      let imgProducto = [];
      $("input[name='archivo1[]']").each(function() {
        imgProducto.push($(this).val());
      });
      let nombreProducto = [];
      $("input[name='nom-prod1[]']").each(function() {
        nombreProducto.push($(this).val());
      });
      // let descProducto = [];
      // $("textarea[name='desc-prod[]']").each(function() {
      //   descProducto.push($(this).val());
      // });
      //  var valor = true;
    
  
  
  
  
      if (nombre ==""||direccion==""||email==""||telefono==""||informacion==""
      ||pais==""||ciudad==""||file==""||file2==""||nombreRep==""||telRep==""
      ||puestoRep==""||correoRep==""||checkbox.length==0  ||imgProducto.includes("")||nombreProducto.includes("")) {
        // console.log(descProducto);
          Swal.fire({ title: "Campos obligatorios marcados con *",
          text: "Porfavor completa de manera correcta los campos",
          icon: "error",customClass: "swal-wide",}).then(okay => {
            if (okay) {
  
           }
         });
         return false;
  
      }

      
      
          }
          
    

const ValidateSingleInput= (img)=> {
  let validarExtension = [".jpg", ".jpeg",".png"];    

    if (img.type == "file") {
        let nombreArchivo = img.value;
         if (nombreArchivo.length > 0) {
            let blnValid = false;
            for (let j = 0; j < validarExtension.length; j++) {
                let extensionArchivo = validarExtension[j];
                if (nombreArchivo.substr(nombreArchivo.length - extensionArchivo.length, extensionArchivo.length).toLowerCase() == extensionArchivo.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
               
              Swal.fire({ title: "Campo inválido",
                  text: "Formatos admitidos: .png .jpeg .jpg",
                  icon: "warning",customClass: "swal-wide",}).then(okay => {
                    if (okay) {
                    //  window.location.href = "../index.php";
                   }
                 });
                 img.value = "";
                return false;
            }
        }
    }
    return true;
}

  

const validarurl= (url)=>{
    let string = url.value;

    if (string==""){
      url.value=string;
      return url;
    }
    
       if (!~string.indexOf("http")) {
      string = "http://" + string;
      url.value = string;
      console.log(string)
      return url;
       

}
}