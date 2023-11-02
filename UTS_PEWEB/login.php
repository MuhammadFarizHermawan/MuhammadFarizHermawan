
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="Login.css" />
  </head>
  <body>
    <div
      class="bacground d-flex justify-content-center align-items-center flex-column"
    >
      <div class="card w-40 mb-2 pt-3">
        <img src="amikom log.png" class="img-size" />
        <div class="card-body text-center">
          <b>
            <h3>Login</h3>
          </b>
        </div>
      </div>

      <div class="card w-40">
        <div class="card-body text-center">
        <form action="PHP/con_login.php" method="POST">
          <input
            type="text"
            id="inputPassword5"
            class="form-control mb-3"
            aria-describedby="passwordHelpBlock"
            placeholder="Masukan Username"
            name="username"
          />

          <input
            type="password"
            id="inputPassword5"
            class="form-control mb-3"
            aria-describedby="passwordHelpBlock"
            placeholder="Masukan password"
            name="password"
          />

          <div class="form-check text-start mb-3">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Human Verification
            </label>
          </div>

          <div>
              <button class="btn-btn-primary-mb-3 img-hover" type="submit">
                <b>Login</b>
              </button>
          </div>
          </form>

          <div class="mb-3 mt-3">
            <b> atau</b>
          </div>

          <div class="d-grid gap-2 d-flex justify-content-center">
          <button class="btn-btn-primary-mb-3 img-hover" type="button">
              <a href="register.php" style="text-decoration: none"
                ><b>Register</b></a
              >
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
