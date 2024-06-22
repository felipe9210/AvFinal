<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
</head>
<body>
    <form action="{{route('clientes_store')}}" metod='post'>
        @csrf
        <label>Nome</label>
        <input type="text" name='nome' id='nome'>
        
        <label for="text">modelo</label>
        <input type="text" name="modelo" id="modelo">
        
        <label for="text">marca</label>
       <input type="text" name="marca" id="marca">
       <button type="submit">Cadastrar</button>
      

    </form>
</body>
</html>