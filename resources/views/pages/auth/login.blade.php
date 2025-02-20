<x-auth-layout>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card my-5">
              <form class="card-body cardbody-color p-lg-5">
                <div class="text-center">
                  <img src="favicon.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="mb-3 form-floating position-relative">
                  <input type="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
                  <i class="bi bi-eye position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="togglePassword"></i>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-3 w-100">Login</button></div>
                <div id="emailHelp" class="form-text text-center mb-3 text-dark">Not
                  Registered? <a href="#" class="text-dark fw-bold"> Create an
                    Account</a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
</x-auth-layout>
