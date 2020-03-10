
const header = document.querySelector('.header-nav'); 
const btnUp = document.createElement('div')
btnUp.setAttribute('class', 'btn-up');
btnUp.id = 'btn-up'
btnUp.style.fontSize = '2em'
btnUp.style.opacity = '0'
btnUp.classList.add('color-savo')
btnUp.classList.add('d-flex')
btnUp.classList.add('justify-content-center')
btnUp.classList.add('align-items-center')
btnUp.innerHTML = '<i class="fas fa-arrow-up"></i>'
document.body.appendChild(btnUp)

let posicionScroll = 0

//Control de botón up
let controlBtnUp = () => {

    intervalo = setInterval(function() {

        posicionScroll -= 50; 

        if(posicionScroll === header.offsetTop || posicionScroll < 0) {
            posicionScroll = 0; 
            clearInterval(intervalo)
        }
        window.scrollTo(0, posicionScroll);

    }, 20)
}

window.addEventListener('scroll', (e) => {
    //Control de botón up
    posicionScroll = window.pageYOffset;
    
    //Control del header
    
    if(scrollY > 150) {
        // header.style.backgroundColor = 'rgba(255, 255, 255, .5)'
        
        btnUp.style.cursor = 'pointer'
        btnUp.style.opacity = '1'
        btnUp.addEventListener('click', controlBtnUp)
    }else { 
        // header.style.backgroundColor = 'rgba(255, 255, 255, 1)'
        
        
        btnUp.style.opacity = '0'
        btnUp.style.cursor = 'default'
        btnUp.removeEventListener('click', controlBtnUp)
    }

//     if(document.querySelector('.bg-sistema') != null) {

//         if( scrollY >= (document.querySelector('.bg-sistema').offsetTop - 150) ) {
     
//             gsap.to(".pantallas", {opacity: 1, duration: 2, x: 50});
//         }
//     }
//     if(document.querySelector('.bg-somos') != null) {

//         if( scrollY >= (document.querySelector('.bg-somos').offsetTop - 100) ) {
             
//             gsap.to(".animate-text-3", {opacity: 1, duration: 2, scale: 1});
//         }
//     }

//     /*Animaciones de Productos */

//     if(document.querySelector('.animate-sec-1') != null) {

//         if( scrollY >= (document.querySelector('.animate-sec-1').offsetTop - 300) ) {
             
//             gsap.to(".animate-img-2", {opacity: 1, duration: 1, y:20});
//         }
//     }

//     if(document.querySelector('.animate-sec-2') != null) {

//         if( scrollY >= (document.querySelector('.animate-sec-2').offsetTop - 300) ) {
             
//             gsap.to(".animate-img-3", {opacity: 1, duration: 1, x:100});
//         }
//     }

//     if(document.querySelector('.animate-sec-3') != null) {

//         if( scrollY >= (document.querySelector('.animate-sec-3').offsetTop - 300) ) {
             
//             gsap.to(".animate-img-4", {opacity: 1, duration: 1, x:20});
//         }
//     }
//     if(document.querySelector('.animate-sec-4') != null) {

//         if( scrollY >= (document.querySelector('.animate-sec-4').offsetTop - 300) ) {
             
//             gsap.to(".animate-img-5", {opacity: 1, duration: 1, scale:.8, x:-50});
//         }
//     }
    
 

})



