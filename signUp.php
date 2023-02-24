<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\signUp.css" type="text/css">
    <title>Sign Up Form</title>
</head>
<body>
    <main>
        <div class="container">
          <div class="log-in__container">
            <form id="form" class="form" autocomplete="off">
              <h2>Regjistrohu</h2>
              <div class="form-control">
                <label for="username">Emri i përdoruesit</label>
                <input
                  type="text"
                  id="username"
                  placeholder="Shëno emrin tuaj të përdoruesit"
                />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="email">Adresa Elektornike</label>
                <input
                  type="text"
                  id="email"
                  placeholder="Shëno adresën elektronike"
                />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="password">Fjalëkalimi</label>
                <input
                  type="password"
                  id="password"
                  placeholder="Shëno fjalëkalimin"
                />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="password2">Konfirmimi i Fjalëkalimit</label>
                <input
                  type="password"
                  id="password2"
                  placeholder="Shëno fjalëkalimin përsëri"
                />
                <small>Error message</small>
              </div>
              <div class="buttons">
                <a href="index.html" class="cancel-button">Kthehu Mbrapa</a>
                <button type="submit">Regjistrohu</button>
              </div>
            </form>
          </div>
        </div>
      </main>
      <script src="javaScript\signUp.js"></script>
</body>
</html>