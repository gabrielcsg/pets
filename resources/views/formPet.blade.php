<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <h1 align="center" style="margin-top: 50px;">New Pet</h1>
    <div class="container" style="display: flex; align-items: center; justify-content:center; flex-direction: column;">
        <form method="post" action="" style="display:flex; flex-direction: column;">
            @csrf
            Name: <input type="text" name="name" required style="margin-bottom: 8px;" />
            Breed: <input type="text" name="breed" required style="margin-bottom: 8px;" />
            Size: <input type="text" name="size" required />
            <button type="submit" style="margin-top: 20px; cursor: pointer;">Save</button>
            <a href="/" style="margin-top: 10px; text-align: center;">Cancel</a>
        </form>
    </div>
</body>

</html>