let clases = ['color-novedades', 'color-medicalclin', 'color-gc', 'color-acg']
let ids = ['novedades', 'medicalclin', 'gc', 'acg']
if(document.querySelector('.list-group') != null) {
    
    
    //Detener la llamada al click
    // for (const el of document.getElementById('list-tab').children) {
    //     el.style.cursor = 'default'
    //     el.addEventListener('click', e => {
    //         e.preventDefault()
    //         e.stopPropagation()
    //     })
        
    // }


    document.querySelector('.list-group').children[0].children[0].classList.add(clases[0])
    $('#list-tab a[href="#'+ids[0]+'"]').tab('show') 
    let count = 0; 
    
    
   let verificar = false
   var myVar = setInterval(myTimer, 8000);

    function myTimer() {
        count++
        
        if(count == ids.length ) {
            count = 0
        }
    
        $('#list-tab a[href="#'+ids[count]+'"]').tab('show') 
        
        // document.querySelector('.list-group').children[count].children[0].classList.add(clases[count])
     
        // if(count > 0) {
                
        //     document.querySelector('.list-group').children[count-1].children[0].classList.remove(clases[count-1])
        // }
    
        // if(count == 0) {
        //     document.querySelector('.list-group').children[ids.length-1].children[0].classList.remove(clases[ids.length-1])
        // }

        if(count == 1) {
            // el.children[0].classList.add(clases[1])
            document.querySelector('#medicalclin-list').children[0].classList.add(clases[1]);
                
            document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
            document.querySelector('#gc-list').children[0].classList.remove(clases[2]);
            document.querySelector('#acg-list').children[0].classList.remove(clases[3]);

        }else if(count == 2) {
            document.querySelector('#gc-list').children[0].classList.add(clases[2])
                
            document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
            document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
            document.querySelector('#acg-list').children[0].classList.remove(clases[3]);

        }else if(count == 3) {

            document.querySelector('#acg-list').children[0].classList.add(clases[3])
                
            document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
            document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
            document.querySelector('#gc-list').children[0].classList.remove(clases[2]);

        }else {
            document.querySelector('#novedades-list').children[0].classList.add(clases[0])
                
            document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
            document.querySelector('#gc-list').children[0].classList.remove(clases[2]);
            document.querySelector('#acg-list').children[0].classList.remove(clases[3]);
        }
        
    }

    for (const el of document.getElementById('list-tab').children) {

        el.addEventListener('click', function(e) {

            
            if(e.target.parentNode.parentNode.id == 'novedades-list') {
                el.children[0].classList.add(clases[0])
                
                document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
                document.querySelector('#gc-list').children[0].classList.remove(clases[2]);
                document.querySelector('#acg-list').children[0].classList.remove(clases[3]);
                
            }else if(e.target.parentNode.parentNode.id == 'medicalclin-list') {
                el.children[0].classList.add(clases[1])
                
                document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
                document.querySelector('#gc-list').children[0].classList.remove(clases[2]);
                document.querySelector('#acg-list').children[0].classList.remove(clases[3]);
            }else if(e.target.parentNode.parentNode.id == 'gc-list') {
                el.children[0].classList.add(clases[2])
                
                document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
                document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
                document.querySelector('#acg-list').children[0].classList.remove(clases[3]);
            }else {

                el.children[0].classList.add(clases[3])
                
                document.querySelector('#novedades-list').children[0].classList.remove(clases[0]);
                document.querySelector('#medicalclin-list').children[0].classList.remove(clases[1]);
                document.querySelector('#gc-list').children[0].classList.remove(clases[2]);
            }

            myStopFunction()
        })
        
  
    }


    function myStopFunction() {

        if(verificar == false) {
            
            clearInterval(myVar);
            //Reiniciar la cuenta luego de los x segundos
            setTimeout(function(){
                // count = 0
                myVar = setInterval(myTimer, 8000);
            },10000)

        }
    }

}


/*Animación de la visión y misión de inicio */
let misionVisionTitulo = document.getElementById('mision-vision'); 
let misionVisionTexto = document.getElementById('mision-vision-texto'); 

let misionVisionTextos = {
    
    'vision': '“Ser líderes del sector como empresa de servicios profesionales a particulares y empresas con un enfoque vertical entendiendo y compartiendo el Core Business del cliente”.', 
    'mision': '“Satisfacer las necesidades de nuestros clientes de una forma integral alcanzando la excelencia en el servicio”.', 

}
let counter = 0

if(misionVisionTexto != null || misionVisionTitulo != null) {

    function animarMV() {

        
        counter++
        if(counter == 2 ) {
            counter = 0
        }
    
        if(counter == 0) {
            misionVisionTitulo.textContent = 'Visión'
            misionVisionTexto.textContent = misionVisionTextos.vision
            
        }else {
            misionVisionTitulo.textContent = 'Misión'
            misionVisionTexto.textContent = misionVisionTextos.mision
        }
        gsap.from("#mision-vision", {opacity: 0, duration: 3, y: -50});
        gsap.from("#mision-vision-texto", {opacity: 0, duration: 3, y: 50});
        
        
    }

    let animationMV = setInterval(animarMV, 10000)
    function detener() {
        clearInterval(animationMV); 
    }

    function handleVisibilityChangeMV() {
        
        if (document.hidden) {
            
            detener()

        }else {
            
        animationMV = setInterval(animarMV, 10000)
            
        }

    }
    
    document.addEventListener("visibilitychange", handleVisibilityChangeMV);
}




/*Animacion de novedades */

