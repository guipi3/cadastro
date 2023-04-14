
@extends('template.main')
@section('content')
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Cadastro</a> </li>
                <li class="nav-item" > <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Consulta</a> </li>
              </ul>
              <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                  <form id="c_form-h" class="" action="{{ route('cadastrar_cliente') }}" method="POST">
                  @csrf
                    <div class="form-group row"> <label for="inputnome" class="col-2 col-form-label">Nome:</label>
                      <div class="col-10">
                        <input type="text" name="nome" class="form-control" id="inputnome" placeholder="Nome Completo" value="{{old('nome')}}" required="required"> </div>
                    </div>
                    <div class="form-group row"> <label for="inputcpf" class="col-2 col-form-label">CPF:</label>
                      <div class="col-10">
                        <input type="text" name="cpf" class="form-control" id="inputcpf" placeholder="xxx.xxx.xxx-xx" value="{{old('cpf')}}" required="required">
                        @error('cpf')<span class="danger" style="color:red">{{$message}}</span>@enderror
                      </div>
                    </div>
                    <div class="form-group row"> <label for="inputendereco" class="col-2 col-form-label">Endereço:</label>
                      <div class="col-10">
                        <input type="text" name="endereco" class="form-control" id="inputendereco" value="{{old('endereco')}}" placeholder="Endereço"> </div>
                    </div>

                    @livewire('estados')

                    <div class="form-group row"> <label for="inputdataaniversario" class="col-2 col-form-label">Data Nascimento:</label>
                      <div class="col-10">
                        <input type="date" name="nascimento" value="{{old('nascimento')}}" class="form-control" id="inputdataaniversario" placeholder="xx/xx/xxxx" required="required"> </div>
                    </div>
                    <div class="form-group row"> <label for="inputsexo" class="col-2 col-form-label">Sexo:</label>
                      <div class="col-10">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                          <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                          <label class="form-check-label" for="feminino">Feminino</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" contenteditable="true">Cadastrar</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                  <div class="table-responsive">
                    @livewire('clientes')
                  </div>
                </div>
                <div class="tab-pane fade" id="tabthree" role="tabpanel">
                  <p class="">In my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @livewireScripts

    @section('scripts')
      <script>
        jQuery(function($){
          //Retorno de validação para select
          $('#estado').val('{{old('estado')}}').trigger('change')
        })

        document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('component.initialized', (component) => {console.log('carregadando.....1')})
        Livewire.hook('element.initialized', (el, component) => {console.log('carregadando.....2')})
        Livewire.hook('element.updating', (fromEl, toEl, component) => {console.log('carregadando.....3')})
        Livewire.hook('element.updated', (el, component) => {console.log('carregadando.....4')})
        Livewire.hook('element.removed', (el, component) => {console.log('carregadando.....5')})
        Livewire.hook('message.sent', (message, component) => {console.log('carregadando.....6')})
        Livewire.hook('message.failed', (message, component) => {console.log('carregadando.....7')})
        Livewire.hook('message.received', (message, component) => {console.log('carregadando.....8')})
        Livewire.hook('message.processed', (message, component) => {console.log('carregadando.....9')})
    });
      </script>
    @stop
@endsection