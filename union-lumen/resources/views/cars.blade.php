<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Union Lumen - Cars</title>
    <style>
        .car-item {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .delete-form {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Cars</h1>
    <div>
        @foreach ($cars as $car)
            <div class="car-item">
                <div class="car-info">
                    @if($car->image)
                            <img src="/{{ $car->image }}" alt="Obrázek vozidla" class="car-image" width="100">
                        @else
                        <p>Žádný obrázek</p>
                    @endif
                    <p>ID: {{ $car->id }}</p>
                    <p>Název: {{ $car->name }}</p>
                    <p>Typ: {{ $car->type }}</p>
                    <p>SPZ: {{ $car->spz }}</p>
                    <p>Barva: {{ $car->color }}</p>
                </div>
                <div class="delete-form">
                <a href="/cars/{{ $car->id }}/delete">Odstranit</a>
                <a href="/cars/{{ $car->id }}/edit">Upravit</a>
                </div>
            </div>
        @endforeach
    </div>

    @include('addcar')
</body>
</html>