if(document.getElementById('novedades-page') != null ) {

    gsap.ticker.lagSmoothing(0);
    let tn = document.getElementById('titulo-novedades'); 
    let txtn = document.getElementById('texto-novedades'); 
    let imgn = document.getElementById('img-novedades'); 
    let counterNovedades = 0

    const textosNovedades = {
        
        'redes': 'Cableado Estructurado TCP /IP. <br> Cableado de Fibra Óptica <br> Voz sobe IP <br> Cámaras de Seguridad', 
        'equipos': 'Servidores (HP – IBM) <br> Comunicaciones (redes- Voz/ip) <br> Impresores. <br> Estaciones de trabajo. <br> UPS – Power House <br> Equipos de comunicaciones. <br> Switch <br> Rack <br> Camara de seguridad <br> DVR. <br> Toner <br> Tintas <br> Cintas', 
        'web': 'Desarrollo de Pagina Web <br> Desarollos de APP <br> Desarrollo de portales Web <br> Desarrollo de Aplicaciones <br> Alojamiento Web <br> Servidores dedicados y VPS. <br> Registro de Dominio', 
        'servicios': 'Configuración de servidores <br> Configuraciones de PC <br> Proyecto de seguridad<br>Proyecto de Dominio <br> Mantenimiento de Servidores', 
        'productos': 'Microsoft<br>Siscan<br>Cisco <br>AudioCodes<br>Policom<br>PlanTronics<br>Trendnet<br>IBM<br>Panduit<br>Hubell<br>HP<br>SAMSUNG <br>EPSON'

    }

    const titulosNovedades = {

        'redes': 'Redes', 
        'equipos': 'Equipos', 
        'web': 'Servicios Web', 
        'servicios': 'Servicios Varios', 
        'productos': 'Marcas y Productos'
        
    }

    const rutasImg = {
        'redes': 'vistas/img/network.png', 
        'equipos': 'vistas/img/switch.png', 
        'web': 'vistas/img/savo.png', 
        'servicios': 'vistas/img/servicios.jpg', 
        'productos': 'vistas/img/marcas.png'
    }

    function startSimulation() {

            counterNovedades++
        
            if(counterNovedades == 5 ) {
                counterNovedades = 0
            }
        
        
            if(counterNovedades == 0) {
                tn.innerHTML = titulosNovedades.redes
                txtn.innerHTML = textosNovedades.redes
                if(imgn.getAttribute('style')) {
        
                    imgn.removeAttribute('style')
                }
        
                imgn.src = rutasImg.redes
            
            }else if(counterNovedades == 1) {
                tn.innerHTML = titulosNovedades.equipos
                txtn.innerHTML = textosNovedades.equipos
                imgn.removeAttribute('style')
                imgn.src = rutasImg.equipos
            }else if(counterNovedades == 2) {
                tn.innerHTML = titulosNovedades.web
                txtn.innerHTML = textosNovedades.web
                imgn.src = rutasImg.web
                imgn.style.width = '30em'
                imgn.style.height = '20em'
            }else if(counterNovedades == 3) {
                tn.innerHTML = titulosNovedades.servicios
                txtn.innerHTML = textosNovedades.servicios
                imgn.removeAttribute('style')
                imgn.src = rutasImg.servicios
        
            }else{
                tn.innerHTML = titulosNovedades.productos
                txtn.innerHTML = textosNovedades.productos
                imgn.removeAttribute('style')
                imgn.src = rutasImg.productos
            }

        gsap.from("#titulo-novedades", {opacity: 0, duration: 3, y: -50});
        gsap.from("#texto-novedades", {opacity: 0, duration: 3, y: 50});
        gsap.from("#img-novedades", {opacity: 0, delay: 1, duration: 2, scale: 1});
    }

    let animation = setInterval(startSimulation, 10000)
    function detener() {
        clearInterval(animation); 
    }

    function handleVisibilityChange() {
        
        if (document.hidden) {
            
            detener()

        }else {
            
        animation = setInterval(startSimulation, 10000)
            
        }

    }
    
    document.addEventListener("visibilitychange", handleVisibilityChange);

}

/*Animacion de medicalclin */

