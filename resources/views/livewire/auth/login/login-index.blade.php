<section>
    <div class="row">
        <div class="col-md-4 pr-md-0">
          <div class="auth-left-wrapper">
          </div>
        </div>
        <div class="col-md-8 pl-md-0">
          <div class="auth-form-wrapper px-4 py-5">
            <a href="#" class="noble-ui-logo d-block mb-2">SIM<span>ULINDO</span></a>
            <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
            <form class="forms-sample" action="{{ route('auth.login.post') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{old('email')}}" name="email">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" autocomplete="current-password" placeholder="Password" value="{{old('password')}}" name="password">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember me
                </label>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>