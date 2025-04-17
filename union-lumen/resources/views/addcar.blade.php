<form action="/addcar" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Název:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="type">Typ:</label>
        <input type="text" id="type" name="type" required>
    </div>

    <div>
        <label for="spz">SPZ:</label>
        <input type="text" id="spz" name="spz" required>
    </div>

    <div>
        <label for="color">Barva:</label>
        <input type="text" id="color" name="color" required>
    </div>

    <div>
        <label for="image">Obrázek:</label>
        <input type="file" id="image" name="image" accept="image/*">
    </div>

    <button type="submit">Přidat vozidlo</button>
</form>