if(document.getElementById('medicalclin-page') != null) {

    gsap.ticker.lagSmoothing(0);
    let tmc = document.getElementById('titulo-mc'); 
    let txtmc = document.getElementById('texto-mc'); 
    let imgmc = document.getElementById('img-mc'); 

    let counterMC = 0

    const textosMC = {
        
        'emergencias': `Resucitadores <br> Bombas de Infusión <br> Ventiladores<br> Monitores Multiparametros <br> Laringoscopios <br>Desfibriladores`, 
        'cirugia': `Electrocirugía <br> Maquina de Anestesia <br> Incubadoras <br> Video Colposcopio<br> Lámparas de Cirugía <br>Rayos X`, 
        'dispositivos': `Jeringas y agujas <br> Tapabocas <br> Guantes T. <br> Respiratoria <br> Geles conductores <br> Sondas y Otros`, 
        'liquidos': `Cloruro de Sodio <br> Dextrosa <br> Lactato Ringer <br> Travad Enema <br> Agua Estéril <br>Bolsas Baxter`, 
        'equipos': `Microscópios<br> Pipetas <br> Autoclaves<br> Balanzas analíticas`, 
        'laboratorio': `Tubos<br> Gradillas <br> Centrifugas <br> Estufas <br> Agitadores<br> Baño Serológico`

        
    }

    const titulosMC = {

        'emergencias': 'Emergencias', 
        'cirugia': 'Cirugías - Recuperación', 
        'dispositivos': 'Descartables - Dispositivos', 
        'liquidos': 'Líquidos - Soluciones',
        'equipos': 'Equipos de Laboratorio',
        'laboratorio': 'Laboratorio'
        
    }

    const rutasMC = {

        'emergencias': 'vistas/img/desfibrilador.jpg', 
        'cirugia': 'vistas/img/lampara.jpg', 
        'dispositivos': 'vistas/img/jeringa.png', 
        'liquidos': 'vistas/img/solucion.jpg',
        'equipos': 'vistas/img/microscopio.jpg',
        'laboratorio': 'vistas/img/tubo.jpg'
    }

      function animarMC() {

            counterMC++
        
            if(counterMC == 6 ) {
                counterMC = 0
            }
        
        
            if(counterMC == 0) {
                tmc.innerHTML = titulosMC.emergencias
                txtmc.innerHTML = textosMC.emergencias        
                imgmc.src = rutasMC.emergencias
                imgmc.alt = 'desfibrilador'
                imgmc.removeAttribute('style')
            }else if(counterMC == 1) {

                tmc.innerHTML = titulosMC.cirugia
                txtmc.innerHTML = textosMC.cirugia        
                imgmc.src = rutasMC.cirugia
                imgmc.alt = 'lampara'
                imgmc.removeAttribute('style')
            }else if(counterMC == 2) {
                tmc.innerHTML = titulosMC.dispositivos
                txtmc.innerHTML = textosMC.dispositivos        
                imgmc.src = rutasMC.dispositivos
                imgmc.alt = 'jeringa'
                imgmc.style.width = '15em'
                imgmc.style.height = '15em'
               
            }else if(counterMC == 3) {
                tmc.innerHTML = titulosMC.liquidos
                txtmc.innerHTML = textosMC.liquidos        
                imgmc.src = rutasMC.liquidos
                imgmc.alt = 'soluciones'
                imgmc.style.width = '5em'
                imgmc.style.height = '5em'
                imgmc.removeAttribute('style')
            
            }else if(counterMC == 4) {
                tmc.innerHTML = titulosMC.laboratorio
                txtmc.innerHTML = textosMC.laboratorio        
                imgmc.src = rutasMC.laboratorio
                imgmc.alt = 'tubos'
            
                imgmc.removeAttribute('style')
            }else  {
                tmc.innerHTML = titulosMC.equipos
                txtmc.innerHTML = textosMC.equipos        
                imgmc.src = rutasMC.equipos
                imgmc.alt = 'miscroscopio'
                imgmc.removeAttribute('style')
            }

        gsap.from("#titulo-mc", {opacity: 0, duration: 3, y: -50});
        gsap.from("#texto-mc", {opacity: 0, duration: 3, y: 50});
        gsap.from("#img-mc", {opacity: 0, delay: 1, duration: 2, scale: 1});
    }

    let animationMC = setInterval(animarMC, 10000)
    function detenerMC() {
        clearInterval(animationMC); 
    }

    function handleVisibilityChangeMC() {
        
        if (document.hidden) {
            
            detenerMC()

        }else {
            
        animationMC = setInterval(animarMC, 10000)
            
        }

    }

    document.addEventListener("visibilitychange", handleVisibilityChangeMC);


}

/*Animacion de InversionesGC */

