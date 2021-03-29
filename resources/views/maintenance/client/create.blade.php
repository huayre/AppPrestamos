<div class="modal fade" id="modalcrearcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="title_form"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="form_client">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Tipo de Documento <span
                                        class="text-danger">*</span></label>
                                <select class="form-control border-primary" name="type_document" id="type_document">
                                    <option disabled selected>Seleccionar</option>
                                    <option value="DNI">DNI</option>
                                    <option value="RUC">RUC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Nombres<span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="firstname" name="firstname">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Sexo <span class="text-danger">*</span></label>
                                <select class="form-control border-primary" name="sex" id="sex">
                                    <option disabled selected>Seleccionar</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Celular / Telefono <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Número de Documento <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="number_document"
                                       name="number_document">
                                <div id="error_nombre"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Apellidos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="lastname" name="lastname">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Dirección de Domicilio <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="direction" name="direction">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Ocupación <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-primary" id="occupation"
                                       name="occupation">
                            </div>
                        </div>
                    </div>

                    <input  hidden type="text" class="form-control border-primary" id="id" name="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="guardarCliente()" id="guardar_cliente">
                            Guardar
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
