<!-- notice modal -->
<div class="modal fade" id="update_cita_pendiente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>ACTUALIZAR CITA PENDIENTE</h6>
            </div>
            <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
            <form id="form_update_consulta_pendiente">
                <input id="id_consulta_pendiente" name="id_consulta_pendiente" hidden="true" />
                <div class="row sinpadding">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">FECHA</label>
                            <input id="fecha_inicio" name="fecha_inicio" type="text" class="form-control datepicker" 
                            />                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">HORA INICIO</label>
                            <input id="hora_inicio" name="hora_inicio" type="text" class="form-control timepicker" />                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">HORA FIN</label>
                            <input id="hora_fin" name="hora_fin" type="text" class="form-control timepicker" />                    
                        </div>
                    </div>
                </div>
                @role('doctor')
                  <div class="row">
                    <div class="col-md-12"> 
                        <div class="form-group">
                          <label class="control-label">PACIENTE</label>
                          <select id="paciente_id" name="paciente_id" class="form-control" data-style="select-with-transition">
                                <option value="">-- SELECCIONE UN PACIENTE --</option>
                                 @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->apellidos }} {{ $paciente->nombres }}</option>
                                @endforeach

                          </select>
                        </div>
                    </div>
                </div>
                @endrole
                @role('administrador')
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="control-label">ESPECIALIDAD</label>
                              <select id="speciality_id" name="speciality_id" class="form-control" data-style="select-with-transition">
                                    <option value="">-- Seleccione --</option>
                                     @foreach($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                                    @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="control-label">DOCTOR</label>
                              <select id="doctor_id" name="doctor_id" class="form-control" data-style="select-with-transition">
                                    <option value="">-- Seleccione --</option>
                                     @foreach($doctores as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->nombres }} {{ $doctor->apellidos }}</option>
                                    @endforeach

                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                              <label class="control-label">PACIENTE</label>
                              <select id="paciente_id" name="paciente_id" class="form-control" data-style="select-with-transition">
                                    <option value="">-- Seleccione --</option>
                                     @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}">{{ $paciente->apellidos }} {{ $paciente->nombres }}</option>
                                    @endforeach

                              </select>
                            </div>
                        </div>
                    </div>
                @endrole
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <label class="control-label">OBSERVACIÓN</label>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" />      
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" class="btn btn-danger pull-right" data-dismiss="modal">Cerrar</a>
                <a href="#" id="update_consulta_pendiente" class="btn btn-info pull-right">Actualizar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->