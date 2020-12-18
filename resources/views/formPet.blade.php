<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content:center; flex-direction: column;">
        <h1>New Pet</h1>
        <form method="post" action="" style="display:flex; flex-direction: column;">
            @csrf
            Name: <input type="text" name="name" required style="margin-bottom: 8px;"/>
            Breed: <input type="text" name="breed" required style="margin-bottom: 8px;"/>
            Size: <input type="text" name="size" required />
            <button type="submit" style="margin-top: 20px; cursor: pointer;">Save</button>
            <a href="/" style="margin-top: 10px; text-align: center;">Back to home</a>
        </form>
    </div>
</body>

</html>