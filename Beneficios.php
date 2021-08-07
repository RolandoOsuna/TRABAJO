<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
</head>
<style>
    .bg-blog{
        background-color: rgb(126,105,88);

    }
</style>
<body>
    <?php require('Navbar.php');?>
<div class="fs-5">
    <header class="container">
        <p class="display-4 text-center">Beneficios de una Consulta</p>
        <hr>
    </header>
    <section class="container">
        <div class="row">
            <p class="pb-3 lead  text-center">Ayudarse de una consultora de <mark>Recursos Humanos</mark> conlleva múltiples beneficios para una organización.</p> 
            <div class="col-12 col-lg-7 align-self-center">
                <p>Para empezar, la consultoría de <mark>Recursos Humanos</mark> nos ayuda a crear y planificar nuevas estrategias, y es perfecta cuando queremos dar un salto cualitativo y carecemos de la experiencia necesaria para hacerlo. Además, nos permite tener una visión objetiva de nuestro departamento y de nuestras necesidades en general.</p>   
            </div>
            <aside class="col-12 col-lg-5 text-center">
                <img src="/IMG/Beneficios.jpg" class="img-fluid" width="350" alt="">
            </aside>
        </div>
        
        <div class="row pt-4">
            <aside class="col-12 col-lg-5 text-center">
                <img src="/IMG/Beneficios2.jpg" class="img-fluid" width="350" alt="">
            </aside>
            <div class="col-12 col-lg-7 align-self-center">
                <p>Otros  de sus puntos fuertes son que permite aprovechar mejor el capital humano de la empresa, e incluso captar talento nuevo; y que favorece la transformación cultural de la compañía (la guía para que se enfrente adecuadamente a los nuevos procesos).</p>
                <p>También es capaz de proponer modelos de liderazgo en momentos de crisis. Una consultora de <mark>Recursos Humanos</mark> ayudará a que esta situación se gestione de la manera más acertada, rápida y  profesional posible.</p>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-12">
                <p>Gestionar al capital humano de las organizaciones es una tarea que exige dedicación y alta experticia, por esta razón las grandes y medianas empresas optan por contratar sus servicios. Según el perfil del personal requerido las empresas contactaran estos servicios. Por ejemplo para el reclutamiento y contratación de personal CEO. Estaríamos hablando de consultoras encargadas de la búsqueda de talentos de alto nivel (directores, presidentes, gerentes corporativos, socios estratégicos), que apunten a ocupar puestos estratégicos claves para la empresa, y de carácter confidencial.</p>
                <p>La importancia de elegir una consultora de personal experta redundará en contar con el respaldo y lograr una buena selección, que radica en tener las mejores expectativas del personal que se encargará del desempeño de sus actividades dentro de la empresa; por consiguiente, la evaluación asegurará a la empresa un proceso impecable, en el cual se han aplicado los mejores métodos y técnicas, en relación a:</p>
                <li>Perfil de los candidatos</li>
                <li>Experiencia laboral</li>
                <li>Trayectoria en educación y conocimientos</li>
                <li>Aspectos psicológicos</li>
                <li>Competencias organizacionales según el nivel a ocupar</li>
            </div>
        </div>
        <div class="row">
            <div class="col ps-5">
                <hr>
                <p class="text-muted ps-5">Bibliografía</p>
                <li class="ps-5"><a href="https://www.bizneo.com/blog/consultoras-recursos-humanos/#Beneficios_de_contratar_una_consultora_de_Recursos_Humanos" class="text-muted">Bizmeo</a></li>
                <li class="ps-5"><a href="https://efiempresa.com/blog/efiempresa-consultoras-de-personal/" class="text-muted">Efiempresa</a></li>
                <hr>
            </div>
        </div>
    </section>
    
    </div>
<section class="container">
    <div class="row">
        <div class="col">
            <p class="display-4 text-center">Blog</p>
            <hr>
        </div>  
    </div>

    <p class="text-center fs-5">Descubre más información </p>
    
    <div class="row justify-content-evenly " >
        <div class="col-12 col-md-6 col-lg-3 pb-2 ">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodología </h5>
                <h6 class="text-white-50">Necesidad de diagnóstico del sistema de Comunicación Organizacional</h6>
                <p class="text-white-50">Un diagnóstico de comunicación organizacional es el análisis que tiene como propósito examinar y mejorar los sistemas y prácticas de comunicación interna y externa de una organización en todos sus niveles.
                <a href="MetodologiaNDSCO.php" class="text-black-50 ">  Ver más</a></p>
    
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodología </h5>
                <h6 class="text-white-50">Detección de Necesidades de Capacitación (DNC)</h6>
                <p class="text-white-50">El diagnóstico de necesidades de capacitación es el proceso mediante el cual nos
                    aproximamos al estado real de conocimiento y destrezas del recurso humano en el ámbito
                    organizacional, en relación a los objetivos y las funciones de cada puesto.
                <a href="MetodologiaDNC.php" class="text-black-50">  Ver más</a></p>
                
            </div>

        </div>  
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Definición </h5>
                <h6 class="text-white-50">Qué hace un consultor y cómo elegir al mejor</h6>
                <p class="text-white-50">Las consultoras de Recursos Humanos realizan un trabajo que implica análisis, identificación de problemas y creación de estrategias para resolverlos. Además, produce las modificaciones pertinentes para mejorar dicho departamento.
                <a href="Definicion.php" class="text-black-50">  Ver más</a></p>

            </div>
        </div>
         
    </div>

</section>

<?php include('Footer.php');?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>