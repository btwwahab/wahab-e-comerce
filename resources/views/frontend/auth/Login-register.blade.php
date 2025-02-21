@extends('frontend.layout.master')

@section('title', 'Login/Register')

@section('content')
    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== BREADCRUMB ===============-->
        <section class="breadcrumb">
            <ul class="breadcrumb__list flex container">
                <li><a href="index.html" class="breadcrumb__link">Home</a></li>
                <li><span class="breadcrumb__link">></span></li>
                <li><span class="breadcrumb__link">Login / Register</span></li>
            </ul>
        </section>

        <!--=============== LOGIN-REGISTER ===============-->
        <section class="login-register section--lg">
            <div class="login-register__container container grid">
                <div class="login">
                    <h3 class="section__title">Login</h3>
                    <form action="{{ route('user-login') }}" method="POST" class="form grid">
                        @csrf
                        <input type="email" name="email" placeholder="Your Email" class="form__input" required />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" name="password" placeholder="Your Password" class="form__input"
                            autocomplete="off" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form__btn">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="register">
                    <h3 class="section__title">Create an Account</h3>
                    <form action="{{ route('user-register') }}" method="POST" class="form grid">
                        @csrf
                        <input type="text" name="name" placeholder="Username" class="form__input" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="email" name="email" placeholder="Your Email" class="form__input" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" name="password" placeholder="Your Password" class="form__input"
                            autocomplete="off" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="form__input" autocomplete="off"/>
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form__btn">
                            <button type="submit" class="btn">Submit & Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection
