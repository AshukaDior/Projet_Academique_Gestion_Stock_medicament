<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Easy Pharmar - Login page</title>
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <img src="assets/img/Logo.png" alt="" />
        <span> Easy <span class="text-green-light">PHARMAR</span></span>
      </div>
      <div class="wrapper">
        <form action="login.verification.php" class="login-form" method="POST">
          <div class="text-field">
            <i class="icon fa-solid fa-user"></i>
            <input
              type="email"
              name="email"
              id="email-text-field"
              required
              placeholder="Email"
            />
            <div class="valid-status">
              <i class="icon-check active"></i>
              <i class="icon-check"></i>
            </div>
          </div>
          <div class="text-field">
            <i class="icon fa-solid fa-lock"></i>
            <input
              type="password"
              name="password"
              id="password-text-field"
              required
              placeholder="Mot de passe"
            />
            <div class="valid-status">
              <i class="icon-check active"></i>
              <i class="icon-check"></i>
            </div>
          </div>
          <div class="btn-group">
            <div class="checkbox-wrapper">
              <input type="checkbox" name="remember" id="remember-checkbox" />
              <label for="remember">Se souvenir de moi</label>
            </div>
            <button class="login-btn" type="submit" name="login" value="login">Connectez-vous</button>
          </div>
        </form>
        <div class="links">
          <a href="#" class="link forget-btn">Mot de passe oublié?</a>
        </div>
      </div>
    </div>
  </body>
</html>
