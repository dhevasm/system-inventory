<x-auth-layout>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card my-5">
              <form action="{{ route("login") }}" method="POST" class="card-body cardbody-color p-lg-5">
                @csrf
                <div class="text-center">
                  <img src="favicon.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-2"
                    width="200px" alt="profile">
                </div>
                <h1 class="fs-3 mb-3">Login</h1>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" autocomplete="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="mb-3 form-floating position-relative">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  <label for="password">Password</label>
                  <i class="bi bi-eye position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="togglePassword"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <p class="text-end"><a href="{{ route("forgot") }}">Forgot Password?</a></p>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-center"><button type="submit" class="btn btn-color px-5 py-2 mb-3 w-100">Login</button></div>
                <div id="emailHelp" class="form-text text-center mb-3 text-dark">Not
                  Registered? <a href="{{ route('register') }}" class="text-dark fw-bold"> Create an
                    Account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-auth-layout>