if(document.getElementById('gc-page') != null) {

    gsap.ticker.lagSmoothing(0);

    let tgc = document.getElementById('titulo-gc'); 
    let txtgc = document.getElementById('texto-gc'); 
    let imggc = document.getElementById('img-gc'); 

    let counterGC = 0

    const textosGC = {
        
        'equipos': ' Protección auditiva. <br> Protección para ojos.<br>Protección para manos. <br> Protección para pies. <br> Para el sistema respiratorio. <br> Para la cabeza.', 
        'materiales': 'Galpones. <br> Granjas . <br> Fincas. <br> Locales. <br> Oficinas. <br> Baños. <br> Techos.', 
        'repuestos': 'Tractores de arrastre. <br> Carretillas retractiles. <br> Carretillas apiladoras. <br> Recogepedido medio y alto. <br> Recogepedido Bajo nivel. <br> Apiladores. <br> Traspaleta Manuales. <br> Traspaleta Electrica. <br> Montacargas.', 
        'otros': `Productos de Control: Contactores, Reles, Pulsadores, Selectores y Señalización. 
        <br> Cutting Tools For Precision Machining <br> Sensores y Detectores: Fotoeléctricos, Inductivos, 
        Capacitivos, laser, Cromáticos. <br> Measuring Tools <br> Material Handling <br> Drivers: Variadores 
        de Velocidad (AC/DC). <br> Plant & Safety <br> Automation: PLC & Controladores de Procesos <br> Power Tools. 
        <br> Chains Drives & Sprockets <br> Interfaces Hombre-Máquina`
        
    }

    const titulosGC = {

        'equipos': 'Equipos y materiales de EPP', 
        'materiales': 'Materiales de construcción', 
        'repuestos': 'Repuestos nacionales e importados para almacenes', 
        'otros': 'Repuestos de línea de producción. (Nacional e Importado)'
        
    }

    const rutasGC = {

        'equipos': 'vistas/img/tapaboca.png', 
        'materiales': 'vistas/img/construccion.jpg', 
        'repuestos': 'vistas/img/tractor.png', 
        'otros': 'vistas/img/contactor.png'
        
    }

      function animarGC() {

            counterGC++
        
            if(counterGC == 4 ) {
                counterGC = 0
            }
        
        
            if(counterGC == 0) {
                tgc.innerHTML = titulosGC.equipos
                txtgc.innerHTML = textosGC.equipos        
                imggc.src = rutasGC.equipos
            
            }else if(counterGC == 1) {

                tgc.innerHTML = titulosGC.materiales
                txtgc.innerHTML = textosGC.materiales        
                imggc.src = rutasGC.materiales

            }else if(counterGC == 2) {
                tgc.innerHTML = titulosGC.repuestos
                txtgc.innerHTML = textosGC.repuestos        
                imggc.src = rutasGC.repuestos
            }else  {
                tgc.innerHTML = titulosGC.otros
                txtgc.innerHTML = textosGC.otros        
                imggc.src = rutasGC.otros
        
            }

        gsap.from("#titulo-gc", {opacity: 0, duration: 3, y: -50});
        gsap.from("#texto-gc", {opacity: 0, duration: 3, y: 50});
        gsap.from("#img-gc", {opacity: 0, delay: 1, duration: 2, scale: 1});
    }

    let animationGC = setInterval(animarGC, 10000)
    function detenerGC() {
        clearInterval(animationGC); 
    }

    function handleVisibilityChangeGC() {
        
        if (document.hidden) {
            
            detenerGC()

        }else {
            
        animationMC = setInterval(animarGC, 10000)
            
        }

    }

    document.addEventListener("visibilitychange", handleVisibilityChangeGC);


}

/*Animacion de ACG */

