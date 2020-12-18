<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <style></style>
</head>

<body>
    <h1 align="center">Pets</h1>
    <hr />
    <h2>Disponiveis para adoção:</h2>
    <a href="/new">Adicionar novo pet</a>
    <div>
        <ul>
            @foreach($lista as $pet)
            <li style="list-style: none;">
                <div style="display: flex; flex-direction: column; align-items: center; width: 250px; margin-top: 20px; background-color: #f1f1f1; border-radius: 20px; padding: 10px;">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/12/12638.svg" width="75px" height="75px" />
                    <div style="margin-top: 10px;">
                        <strong>#{{$pet->id}}</strong>
                        <strong style="margin-left: 15px;">Nome:</strong> {{$pet->name}}
                    </div>
                    <div>
                        <strong>Raça:</strong> {{$pet->breed}}
                        <strong style="margin-left: 25px;">Tamanho:</strong> {{$pet->size}}
                    </div>
                    <a style="text-decoration: none; margin-top: 10px; color: blue;" href="/pet/delete/{{$pet->id}}">Remover</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>