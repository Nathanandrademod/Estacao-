<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
    <h1>Novo Aluno</h1>
    <form method="POST" action="Listagem.php">
        Matricula: <input type="text" name="matricula" 
        class="form-control"/><br/>
        Nome: <input type="text" name="nome" 
        class="form-control"/><br/>
        Entrada: <input type="number" name="entrada" 
        class="form-control"/><br/>
        <input type="submit" value="Adicionar" 
        class="btn btn-primary"/>
    </form>
    
</body>
</html>