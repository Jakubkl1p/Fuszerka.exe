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
            <p class="desc">Zaloguj się, aby kontynuować.</p>
        </div>
        <div class="form-cont">
        <form method="post">
            <label for="Email">Email</label>
            <input type="email" name="email_log" id="email">
            <label for="Haslo">Haslo</label>
            <input type="password" name="password_log" id="password">
            <div class="submit-cont">
                <button class="submit" type="submit">
                    ZALOGUJ
                </button>
            </div>
        </form>
        <?php
        if(isset($_POST["email_log"])){

            $db_host = "localhost";
            $db_username = "root";
            $db_password="";
            $database="tutorsfind";
    
            $email = $_POST["email_log"];
            $password = $_POST["password_log"];
    
            $conn = mysqli_connect($db_host, $db_username, $db_password, $database);
    
            $query = "SELECT email,password FROM user";
    
            if($result = mysqli_query($conn,$query)){
                while($row = mysqli_fetch_row($result)){
                    $takenMail = $row[0];
                    $takenPassword = $row[1];
                    if($takenMail == $email && $takenPassword == hash('sha256',$password)){
                    session_start();
                    $_SESSION["email"] = $email;
                    echo $_SESSION["email"];
                    }else{
                        echo "<p >Nieporawne dane logowania</p>";
                    }
                }
            }
        }
?>
        </div>
        <div class="have-cont">
            <p class="have">Jesteś nowy? <a href="index.php" class="log-btn">Zarejestruj się</a></p>
        </div>
    </div>
</body>
</html>