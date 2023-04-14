<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Cliente</title>
</head>
<body>
    <form action="{{ route('cadastrar_cliente') }}" method="POST">
        @csrf
        <label for="">Nome</label><br/>
        <input type="text" name="nome"><br/>
        <label for="">CPF</label><br/>
        <input type="text" name="cpf"><br/>
        <label for="">Endereço</label><br/>
        <input type="text" name="Endereço"><br/>
        <label for="">Data Nascimento</label><br/>
        <input type="text" name="nascimento"><br/>
        <label for="">Sexo</label><br/>
        <input type="text" name="sexo"><br/>
        <label for="">Estado</label><br/>
        <input type="text" name="estado"><br/>
        <label for="">Cidade</label><br/>
        <input type="text" name="cidade"><br/>
        <button>Salvar</Button>
    </form>
</body>