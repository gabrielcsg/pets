<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <h1 align="center" style="margin: 20px;">Pets</h1>
    <hr />
    <div class="container">
        <h2>Disponiveis para adoção</h2>
        <a href="/new">Adicionar novo pet</a>
        <div class="row" style="display: flex; justify-content: center; margin-top: 25px;">
            @foreach($lista as $pet)
            <div class="col-sm-3" style="display: flex; flex-direction: column; align-items: center; width: 250px; margin: 10px; background-color: #f1f1f1; border-radius: 20px; padding: 10px;">
                <img src="https://www.flaticon.com/svg/static/icons/svg/12/12638.svg" width="75px" height="75px" />
                <div style="margin-top: 10px;">
                    <strong>#{{$pet->id}}</strong>
                    <strong style="margin-left: 15px;">Nome:</strong> {{$pet->name}}
                </div>
                <div>
                    <strong>Raça:</strong> {{$pet->breed}}
                    <strong style="margin-left: 25px;">Tamanho:</strong> {{$pet->size}}
                </div>
                <a style="text-decoration: none; margin-top: 10px; color: blue;" href="/pet/delete/{{$pet->id}}" onclick="confirmRemove()">Remover</a>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        function confirmRemove() {
            alert('Pet removido');
        }
    </script>
</body>

</html>