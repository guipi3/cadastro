<div>
    <div class="form-group row">
        <label for="estados" class="col-2 col-form-label">Estado:</label>
        <div class="col-10">
            <select wire:model="estado" class="form-control" id="estados" name="estado">
            <option value="" selected>{{ __('Selecione o Estado')}}</option>
                @foreach($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="cidades" class="col-2 col-form-label">Cidade:</label>
        <div class="col-10">
            <select class="form-control" wire:loading.class="select-loading" id="cidades" name="cidade">
            <option value="" selected>{{ __('Selecione a Cidade')}}</option>
            @if($this->estado)
                @foreach($municipios as $municipio)
                    <option value="{{$municipio->nome}}">{{$municipio->nome}}</option>
                @endforeach
            @endif
            </select>
        </div>
    </div>
</div>