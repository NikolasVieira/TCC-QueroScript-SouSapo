<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>Categorias</title>
</head>

<body>-
    <a class="waves-effect waves-light btn" href="{{ url('categoria/create') }}">Adicionar categoria</a>
    <hr>
    <br>
   
   
        <table>
            <thead>
              <tr>
                  <th>Titulo</th>
                  <th>opcoes</th>
              </tr>
            </thead>
            @foreach ($categoria as $categorias)
            <tbody>
              <tr>
                <td> {{ $categorias->titulo }}</td>
               
                <td><a  class="waves-effect waves-light btn" href="{{ route('categoria.edit', $categorias->id) }}">Editar</a>
                    <a  class="waves-effect waves-light btn" href="{{ url('delete', ['id' => $categorias->id]) }}">Remover</a></td>
              </tr>
              
             
            </tbody>
            @endforeach
          </table>
                
   
    
</body>

</html>
