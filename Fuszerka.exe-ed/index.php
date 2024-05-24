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
        <form method="post">
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
        <?php
        if(isset($_POST['email'])){

            $db_host = "localhost";
            $db_username = "root";
            $db_password="";
            $database="tutorsfind";
            
            $email = $_POST["email"];
            $password = $_POST["password"];
            $repeatPassword= $_POST["repeat"];
            
            
            $conn = mysqli_connect($db_host, $db_username, $db_password, $database);
            $hashed_password = hash('sha256', $password);
            
            $query="INSERT INTO user (email,password,isTutor) VALUES ('$email', '$hashed_password',0);";
            
            if($password == $repeatPassword){
                if(str_len($password)>=8 && strtolower($password) !== $password && preg_match('~[0-9]+~', $password)){
                    mysqli_query($conn, $query);
                }else{
                    echo "<p>Hasło nie spełnia wymagań</p>";
                }
            }else{
                echo "<p>Hasła nie są takie same</p>";
            }
            
            mysqli_close($conn);
            header('location:login.php');
            
            
            
        }
        ?>
        <div class="have-cont">
            <p class="have">Masz już konto? <a href="login.php" class="log-btn">Zaloguj się</a></p>
        </div>
    </div>
</body>
</html>