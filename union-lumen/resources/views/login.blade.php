<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
</head>
<body>
    <h1>Přihlášení</h1>

    <form action="/login" method="POST">
        <div>
            <label for="username">Uživatelské jméno:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Přihlásit se</button>
    </form>
</body>
</html>
