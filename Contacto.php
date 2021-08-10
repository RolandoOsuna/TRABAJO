<link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">

<body>
<div class="fs-5">
    <div class="modal fade" id="mi-modal" tabindex="-1" aria.hidden="true" aria-labelledby="label-modal"data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    ¡Contáctanos!
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="Nombre" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">Correo Electrónico</label>
                                        <input type="text" class="form-control" id="correo" placeholder="Correo">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="mensaje" class="form-label">Mensaje</label>
                                        <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                                        <div id="respuesta-correo" class="form-text">
                                            Te responderemos lo más antes posible
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Aceptar</button>
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
            
        </div>
    </div> 
</div>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
