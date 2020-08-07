@extends('layouts.app')

@section('content')
         <!-- Sign up form -->
         <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class=" @error('password') is-invalid @enderror" id="pass" placeholder="Password" required autocomplete="new-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" required autocomplete="new-password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                {{-- <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/> --}}
                                <button type="submit" class="form-submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('logins/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
