<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style></style>
</head>

<body>
<h1 align="center" style="margin: 20px;">Pets</h1>
<hr/>
<div class="container">
    <div>
        <h2>Disponiveis para adoção</h2>
        <div style="text-align:end"><a href="/new">Adicionar novo pet</a></div>
    </div>
    <div class="row" style="margin-top: 25px; margin-bottom: 50px">
        @foreach($lista as $pet)
            <div class="col-sm-3"
                 style="display: flex; flex-direction: column; align-items: center; width: 250px; margin: 10px; background-color: #f1f1f1; border-radius: 20px; padding: 10px;">
                <strong style="align-self: flex-end;">#{{$pet->id}}</strong>
                <img src="https://www.flaticon.com/svg/static/icons/svg/12/12638.svg" width="80px" height="80px"/>
                <div style="margin-top: 15px; align-self:flex-start">
                    <strong>Nome:</strong> {{$pet->name}}</br>
                    <strong>Raça:</strong> {{$pet->breed}}</br>
                    <strong>Tamanho:</strong> {{$pet->size}}</br>
                    <strong>Genero:</strong> {{$pet->gender}}
                </div>
                <div style="display: flex; justify-content: center; align-items: center">
                    <a style="text-decoration: none; margin-top: 10px; color: blue; margin-right: 5px"
                       href="/pet/update/{{$pet->id}}">Editar</a>
                    <a style="text-decoration: none; margin-top: 10px; color: blue; margin-left: 5px"
                       href="/pet/delete/{{$pet->id}}" onclick="confirmRemove()">Remover</a>
                </div>
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
