// ----- Obtener la URL actual ----
// El codigo para obtener la id se encuentra en front.js

// array de carreras
const carreras = [
    {
        nombre:"Profesorado en Ingles",
        duracion: "3 años",
        clasificacion: "Profesorado",
        horario:"19:00 a 23:00 hs",
        descripcion: `El Profesorado de Inglés es un programa académico 
        de tres años que se centra en la formación de profesionales en 
        la enseñanza del idioma inglés. Los estudiantes adquieren habilidades 
        pedagógicas, lingüísticas y culturales, además de profundizar en 
        metodologías de enseñanza modernas. Al completar el programa, estarán 
        preparados para desempeñarse como docentes de inglés en diversos 
        niveles educativos. La carrera ofrece una sólida base en teorías de 
        la enseñanza del idioma y proporciona a los graduados las herramientas 
        necesarias para ser educadores efectivos.
        `,
        fondo: "ingles-big.jpg"
    },
    {
        nombre:"Tecnicatura Superior en Desarrollo de Software",
        duracion: "3 años",
        clasificacion: "Tecnicatura",
        horario:"19:00 a 23:00 hs",
        descripcion: `La Tecnicatura Superior en Desarrollo de Software, 
        especializada en Desarrollo Web, es un programa de tres años que 
        forma a profesionales en programación, diseño web y gestión de 
        proyectos. Los estudiantes adquieren habilidades técnicas en 
        programación web, bases de datos y frameworks, además de aprender 
        sobre diseño web y usabilidad. Al graduarse, estarán preparados 
        para desarrollar sitios y aplicaciones web, gestionar proyectos 
        de desarrollo y mantener y optimizar sitios existentes. 
        Esta carrera ofrece una sólida base en tecnología web y prepara a 
        los graduados para roles en desarrollo y diseño web.`,
        fondo: "software-big.jpg"
    },
    {
        nombre:"Tecnicatura Superior en Administración de Sistemas y Redes",
        duracion: "3 años",
        clasificacion: "Tecnicatura",
        horario:"19:00 a 23:00 hs",
        descripcion: `La Tecnicatura Superior en Administración de Sistemas y 
        Redes es un programa de tres años diseñado para formar profesionales en 
        la gestión eficiente de sistemas informáticos y redes. Los estudiantes 
        adquieren habilidades técnicas en el mantenimiento y la configuración 
        de sistemas, así como en la administración de redes. Se enfocan en la 
        seguridad de la información, la resolución de problemas y la implementación 
        de tecnologías emergentes. Al graduarse, estarán preparados para roles en 
        administración de sistemas, soporte técnico y seguridad informática. 
        La carrera proporciona una sólida base en tecnologías de la información y 
        prepara a los graduados para enfrentar los desafíos del mundo digital.`,
        fondo: "redes-big.jpg"
    },
    {
        nombre:"Tecnicatura Superior en Administración de Empresas con Orientación a PyMES",
        duracion: "4 años",
        clasificacion: "Tecnicatura",
        horario:"19:00 a 23:00 hs",
        descripcion: `La Tecnicatura Superior en Administración de Empresas con 
        Orientación a PyMES es un programa de cuatro años que se enfoca en la 
        formación de profesionales en la gestión empresarial, con énfasis en las 
        pequeñas y medianas empresas (PyMES). Los estudiantes desarrollan habilidades 
        en áreas como contabilidad, finanzas, marketing y recursos humanos. 
        Además, adquieren conocimientos específicos para entender y abordar los 
        desafíos particulares que enfrentan las PyMES. Al graduarse, estarán 
        preparados para asumir roles de liderazgo en la administración de empresas, 
        contribuyendo al éxito y crecimiento sostenible de las organizaciones. 
        La carrera proporciona una sólida base teórica y práctica en el ámbito empresarial.`,
        fondo: "pymes-big.jpg"
    },
    {
        nombre:"Profesorado en Economía",
        duracion: "4 años",
        clasificacion: "Profesorado",
        horario:"19:00 a 23:00 hs",
        descripcion: `El Profesorado en Economía es un programa académico de cuatro 
        años que se dedica a la formación de profesionales en la enseñanza de principios 
        económicos. Los estudiantes desarrollan competencias pedagógicas y adquieren 
        conocimientos especializados en teoría económica, políticas fiscales y análisis 
        financiero. La carrera también aborda aspectos prácticos como la interpretación 
        de datos económicos y la comprensión de tendencias globales. Al completar el 
        programa, los graduados estarán preparados para ejercer como docentes de economía 
        en diferentes niveles educativos, contribuyendo al entendimiento y análisis 
        crítico de los fenómenos económicos. La carrera ofrece una base sólida tanto en 
        contenido económico como en métodos de enseñanza efectivos.`,
        fondo: "economia-big.jpg"
    },
    {
        nombre:"Profesorado en Ciencias de la Educación",
        duracion: "4 años",
        clasificacion: "Profesorado",
        horario:"19:00 a 23:00 hs",
        descripcion: `El Profesorado en Ciencias de la Educación es un programa académico 
        de cuatro años centrado en la formación de profesionales para la enseñanza y 
        comprensión de las teorías educativas. Los estudiantes exploran diversas disciplinas 
        pedagógicas y psicológicas, adquiriendo conocimientos sobre métodos de enseñanza, 
        desarrollo del aprendizaje y gestión educativa. Además, se enfocan en la aplicación 
        de tecnologías educativas y estrategias para abordar la diversidad en el aula. Al 
        completar la carrera, los graduados estarán preparados para desempeñarse como docentes 
        en diversos niveles educativos, contribuyendo al desarrollo integral de los estudiantes. 
        La formación proporciona una base sólida en teorías educativas y prácticas pedagógicas 
        innovadoras.`,
        fondo: "ciencias_educacion-big.jpg"
    },
];

