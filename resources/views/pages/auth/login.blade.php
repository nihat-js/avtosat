<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Findal Service</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    /> -->

    <link rel="stylesheet" href="css/app.css" />
    <!-- <link rel="stylesheet" href="css/output.css" /> -->
  </head>
  <body class="page-login">
    <main>
      <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
          <div class="auth-page-form">
            <div class="text-center">
              <a href="/">
                <img src="/img/logoipsum-265.svg" alt="" />
              </a>
            </div>
            <h1 class="auth-page-title">Login</h1>

            <form action="" method="post">
              <div class="form-group">
                <input type="email" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <input type="password" placeholder="Your Password" />
              </div>
              <div class="text-right mb-medium">
                <a href="/password-reset.html" class="auth-page-password-reset"
                  >Reset Password</a
                >
              </div>

              <button class="btn btn-primary btn-login w-full">Login</button>

              <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                <button
                  class="btn btn-default flex justify-center items-center gap-1"
                >
                  <img src="/img/google.png" alt="" style="width: 20px" />
                  Google
                </button>
                <button
                  class="btn btn-default flex justify-center items-center gap-1"
                >
                  <img src="/img/facebook.png" alt="" style="width: 20px" />
                  Facebook
                </button>
              </div>
              <div class="login-text-dont-have-account">
                Don't have an account? -
                <a href="/signup.html"> Click here to create one</a>
              </div>
            </form>
          </div>
          <div class="auth-page-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
      integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="js/app.js"></script>
  </body>
</html>
