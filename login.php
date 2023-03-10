
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="C:\Users\Admin\Desktop\AGJENSIONI TURISTIK\CSS\login.css">
    <title>Form Validation</title>

</head>
<body>
    <div class="container"> 
      <div class ="log-in__container">
        <form id="form" action="/">
            <h1>Kyçuni</h1>
            <div class="form-control">
                <label for="username" id="ep">Emri i përdoruesit</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="form-control">
                <label for="password" id="f">Fjalëkalimi</label>
                <input type="password" name="password" id="password">
                <div class="error"></div>
            <button type="submit" id="signUpButton" class="logIn"> <b>Hyni</b> </button>
        </div>
            <p></p>
            <a href="signUp.php">Dëshironi të regjistroheni?</a>
        </form>
        </div>
    </div>
    <script src="JavaScript\logIn.js"></script>
</body>
</html>