// Adaptando el id a los indices del array (0-carreras.lenght());
id= id-1;
// console.log(carreras[id].nombre);

// Función para generar dinámicamente el contenido
const generarContenido = ()=> {
    const header = document.getElementById("carreras-header");
    header.style.background = `linear-gradient(rgba(5,7,8, 0.4), rgba(5,7,8, 0.4)), url(./assets/img/${carreras[id].fondo})`;
    header.style.backgroundAttachment="fixed";
    header.style.backgroundSize="cover";
    header.style.backgroundPosition="center";
    header.style.backgroundRepeat="no-repeat";

    const tituloCarrera = document.getElementById("titulo-carrera");
    tituloCarrera.textContent=carreras[id].nombre;

    // Obtener el contenedor
    const contenedor = document.getElementById("contenedorDinamico");

    // Crear elementos HTML dinámicamente
    const h2 = document.createElement("h2");
    h2.textContent = "Información sobre la carrera";

    const h5Nombre = document.createElement("h5");
    h5Nombre.innerHTML = `<span class="text-resaltado">Nombre:</span> ${carreras[id].nombre}`;

    const h5Duracion = document.createElement("h5");
    h5Duracion.innerHTML = `<span class="text-resaltado">Duración:</span> ${carreras[id].duracion}`;

    const h5Clasificacion = document.createElement("h5");
    h5Clasificacion.innerHTML = `<span class="text-resaltado">Clasificación:</span> ${carreras[id].clasificacion}`;

    const h5Horario = document.createElement("h5");
    h5Horario.innerHTML = `<span class="text-resaltado">Horario:</span> ${carreras[id].horario}`;

    const h5Descripcion = document.createElement("h5");
    h5Descripcion.innerHTML = `<span class="text-resaltado">Descripcion:</span>`;

    const pDescripcion = document.createElement("p");
    pDescripcion.textContent = carreras[id].descripcion;

    // Agregar los elementos al contenedor
    contenedor.appendChild(h2);
    contenedor.appendChild(h5Nombre);
    contenedor.appendChild(h5Duracion);
    contenedor.appendChild(h5Clasificacion);
    contenedor.appendChild(h5Horario);
    contenedor.appendChild(h5Descripcion);
    contenedor.appendChild(pDescripcion);
}

window.addEventListener('load', generarContenido);