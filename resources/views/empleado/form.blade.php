<div class="row padding-1 p-1">
    <div class="col-md-6">
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $empleado?->name) }}" id="name" placeholder="Nombre Completo">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="empresa_id" class="form-label">{{ __('Empresa') }}</label>
            <select name="empresa_id" class="form-control @error('empresa_id') is-invalid @enderror" id="empresa_id">
                <option value="">{{ __('Selecciona una empresa') }}</option>
                @foreach($empresas as $id => $nombre)
                    <option value="{{ $id }}" {{ old('empresa_id', $empleado?->empresa_id) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('empresa_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">{{ __('Género') }}</label>
            <select name="genero" class="form-control @error('genero') is-invalid @enderror" id="genero">
                <option value="">{{ __('Selecciona un género') }}</option>
                <option value="masculino" {{ old('genero', $empleado?->genero) == 'masculino' ? 'selected' : '' }}>
                    {{ __('Masculino') }}
                </option>
                <option value="femenino" {{ old('genero', $empleado?->genero) == 'femenino' ? 'selected' : '' }}>
                    {{ __('Femenino') }}
                </option>
            </select>
            {!! $errors->first('genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('Fecha de Nacimiento') }}</label>
            <input type="date" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $empleado?->fecha_nac) }}" id="fecha_nac" placeholder="Fecha de Nacimiento">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="curp" class="form-label">{{ __('CURP') }}</label>
            <input type="text" name="curp" class="form-control @error('curp') is-invalid @enderror" value="{{ old('curp', $empleado?->curp) }}" id="curp" placeholder="CURP">
            {!! $errors->first('curp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $empleado?->telefono) }}" id="telefono" placeholder="Numero de contacto">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-2 mb20">
            <label for="sueldo_diario" class="form-label">{{ __('Sueldo díario') }}</label>
            <input type="number" name="sueldo_diario" class="form-control @error('sueldo_diario') is-invalid @enderror" value="{{ old('sueldo_diario', $empleado?->sueldo_diario) }}" id="sueldo_diario" placeholder="$">
            {!! $errors->first('sueldo_diario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
