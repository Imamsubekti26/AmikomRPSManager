<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Amikom RPS Manager</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/custom.css" />
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center full-body">
      <div class="card login-card p-5">
        <h4 class="text-center">
          <strong>Amikom RPS Manager</strong>
        </h4>
        <form method="get" action="./dashboard.html">
          <div class="form-group mb-3">
            <label class="form-label" htmlFor="nik"> NIK </label>
            <input class="form-control" type="text" id="nik" />
          </div>
          <div class="form-group mb-3">
            <label class="form-label" htmlFor="password"> Password </label>
            <input class="form-control" type="password" id="password" />
          </div>
          <div
            class="d-flex justify-content-between align-items-center mt-4 mb-3"
          >
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberme" />
              <label class="form-check-label" htmlFor="rememberme">
                Remember Me
              </label>
            </div>
            <button class="btn btn-success px-5" type="submit">Login</button>
          </div>
        </form>
        <hr class="mt-3" />
        <p class="text-center mb-3">or login with:</p>
        <div class="d-grid gap-2">
          <button class="btn btn-light border">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png"
              alt="google-icon"
              width="16"
              height="16"
              class="me-2"
            />
            Amikom Google Account
          </button>
        </div>
      </div>
    </div>
    <script src="./assets/js/login.js"></script>
  </body>
</html>
