<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Union Lumen - Edit Car</title>
</head>
<body>
    <h1>Edit Car</h1>
    <form action="/cars/{{ $car->id }}/update" method="post">
        <input type="text" name="name" placeholder="Name" value="{{ $car->name }}">
        <input type="text" name="type" placeholder="Type" value="{{ $car->type }}">
        <input type="text" name="spz" placeholder="SPZ" value="{{ $car->spz }}">
        <input type="text" name="color" placeholder="Color" value="{{ $car->color }}">
        <button type="submit">Update Car</button>
    </form>
</body>
</html>
