@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('auth/register.formLegend') }}</div>
                <div class="panel-body">

                    @if(Session::has('success'))
                        <p class="alert alert-info">{{ Session::get('success') }}</p>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if($rol->validarPermsFieldClient('cod_register-enable'))

                        <div class="form-group{{ $errors->has('cod_register') ? ' has-error' : '' }}">
                            <label for="cod_register" class="col-md-4 control-label">C&oacute;digo de registro {!! ($rol->validarPermsFieldClient('cod_register-required')) ? '*' : '' !!}</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="cod_register" type="number" class="form-control" name="cod_register" value="{{ old('cod_register') }}" {!! ($rol->validarPermsFieldClient('cod_register-required')) ? 'required' : '' !!} autofocus>

                                @if ($errors->has('cod_register'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cod_register') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @endif

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Nombres {!! ($rol->validarPermsFieldClient('first_name-required')) ? '*' : '' !!}</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" {!! ($rol->validarPermsFieldClient('first_name-required')) ? 'required' : '' !!} autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Apellidos {!! ($rol->validarPermsFieldClient('last_name-required')) ? '*' : '' !!}</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" {!! ($rol->validarPermsFieldClient('last_name-required')) ? 'required' : '' !!} autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('auth/register.formInputEmail') }} {!! ($rol->validarPermsFieldClient('email-required')) ? '*' : '' !!}</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" {!! ($rol->validarPermsFieldClient('email-required')) ? 'required' : '' !!}>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if($rol->validarPermsFieldClient('tel-enable'))
                            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label maxlength="255" for="tel" class="col-md-4 control-label">Tel&eacute;fono {!! ($rol->validarPermsFieldClient('tel-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" {!! ($rol->validarPermsFieldClient('tel-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('tel'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('cel-enable'))
                            <div class="form-group{{ $errors->has('cel') ? ' has-error' : '' }}">
                                <label maxlength="255" for="cel" class="col-md-4 control-label">Celular {!! ($rol->validarPermsFieldClient('cel-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input id="cel" type="text" class="form-control" name="cel" value="{{ old('cel') }}" {!! ($rol->validarPermsFieldClient('cel-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('cel'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('identity_card-enable'))
                            <div class="form-group{{ $errors->has('identity_card') ? ' has-error' : '' }}">
                                <label maxlength="20" for="identity_card" class="col-md-4 control-label">C&eacute;dula {!! ($rol->validarPermsFieldClient('identity_card-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input id="identity_card" type="text" class="form-control" name="identity_card" value="{{ old('identity_card') }}" {!! ($rol->validarPermsFieldClient('identity_card-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('identity_card'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('identity_card') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('identity_card_city-enable'))
                            <div class="form-group{{ $errors->has('identity_card_city') ? ' has-error' : '' }}">
                                <label for="identity_card_city" class="col-md-4 control-label">Ciudad de expedici&oacute;n {!! ($rol->validarPermsFieldClient('identity_card_city-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="identity_card_city" type="text" class="form-control" name="identity_card_city" value="{{ old('identity_card_city') }}" {!! ($rol->validarPermsFieldClient('identity_card_city-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('identity_card_city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('identity_card_city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('birthdate-enable'))
                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label maxlength="255" for="birthdate" class="col-md-4 control-label">Fecha de nacimiento {!! ($rol->validarPermsFieldClient('birthdate-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="text" class="date-picker form-control" name="birthdate" value="{{ old('birthdate') }}" {!! ($rol->validarPermsFieldClient('birthdate-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('citybirth-enable'))
                            <div class="form-group{{ $errors->has('citybirth') ? ' has-error' : '' }}">
                                <label for="citybirth" class="col-md-4 control-label">Ciudad de nacimiento {!! ($rol->validarPermsFieldClient('citybirth-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input  maxlength="255" id="citybirth" type="text" class="form-control" name="citybirth" value="{{ old('citybirth') }}" {!! ($rol->validarPermsFieldClient('citybirth-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('citybirth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('citybirth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('type_blood-enable'))
                            <div class="form-group{{ $errors->has('type_blood') ? ' has-error' : '' }}">
                                <label for="type_blood" class="col-md-4 control-label">Tipo de sangre {!! ($rol->validarPermsFieldClient('type_blood-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="10" id="type_blood" type="text" class="form-control" name="type_blood" value="{{ old('type_blood') }}" {!! ($rol->validarPermsFieldClient('type_blood-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('type_blood'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type_blood') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('age-enable'))
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label for="age" class="col-md-4 control-label">Edad {!! ($rol->validarPermsFieldClient('age-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="4" id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" {!! ($rol->validarPermsFieldClient('age-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('address-enable'))
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Direcci&oacute;n {!! ($rol->validarPermsFieldClient('address-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" {!! ($rol->validarPermsFieldClient('address-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('state_civil-enable'))
                            <div class="form-group{{ $errors->has('state_civil') ? ' has-error' : '' }}">
                                <label for="state_civil" class="col-md-4 control-label">Estado civi {!! ($rol->validarPermsFieldClient('state_civil-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="state_civil" class="form-control" name="state_civil" {!! ($rol->validarPermsFieldClient('state_civil-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="1" {{ (old('state_civil') == 1) ? 'selected' : "" }}>Soltero</option>
                                        <option value="2" {{ (old('state_civil') == 2) ? 'selected' : "" }}>Casado</option>
                                        <option value="3" {{ (old('state_civil') == 3) ? 'selected' : "" }}>uni&oacute;n libre</option>
                                    </select>

                                    @if ($errors->has('state_civil'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state_civil') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('emergency_contact-enable'))
                            <div class="form-group{{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
                                <label for="emergency_contact" class="col-md-4 control-label">Contacto de emergencia {!! ($rol->validarPermsFieldClient('emergency_contact-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="emergency_contact" type="text" class="form-control" name="emergency_contact" value="{{ old('emergency_contact') }}" {!! ($rol->validarPermsFieldClient('emergency_contact-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('emergency_contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('emergency_contact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('telephone_contact-enable'))
                            <div class="form-group{{ $errors->has('telephone_contact') ? ' has-error' : '' }}">
                                <label for="telephone_contact" class="col-md-4 control-label">Tel&eacute;fono de contacto {!! ($rol->validarPermsFieldClient('telephone_contact-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="telephone_contact" type="text" class="form-control" name="telephone_contact" value="{{ old('telephone_contact') }}" {!! ($rol->validarPermsFieldClient('telephone_contact-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('telephone_contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telephone_contact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="panel-heading">Informaci&oacute;n general</div>

                        @if($rol->validarPermsFieldClient('fech_entry-enable'))
                            <div class="form-group{{ $errors->has('fech_entry') ? ' has-error' : '' }}">
                                <label for="fech_entry" class="col-md-4 control-label">Fecha de ingreso {!! ($rol->validarPermsFieldClient('fech_entry-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="fech_entry" type="text" class="date-picker form-control" name="fech_entry" value="{{ old('fech_entry') }}" {!! ($rol->validarPermsFieldClient('fech_entry-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('fech_entry'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fech_entry') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('induction-enable'))
                            <div class="form-group{{ $errors->has('induction') ? ' has-error' : '' }}">
                                <label for="induction" class="col-md-4 control-label">Inducci&oacute;n {!! ($rol->validarPermsFieldClient('induction-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="induction" class="form-control" name="induction" {!! ($rol->validarPermsFieldClient('induction-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('induction') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('induction') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('induction'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('induction') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('induction_ssg-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="induction_ssg" class="col-md-4 control-label">Inducci&oacute;n al SSG {!! ($rol->validarPermsFieldClient('induction_ssg-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="induction_ssg" class="form-control" name="induction_ssg" {!! ($rol->validarPermsFieldClient('induction_ssg-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('induction_ssg') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('induction_ssg') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('induction_ssg'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('induction_ssg') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('contract_information-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="contract_information" class="col-md-4 control-label">Informaci&oacute;n contrato {!! ($rol->validarPermsFieldClient('contract_information-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="contract_information" class="form-control" name="contract_information" {!! ($rol->validarPermsFieldClient('contract_information-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('contract_information') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('contract_information') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('contract_information'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contract_information') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('way_to_pay-enable'))
                            <div class="form-group{{ $errors->has('way_to_pay') ? ' has-error' : '' }}">
                                <label for="way_to_pay" class="col-md-4 control-label">Forma pago {!! ($rol->validarPermsFieldClient('way_to_pay-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="way_to_pay" type="text" class="form-control" name="way_to_pay" value="{{ old('way_to_pay') }}" {!! ($rol->validarPermsFieldClient('way_to_pay-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('way_to_pay'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('way_to_pay') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('turn-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="turn" class="col-md-4 control-label">Turno {!! ($rol->validarPermsFieldClient('turn-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="turn" class="form-control" name="turn" {!! ($rol->validarPermsFieldClient('turn-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="1" {{ (old('turn') == "1") ? 'selected' : "" }}>A</option>
                                        <option value="2" {{ (old('turn') == "2") ? 'selected' : "" }}>B</option>
                                        <option value="3" {{ (old('turn') == "3") ? 'selected' : "" }}>C</option>
                                        <option value="4" {{ (old('turn') == "4") ? 'selected' : "" }}>D</option>
                                    </select>

                                    @if ($errors->has('turn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('turn') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('medical_exam-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="medical_exam" class="col-md-4 control-label">Examen m&eacute;dico inicio {!! ($rol->validarPermsFieldClient('medical_exam-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="medical_exam" class="form-control" name="medical_exam" {!! ($rol->validarPermsFieldClient('medical_exam-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('medical_exam') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('medical_exam') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('medical_exam'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('medical_exam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('handling_foods-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="handling_foods" class="col-md-4 control-label">Manipulaci&oacute;n de alimentos {!! ($rol->validarPermsFieldClient('handling_foods-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="handling_foods" class="form-control" name="handling_foods" {!! ($rol->validarPermsFieldClient('handling_foods-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('handling_foods') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('handling_foods') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('handling_foods'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('handling_foods') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('disciplinary_history-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="disciplinary_history" class="col-md-4 control-label">Antecedentes disciplinarios {!! ($rol->validarPermsFieldClient('disciplinary_history-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="disciplinary_history" class="form-control" name="disciplinary_history" {!! ($rol->validarPermsFieldClient('disciplinary_history-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('disciplinary_history') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('disciplinary_history') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('disciplinary_history'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('disciplinary_history') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="panel-heading">Informaci&oacute;n ORG</div>

                        @if($rol->validarPermsFieldClient('contract-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="contract" class="col-md-4 control-label">Contrato  {!! ($rol->validarPermsFieldClient('contract-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="contract" class="form-control" name="contract" {!! ($rol->validarPermsFieldClient('contract-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('contract') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('contract') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('contract'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contract') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('contract_which-enable'))
                            <div class="contract_which form-group{{ $errors->has('contract_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="contract_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('contract_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="contract_which" type="text" class="form-control" name="contract_which" value="{{ old('contract_which') }}">

                                    @if ($errors->has('contract_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contract_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('eps-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="eps" class="col-md-4 control-label">EPS  {!! ($rol->validarPermsFieldClient('eps-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="eps" class="form-control" name="eps" {!! ($rol->validarPermsFieldClient('eps-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('eps') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('eps') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('eps'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('eps') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('eps_which-enable'))
                            <div class="eps_which form-group{{ $errors->has('eps_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="eps_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('eps_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="eps_which" type="text" class="form-control" name="eps_which" value="{{ old('eps_which') }}">

                                    @if ($errors->has('eps_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('eps_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('arl-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="arl" class="col-md-4 control-label">ARL  {!! ($rol->validarPermsFieldClient('arl-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="arl" class="form-control" name="arl" {!! ($rol->validarPermsFieldClient('arl-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('arl') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('arl') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('arl'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('arl') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('arl_which-enable'))
                            <div class="arl_which form-group{{ $errors->has('arl_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="arl_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('arl_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="arl_which" type="text" class="form-control" name="arl_which" value="{{ old('arl_which') }}">

                                    @if ($errors->has('arl_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('arl_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('pension-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="pension" class="col-md-4 control-label">Pensi&oacute;n  {!! ($rol->validarPermsFieldClient('pension-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="pension" class="form-control" name="pension" {!! ($rol->validarPermsFieldClient('pension-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('pension') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('pension') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('pension'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pension') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('pension_which-enable'))
                            <div class="pension_which form-group{{ $errors->has('pension_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="pension_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('pension_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="pension_which" type="text" class="form-control" name="pension_which" value="{{ old('pension_which') }}">

                                    @if ($errors->has('pension_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pension_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('caja-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="caja" class="col-md-4 control-label">Caja  {!! ($rol->validarPermsFieldClient('caja-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="caja" class="form-control" name="caja" {!! ($rol->validarPermsFieldClient('caja-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('caja') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('caja') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('caja'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('caja') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('caja_which-enable'))
                            <div class="caja_which form-group{{ $errors->has('caja_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="caja_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('caja_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="caja_which" type="text" class="form-control" name="caja_which" value="{{ old('caja_which') }}">

                                    @if ($errors->has('caja_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('caja_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('afiliados-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="afiliados" class="col-md-4 control-label">Afiliados  {!! ($rol->validarPermsFieldClient('afiliados-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="afiliados" class="form-control" name="afiliados" {!! ($rol->validarPermsFieldClient('afiliados-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('afiliados') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('afiliados') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('afiliados'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('afiliados') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('afiliados_which-enable'))
                            <div class="afiliados_which form-group{{ $errors->has('afiliados_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="afiliados_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('afiliados_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="afiliados_which" type="text" class="form-control" name="afiliados_which" value="{{ old('afiliados_which') }}">

                                    @if ($errors->has('afiliados_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('afiliados_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('sura-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="sura" class="col-md-4 control-label">Sura  {!! ($rol->validarPermsFieldClient('sura-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="sura" class="form-control" name="sura" {!! ($rol->validarPermsFieldClient('sura-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Si" {{ (old('sura') == "Si") ? 'selected' : "" }}>Si</option>
                                        <option value="No" {{ (old('sura') == "No") ? 'selected' : "" }}>No</option>
                                    </select>

                                    @if ($errors->has('sura'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sura') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('sura_which-enable'))
                            <div class="sura_which form-group{{ $errors->has('sura_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="sura_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('sura_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="sura_which" type="text" class="form-control" name="sura_which" value="{{ old('sura_which') }}">

                                    @if ($errors->has('sura_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sura_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="panel-heading">Informaci&oacute;n personal</div>

                        @if($rol->validarPermsFieldClient('children-enable'))
                            <div class="form-group{{ $errors->has('children') ? ' has-error' : '' }}">
                                <label for="children" class="col-md-4 control-label">Primer hijo {!! ($rol->validarPermsFieldClient('children-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="children" type="text" class="form-control" name="children" value="{{ old('children') }}" {!! ($rol->validarPermsFieldClient('children-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('children'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('children') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('age_children-enable'))
                            <div class="form-group{{ $errors->has('age_children') ? ' has-error' : '' }}">
                                <label for="age_children" class="col-md-4 control-label">Edad {!! ($rol->validarPermsFieldClient('age_children-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="age_children" type="text" class="form-control" name="age_children" value="{{ old('age_children') }}" {!! ($rol->validarPermsFieldClient('age_children-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('age_children'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age_children') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('children1-enable'))
                            <div class="form-group{{ $errors->has('children1') ? ' has-error' : '' }}">
                                <label for="children1" class="col-md-4 control-label">Segundo hijo {!! ($rol->validarPermsFieldClient('children1-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="children1" type="text" class="form-control" name="children1" value="{{ old('children1') }}" {!! ($rol->validarPermsFieldClient('children1-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('children1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('children1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('age_children1-enable'))
                            <div class="form-group{{ $errors->has('age_children1') ? ' has-error' : '' }}">
                                <label for="age_children1" class="col-md-4 control-label">Edad {!! ($rol->validarPermsFieldClient('age_children1-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="age_children1" type="text" class="form-control" name="age_children1" value="{{ old('age_children1') }}" {!! ($rol->validarPermsFieldClient('age_children1-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('age_children1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age_children1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('children2-enable'))
                            <div class="form-group{{ $errors->has('children2') ? ' has-error' : '' }}">
                                <label for="children2" class="col-md-4 control-label">Tercer hijo {!! ($rol->validarPermsFieldClient('children2-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="children2" type="text" class="form-control" name="children2" value="{{ old('children2') }}" {!! ($rol->validarPermsFieldClient('children2-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('children2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('children2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('age_children2-enable'))
                            <div class="form-group{{ $errors->has('age_children2') ? ' has-error' : '' }}">
                                <label for="age_children2" class="col-md-4 control-label">Edad {!! ($rol->validarPermsFieldClient('age_children2-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="age_children2" type="text" class="form-control" name="age_children2" value="{{ old('age_children2') }}" {!! ($rol->validarPermsFieldClient('age_children2-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('age_children2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age_children2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('children3-enable'))
                            <div class="form-group{{ $errors->has('children3') ? ' has-error' : '' }}">
                                <label for="children3" class="col-md-4 control-label">Cuarto hijo {!! ($rol->validarPermsFieldClient('children3-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="children3" type="text" class="form-control" name="children3" value="{{ old('children3') }}" {!! ($rol->validarPermsFieldClient('children3-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('children3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('children3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('age_children3-enable'))
                            <div class="form-group{{ $errors->has('age_children3') ? ' has-error' : '' }}">
                                <label for="age_children3" class="col-md-4 control-label">Edad {!! ($rol->validarPermsFieldClient('age_children3-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="age_children3" type="text" class="form-control" name="age_children3" value="{{ old('age_children3') }}" {!! ($rol->validarPermsFieldClient('age_children3-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('age_children3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age_children3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('transport-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="transport" class="col-md-4 control-label">Transporte  {!! ($rol->validarPermsFieldClient('transport-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="transport" class="form-control" name="transport" {!! ($rol->validarPermsFieldClient('transport-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Publico" {{ (old('transport') == "Publico") ? 'selected' : "" }}>Publico</option>
                                        <option value="Privado" {{ (old('transport') == "Privado") ? 'selected' : "" }}>Privado</option>
                                        <option value="Otro" {{ (old('transport') == "Otro") ? 'selected' : "" }}>Otro</option>
                                    </select>

                                    @if ($errors->has('transport'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('transport') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('transport_which-enable'))
                            <div class="transport_which form-group{{ $errors->has('transport_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="transport_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('transport_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="transport_which" type="text" class="form-control" name="transport_which" value="{{ old('transport_which') }}">

                                    @if ($errors->has('transport_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('transport_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('education-enable'))
                            <div class="form-group{{ $errors->has('induction_ssg') ? ' has-error' : '' }}">
                                <label for="education" class="col-md-4 control-label">Educaci&oacute;n  {!! ($rol->validarPermsFieldClient('education-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="education" class="form-control" name="education" {!! ($rol->validarPermsFieldClient('education-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Bachiller" {{ (old('education') == "Bachiller") ? 'selected' : "" }}>Bachiller</option>
                                        <option value="Tecnico" {{ (old('education') == "Tecnico") ? 'selected' : "" }}>T&eacute;cnico</option>
                                        <option value="Tecnologico" {{ (old('education') == "Tecnologico") ? 'selected' : "" }}>Tecn&oacute;logico</option>
                                        <option value="Profesional" {{ (old('education') == "Profesional") ? 'selected' : "" }}>Profesional</option>
                                        <option value="Otro" {{ (old('education') == "Otro") ? 'selected' : "" }}>Otro</option>
                                    </select>

                                    @if ($errors->has('education'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('education') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('education_which-enable'))
                            <div class="education_which form-group{{ $errors->has('education_which') ? ' has-error' : '' }}" style="display: none">
                                <label for="education_which" class="col-md-4 control-label">¿Cu&aacute;l? {!! ($rol->validarPermsFieldClient('education_which-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="education_which" type="text" class="form-control" name="education_which" value="{{ old('education_which') }}">

                                    @if ($errors->has('education_which'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('education_which') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('skills_experience-enable'))
                            <div class="form-group{{ $errors->has('skills_experience') ? ' has-error' : '' }}">
                                <label for="skills_experience" class="col-md-4 control-label">Habilidades o experiencia {!! ($rol->validarPermsFieldClient('skills_experience-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="skills_experience" type="text" class="form-control" name="skills_experience" value="{{ old('skills_experience') }}" {!! ($rol->validarPermsFieldClient('skills_experience-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('skills_experience'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('skills_experience') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('free_time-enable'))
                            <div class="form-group{{ $errors->has('free_time') ? ' has-error' : '' }}">
                                <label for="free_time" class="col-md-4 control-label">Tiempo libre {!! ($rol->validarPermsFieldClient('free_time-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="free_time" type="text" class="form-control" name="free_time" value="{{ old('free_time') }}" {!! ($rol->validarPermsFieldClient('free_time-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('free_time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('free_time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('allergy-enable'))
                            <div class="form-group{{ $errors->has('allergy') ? ' has-error' : '' }}">
                                <label for="allergy" class="col-md-4 control-label">Antecedentes al&eacute;rgicos {!! ($rol->validarPermsFieldClient('allergy-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="allergy" type="text" class="form-control" name="allergy" value="{{ old('allergy') }}" {!! ($rol->validarPermsFieldClient('allergy-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('allergy'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('allergy') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('addiction-enable'))
                            <div class="form-group{{ $errors->has('addiction') ? ' has-error' : '' }}">
                                <label for="addiction" class="col-md-4 control-label">Adicci&oacute;n {!! ($rol->validarPermsFieldClient('addiction-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <select id="addiction" class="form-control" name="addiction" {!! ($rol->validarPermsFieldClient('addiction-required')) ? 'required="required"' : '' !!}>
                                        <option value="">Seleccione</option>
                                        <option value="Alcohol" {{ (old('addiction') == "Alcohol") ? 'selected' : "" }}>Alcohol</option>
                                        <option value="Cigarrillo" {{ (old('addiction') == "Cigarrillo") ? 'selected' : "" }}>Cigarrillo</option>
                                        <option value="Alucinogenos" {{ (old('addiction') == "Alucinogenos") ? 'selected' : "" }}>Alucin&oacute;genos</option>
                                        <option value="Ninguno" {{ (old('addiction') == "Ninguno") ? 'selected' : "" }}>Ninguno</option>
                                    </select>

                                    @if ($errors->has('addiction'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('addiction') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->validarPermsFieldClient('goals-enable'))
                            <div class="form-group{{ $errors->has('goals') ? ' has-error' : '' }}">
                                <label for="goals" class="col-md-4 control-label">Antecedentes al&eacute;rgicos {!! ($rol->validarPermsFieldClient('goals-required')) ? '*' : '' !!}</label>

                                <div class="col-md-6">
                                    <input maxlength="255" id="goals" type="text" class="form-control" name="goals" value="{{ old('goals') }}" {!! ($rol->validarPermsFieldClient('goals-required')) ? 'required="required"' : '' !!}>

                                    @if ($errors->has('goals'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('goals') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($rol->login)
                        <div class="panel-heading">Contrase&ntilde;a</div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('auth/register.formInputPassword') }} *</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">{{ trans('auth/register.formInputConfirmPassword') }} *</label>

                            <div class="col-md-6">
                                <input maxlength="255" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth/register.formBtnRegister') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
    //Contrato
   $("#contract").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('contract_which-required')) ? '$("#contract_which").attr("required","required");' : '' !!}
         $(".contract_which").show();
      }else{
         $(".contract_which").hide();
      }
   });
   //EPS
   $("#eps").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('eps_which-required')) ? '$("#eps_which").attr("required","required");' : '' !!}
         $(".eps_which").show();
      }else{
         $(".eps_which").hide();
      }
   });
   //ARL
   $("#arl").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('arl_which-required')) ? '$("#arl_which").attr("required","required");' : '' !!}
         $(".arl_which").show();
      }else{
         $(".arl_which").hide();
      }
   });
   //Pension
   $("#pension").change(function(){
      if($(this).val() == "Si"){
          {!! ($rol->validarPermsFieldClient('pension_which-required')) ? '$("#pension_which").attr("required","required");' : '' !!}
         $(".pension_which").show();
      }else{
         $(".pension_which").hide();
      }
   });
   //Caja
   $("#caja").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('caja_which-required')) ? '$("#caja_which").attr("required","required");' : '' !!}
         $(".caja_which").show();
      }else{
         $(".caja_which").hide();
      }
   });
   //Afiliados
   $("#afiliados").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('afiliados_which-required')) ? '$("#afiliados_which").attr("required","required");' : '' !!}
         $(".afiliados_which").show();
      }else{
         $(".afiliados_which").hide();
      }
   });
   //Sura
   $("#sura").change(function(){
      if($(this).val() == "Si"){
         {!! ($rol->validarPermsFieldClient('sura_which-required')) ? '$("#sura_which").attr("required","required");' : '' !!}
         $(".sura_which").show();
      }else{
         $(".sura_which").hide();
      }
   });
   //Transporte
   $("#transport").change(function(){
      if($(this).val() == "Otro"){
         {!! ($rol->validarPermsFieldClient('transport_which-required')) ? '$("#transport_which").attr("required","required");' : '' !!}
         $(".transport_which").show();
      }else{
         $(".transport_which").hide();
      }
   });
   //Education
   $("#education").change(function(){
      if($(this).val() == "Otro"){
         {!! ($rol->validarPermsFieldClient('education_which-required')) ? '$("#education_which").attr("required","required");' : '' !!}
         $(".education_which").show();
      }else{
         $(".education_which").hide();
      }
   });
    $(function() {
        $('.date-picker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
        });
   });
</script>
@endsection
