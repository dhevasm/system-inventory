<x-auth-layout>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card my-5">
              <form action="{{ route("forgot") }}" method="POST" class="card-body cardbody-color p-lg-5">
                @csrf
                <div class="text-center">
                  <img src="favicon.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-2"
                    width="200px" alt="profile">
                </div>
                <h1 class="fs-3 mb-3">Reset Password</h1>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" autocomplete="email" required>
                    <label for="email">Email</label>
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
                <div class="text-center"><button type="submit" class="btn btn-color px-5 py-2 mb-3 w-100">Send Reset Email</button></div>
                <p class="text-center"><a href="{{ route("login") }}">Back To Login Page</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-auth-layout>
