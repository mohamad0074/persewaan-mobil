@extends('layouts.app')

@section('content')



<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-5 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Login</h3>
        <form role="form" id="contact-form" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
          <div class="card-body">
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                    <input placeholder="Masukkan Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                    <input placeholder="Masukkan Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>
            <div class="row">

                        <div class="form-group row mb-0">
                            <center>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            </center>
                        </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
