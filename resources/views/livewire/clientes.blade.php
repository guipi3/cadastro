<div>
  
<table class="table table-striped table-borderless">
  
    <input type="text" wire:model="search" placeholder="Nome..."/>

    
    @if(!count($dados))
       <div class="alert alert-info" style="margin-top: 40px" role="alert">
            Nehnum resultado encontrado.
        </div>
        @php return; @endphp
        
    @endif
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Data Nascimento</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Sexo</th>
    </tr>
    </thead>

    <tbody> 
        @foreach ($dados as $cad)
            <tr>
                <th scope="row">1</th>
                <td>{{$cad->nome}}</td>
                <td>{{$cad->cpf}}</td>
                <td>{{$cad->nascimento}}</td>
                <td>{{$cad->estado}}</td>
                <td>{{$cad->cidade}}</td>
                <td>{{$cad->sexo}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>