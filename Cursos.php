<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
</head>
<style>
    .bg-cursos{
        background-color: rgb(29,55,98);
    }
    .bg-imparticion{
        background-color: rgb(126,105,88);

    }
    .bg-lista{
        background-color: #c0b4ac;
    }
    .bg-blog{
        background-color: rgb(126,105,88);

    }
    
</style>
<body>
    <?php require('Navbar.php');?>
<div class="fs-5">
    <div class="container">

        <header>
            <p class="display-4 text-center">Cursos</p>
            <hr>
        </header>
        <section>
            <!--DISEÑO-->
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-7 align-self-center text-md-center">
                    <h4>Diseño de Cursos</h4>
                    <p>En esta modalidad, solo se diseña el curso de acuerdo a las necesidades del cliente, para que lo imparta la persona que la misma indique; quedándose bajo propiedad de la misma y pueda ser replicado las veces que sea necesaria.  Con el diseño del curso se entregará:</p>
                </div>
                <aside class="col-12 col-sm-6 col-lg-5  text-center ">
                    <img src="/IMG/Diseno.jpg" class="img-fluid img-thumbnail rounded" width="400" alt="">
                </aside>
            </div>

            <div class="row pb-2 justify-content-evenly ">
                <div class="col-12 col-md-6 col-lg-5 pb-2 pt-2 ">
                    <div class="rounded border p-2 bg-secondary">
                        <p class="fs-5 text-center ">Manual del Instructor</p>
                        <hr>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Carta Descriptiva</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Formato de Lista de Verificación de Requerimientos</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Descripción de momentos e instrumentos de evaluación</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Instrumento de Evaluación Diagnóstica</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Claves de Respuestas del Instrumento de Evaluación Diagnóstica</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Instrumentos de Evaluación Formativa</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Claves de Respuestas del Instrumentos de Evaluación Formativa</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Instrumentos de Evaluación Sumativa</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Claves de Respuestas de Evaluación Sumativa</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Formato de Evaluación de Satisfacción</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Desarrollo de Temas y Subtemas</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Desarrollo Teórico</li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">Formato de Contrato de Aprendizaje</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 pt-2 ">
                    <div class="rounded border p-2 bg-secondary">
                        <p  class="fs-5 text-center">Manual del Participante</p>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Bienvenida</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Recomendaciones de la forma de utilizar el Manual</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Organización del Manual</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Introducción</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Manual del Participante</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Beneficios del Curso y Manuall</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Objetivos</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Objetivo General</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Objetivos Particulares</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Expectativas</li>
                            <li  class="list-group-item list-group-item-action list-group-item-secondary ">Desarrollo de Temas y Subtemas</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <!--IMPARTICIÓN-->
            <div class="row pt-4">
                <aside class="col-12 col-sm-6 col-lg-7 text-lg-center">
                    <h4>Impartición de Cursos</h4>
                    <p>En esta modalidad, se diseña el curso de acuerdo a las necesidades del cliente y se imparte.  Con el diseño del curso se entregará:</p>
                    <img src="/IMG/Diseno2.jpeg" class="img-fluid img-thumbnail rounded" width="400" alt="">
                    <p class="blockquote fs-6 text-end text-muted align-self-end pt-5">Se aplicarán todos los intrumentos de evaluación pertinentes y se entregará un informe de resultados a la empresa. </p>
                </aside>
                <div class="col-12 col-sm-6 col-lg-4 pb-2 pt-2 align-items-center ">
                    <div class="rounded border p-2 bg-imparticion">
                        <p class="fs-5 text-center ">Manual del Instructor</p>
                        <hr>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item bg-lista"> Bienvenida</li>
                            <li class="list-group-item bg-lista">Recomendaciones de la forma de utilizar el Manual</li>
                            <li class="list-group-item bg-lista">Organización del Manual</li>
                            <li class="list-group-item bg-lista">Introducción</li>
                            <li class="list-group-item bg-lista">Manual del Participante</li>
                            <li class="list-group-item bg-lista">Beneficios del Curso y Manuall</li>
                            <li class="list-group-item bg-lista">Objetivos</li>
                            <li class="list-group-item bg-lista">Objetivos General</li>
                            <li class="list-group-item bg-lista">Objetivos Particulares</li>
                            <li class="list-group-item bg-lista">Expectativas</li>
                            <li class="list-group-item bg-lista">Desarrollo de Temas y Subtemas</li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </section>
    </div>
</div>

<section class="container">
    <div class="row">
        <div class="col">
            <p class="display-4 text-center">Blog</p>
            <hr>
        </div>  
    </div>

    <p class="text-center fs-5">Descubre más indormación</p>
    
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
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Beneficios </h5>
                <h6 class="text-white-50">En que ayuda el optener una consulta</h6>
                <p class="text-white-50">Las ventajas que ofrece el contar con los servicios de consultoras de personal, es que se encargan de llevar a cabo una serie de procedimientos y técnicas especializadas para la selección, evaluación y capacitación del recurso humano, y que tienen en común la planificación de actividades para la búsqueda del recurso humano más calificado para el puesto.
                <a href="Beneficios.php" class="text-black-50">  Ver más</a></p>

            </div>
        </div>  
    </div>

</section>  

<?php include('Footer.php');?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>