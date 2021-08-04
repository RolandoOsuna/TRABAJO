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
    .bg-card{
            background-color: rgb(222,235,247);
        }

</style>
<body>  
<?php require('Navbar.php');?>
<header class="container">
    <p class="display-4 text-center">Nosotros</p>
    <hr>
    <p class="fs-3 text-muted text-center"> Bienvenido a</p>
    <h3 class="text-center">**LOGO - NOMBRE DE LA EMPRESA**</h3>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure, et totam qui id aliquam debitis, consequuntur laborum minus iusto optio eius earum cupiditate voluptates iste nam corrupti quam quia.</p><!--Aqui se pondrá una descripcion de quien es la empresa-->
</header>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 align-self-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quasi. Pariatur esse consequuntur, ratione vero, temporibus vel rem eligendi consequatur nulla quod nostrum iure, iste similique omnis deserunt unde ipsa magnam aut blanditiis necessitatibus optio ullam. Corrupti, excepturi vero ab recusandae dolor perferendis quasi totam earum autem est repellendus aperiam!
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aliquam iste ea illum, fugit excepturi porro laboriosam magni asperiores, consequuntur ab veritatis quia, ipsum obcaecati. Aperiam deleniti voluptatum sint natus!
        </div>
        <div class="col-12 col-md-6 align-self-center">
            <img class="img-fluid " src="/IMG/contenido3.png" alt="">
        </div>
    </div>

    <div class="row pb-4">
        <div class="col-12 col-md-4 pt-4 text-center align-self-center">
            <img class="img-fluid pt-2" src="/IMG/contenido4.png"  alt="">
            <img class="img-fluid pt-2 d-md-block d-none" src="/IMG/contenido5.png"  alt="">
            <img class="img-fluid pt-2 d-md-block d-none" src="/IMG/contenido6.jpg"  alt="">
            <img class="img-fluid pt-2 d-md-block d-none" src="/IMG/contenido7.jpg"  alt="">

        </div>
        <div class="col-12 col-md-8 ">
            <p class="display-6 text-center">Experiencia Laboral</p>
            <hr>
            <div class="row">
                <div class="col-6 ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Reclutamiento y Selección de Personal (Todos los niveles)</li>
                        <li class="list-group-item">Entrevista por competencias</li>
                        <li class="list-group-item">Aplicación de Exámenes psicométricos y Proyectivos (HTP, Machover, Cleaver, Therman, 16-PF, IPV, etc.)</li>
                        <li class="list-group-item">Gestión de altas y Bajas de Personal</li>
                        <li class="list-group-item">Proceso Onboarding</li>
                        <li class="list-group-item">Despliegue del Programa de Cultura Organizacional</li>
                        <li class="list-group-item">Dinámicas de Integración</li>
                        <li class="list-group-item">Detección de Necesidades de Capacitación</li>
                        <li class="list-group-item">Elaboración y coordinación del plan anual de Capacitación</li>
                        <li class="list-group-item">Registro de Cursos en STPS</li>
                        <li class="list-group-item">Desarrollo Organizacional</li>
                        <li class="list-group-item">Encuestas de Clima Organizacional, Burnout, Norma-035</li>
                        <li class="list-group-item">Evaluación de Desempeño, 360º</li>
                        <li class="list-group-item">Metodología 9-Box</li>
                        <li class="list-group-item">Plan de Ruta y Carrera</li>
                        <li class="list-group-item">Tabulador de Sueldos y Esquema de Compensaciones</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Supervisión de incidencias y nómina</li>
                        <li class="list-group-item">Elaboración de Descripciones de puestos, Manuales Operativos, Procesos y Políticas.</li>
                        <li class="list-group-item">Elaboración Reglamento Interno y Matriz de Consecuencias</li>
                        <li class="list-group-item">KPI’s, (Rotación de Personal, Costo de Rotación, Ausentismo, $ de Ausentismo, Cobertura de plantilla, Tiempo de Ciclo, Capacitación, Costo de Nómina,)</li>
                        <li class="list-group-item">Elaboración del Presupuesto Anual.</li>
                        <li class="list-group-item">Desarrollo e implementación de proyectos de mejora.</li>
                        <li class="list-group-item">Revisión de Contrato Colectivo y Manejo de Sindicatos.</li>
                        <li class="list-group-item">Presentaciones Ejecutivas de resultados con Dirección.</li>
                        <li class="list-group-item">Implementación de estrategias fiscales con el despacho fiscal.</li>
                        <li class="list-group-item">Seguridad e Higiene</li>
                        <li class="list-group-item">Implementación de las 5’S</li>
                        <li class="list-group-item">Ley Federal del Trabajo</li>       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <p class="display-6 text-center">Más Sobre Nosotros</p>
    <hr>
    <div class="row mb-3 ">
            <div class="col-12  col-md-5 pb-2">
                <a href="Servicios.php" class="text-decoration-none text-dark">
                <div class="card p-1 bg-card">
                    <div class="card-body">
                        <img class="img-fluid p-1" src="/IMG/Servicios1.png" width="75" alt="">
                        <h5 class="card-title">Diagnóstico en Comunicación Organizacional</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam, praesentium numquam id debitis quod?</p>
                    </div>
                </div></a>
            </div>

            <div class="col-12 col-md-7">
                <a href="Servicios.php" class="text-decoration-none text-dark">
                    <div class="card bg-card">
                        <div class="card-body pt-2">
                            <h5 class="card-title">Capacitación</h5>
                            <hr>
                            <p class="card-text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam, praesentium numquam id debitis quod?</p>
                            <div class="row text-center ">
                                <hr>
                                <div class="col-6 ">
                                    <a href="" class="text-decoration-none text-dark">
                                        <p class="fst-italic ">Diseño de Cursos</p>
                                        <img class="img-fluid " src="/IMG/Diseseño-de-Cursos.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="col-6">
                                <a href=""  class="text-decoration-none text-dark">
                                    <p class="fst-italic">Impartición de Cursos</p>
                                    <img class="img-fluid " src="/IMG/Imparticion-de-Cursos.png" width="100" alt="">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </a>
            </div>  
            
        </div>
    </div>

</div>

<?php include('Footer.php');?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>