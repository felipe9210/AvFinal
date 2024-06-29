<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
form {{route ('excluir_cliente, ['id'=>$cliente->id])}} 
@csrf 
label . tem certeza? input value="{{cliente->nome}}" button sim
</body>
</html>