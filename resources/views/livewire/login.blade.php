<div>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              {{-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo --> --}}

              <div class="card mb-3">

                <div class="card-body">
                  <x-flash-message/>
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>

                  <form wire:submit="login" class="row g-3">

                    <div class="col-12">
                      <label for="email" class="form-label">Username</label>
                        <input wire:model="email" type="email" name="email" class="form-control" id="email">
                        @error('email')
                        <div class="text text-danger show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </div>   
                        @enderror
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input wire:model="password" type="password" name="password" class="form-control" id="password">
                      @error('password')
                      <div class="text text-danger show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              {{-- <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div> --}}

            </div>
          </div>
        </div>

      </section>
</div>
