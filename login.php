<!DOCTYPE html>
<html lang="en">

<head>

  <title>Sepeda Listrik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color: #325662">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Login</h3>
              <form action="cek_login.php" method="POST">
                <div class="form-outline mb-4">
                  <label class="form-label" for="typeEmailX-2">Username</label>
                  <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" required />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                </div>
                <input class="btn btn-warning btn-lg btn-block" type="submit" value="login" name="login">
              </form>



              <!-- Checkbox -->
              <!-- <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div> -->


              <br>
              <a href="index.php">Back</a>

              <!-- <hr class="my-4">
      
                  <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                  <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>