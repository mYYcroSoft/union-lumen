<h1>Online cloud</h1>

<div>
    @foreach ($files as $file)
            <div class="car-item">
                <div class="car-info">

                    <p>Soubor: {{ basename($file) }}</p>
                </div>
                <div class="delete-form">
                <a href="/download/{{  urlencode($file->filename) }}">Stáhnout</a>
                </div>
            </div>
    @endforeach
</div>

<form action="/uploadfile" method="POST" enctype="multipart/form-data">
    <div>
        <label for="file">Soubor:</label>
        <input type="file" id="file" name="file" required>
    </div>

    <button type="submit">Nahrát</button>
</form>
