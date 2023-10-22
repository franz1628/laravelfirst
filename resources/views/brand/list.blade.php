<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h3>Brand List</h3>
    <hr>
    <a href="{{route('brand.create')}}" class="btn btn-warning">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($models as $key => $model)
                <tr>
                    <td>
                        {{$key}}
                    </td>
                    <td>
                        {{$model->description}}
    
                    </td>
                    <td>
                        <a class="btn btn-info" href="">Editar</a>
                        <button class="btn btn-danger" type="button">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>