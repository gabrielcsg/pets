<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">
        form {
            display: flex;
            flex-direction: column;
        }

        input+input {
            margin-top: 8px;
        }

        button {
            margin-top: 20px;
            cursor: pointer;
        }

        a {
            margin-top: 10px;
            text-align: center;
        }

        .containerForm {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <h1 align="center" style="margin-top: 50px;">New Pet</h1>
    <div class="container containerForm">
        <form method="post" action="/new">
            @csrf
            Name: <input type="text" name="name" required />
            Breed: <input type="text" name="breed" required />
            Size: <input type="text" name="size" required />
            Gender: <input type="text" name="gender" required />
            <button type="submit">Save</button>
            <a href="/">Cancel</a>
        </form>
    </div>
</body>

</html>