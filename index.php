<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Fuszerka | rejestracja</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Witaj!</h1>
        </header>
        <div class="info">
            <p class="desc">Zarejestruj się i dołącz do szkolnej społeczności!</p>
        </div>
        <form method="post" action="rejestracja_handle.php">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email">
            <label for="Haslo">Haslo</label>
            <input type="password" name="password" id="password">
            <label for="repeat">Powtórz hasło</label>
            <input type="password" name="repeat" id="repeat">
            <div class="submit-cont">
                <button class="submit" type="submit">Zarejestruj</button>
            </div>
        </form>
        <div class="have-cont">
            <p class="have">Masz już konto? <a href="login.php" class="log-btn">Zaloguj się</a></p>
        </div>
    </div>
</body>
</html>