if(document.getElementById('acg-page') != null) {

    gsap.ticker.lagSmoothing(0);

    let tacg = document.getElementById('titulo-acg'); 
    let txtacg = document.getElementById('texto-acg'); 
    let imgacg = document.getElementById('img-acg'); 

    let counterACG = 0

    const textosACG = {
        
        'marcav': `Chevrolet <br> Ford <br> Mitsubishi <br> Hyundai <br> Toyota <br> Honda 
        Renault <br> Wolkswagen <br> Chery <br> Dongfeng <br> Jeep <br> Isuzu <br> Dodge <br> Chrysler <br> Mazda <br> Nissan `,

        'marcap': `MOPAR <br> PARTS-MAL <br> TOYO <br> METALCAR <br> MOTORCRAFT <br> ISUZU <br> FORDGENUINE <br> ACCEL <br> 
        AYD <br> ARDECA <br> ACDELCO <br> BETA <br> BARMONCA <br> 
        CAFLEX <br> CIC <br> CHAMPIOM <br> MAMUSA `
        
    }

    const titulosACG = {

        'marcav': 'Marca (Vehículos Livianos)', 
        'marcap': 'Repuestos'
        
    }

    const rutasACG = {

        'marcav': 'vistas/img/toyota.png', 
        'marcap': 'vistas/img/mamusa.jpg'
        
    }

      function animarACG() {

            counterACG++
        
            if(counterACG == 2 ) {
                counterACG = 0
            }
        
            if(counterACG == 0) {
                tacg.innerHTML = titulosACG.marcav
                txtacg.innerHTML = textosACG.marcav   
                imgacg.src = rutasACG.marcav
                imgacg.style.width = '10em'        
                imgacg.style.height = '10em'        
                
            }else {
                
                imgacg.removeAttribute('style')        
                tacg.innerHTML = titulosACG.marcap
                txtacg.innerHTML = textosACG.marcap  
            
                imgacg.src = rutasACG.marcap

            }

        gsap.from("#titulo-acg", {opacity: 0, duration: 3, y: -50});
        gsap.from("#texto-acg", {opacity: 0, duration: 3, y: 50});
        gsap.from("#img-acg", {opacity: 0, delay: 1, duration: 2, scale: 1});
    }

    let animationACG = setInterval(animarACG, 10000)
    function detenerACG() {
        clearInterval(animationACG); 
    }

    function handleVisibilityChangeACG() {
        
        if (document.hidden) {
            
            detenerACG()

        }else {
            
        animationACG = setInterval(animarACG, 10000)
            
        }

    }

    document.addEventListener("visibilitychange", handleVisibilityChangeACG);


}

if(document.getElementById('acg-page-pesados') != null) {

    gsap.ticker.lagSmoothing(0);

    let tacgp = document.getElementById('titulo-acgp'); 
    let txtacgp = document.getElementById('texto-acgp'); 
    let imgacgp = document.getElementById('img-acgp'); 

    let counterACGP = 0

    const textosACGP = {
        
        'marcav': `Ford <br> Chevrolet <br> Mitsubishi <br> Mack <br> Toyota <br> JAC 
        Iveco <br> Dongfeng `, 

        'marcap': `MACKTRUCK <br> PAI <br> ZEXEL <br> ISUZU <br> MOTORCRAFT <br> ACDELCO <br> CATERPILLAR <br> CTP <br> 
        TRW <br> F-DIESEL <br> TIMKEN <br> SKF <br> GMGENUINE <br> NYC <br> FORTPRO`
        
    }

    const titulosACGP = {
        'marcav': 'Marcas (Vehículos Pesados)', 
        'marcap': 'Repuestos'
    }

    const rutasACGP = {
        'marcav': 'vistas/img/mack.png', 
        'marcap': 'vistas/img/alternador.jpg'
    }

      function animarACGP() {

            counterACGP++
        
            if(counterACGP == 2 ) {
                counterACGP = 0
            }
        
            if(counterACGP == 0) {

                tacgp.innerHTML = titulosACGP.marcav
                txtacgp.innerHTML = textosACGP.marcav   
                imgacgp.src = rutasACGP.marcav
                imgacgp.alt = 'Mack'
                imgacgp.style.width = '25em'
                imgacgp.style.height = '20em'      
                    
            }else {
                    
                tacgp.innerHTML = titulosACGP.marcap
                txtacgp.innerHTML = textosACGP.marcap   
                imgacgp.removeAttribute('style')        
                imgacgp.src = rutasACGP.marcap
                imgacgp.alt = 'Alternador'

            }

        gsap.from("#titulo-acgp", {opacity: 0, duration: 3, y: -50});
        gsap.from("#texto-acgp", {opacity: 0, duration: 3, y: 50});
        gsap.from("#img-acgp", {opacity: 0, delay: 1, duration: 2, scale: 1});
    }

    let animationACGP = setInterval(animarACGP, 10000)
    function detenerACGP() {
        clearInterval(animationACGP); 
    }

    function handleVisibilityChangeACGP() {
        
        if (document.hidden) {
            
            detenerACGP()

        }else {
            
        animationACGP = setInterval(animarACGP, 10000)
            
        }

    }

    document.addEventListener("visibilitychange", handleVisibilityChangeACGP);


}