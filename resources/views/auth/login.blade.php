@extends('layout.layout')
@section('content')
    <section class="container">

        <div class="row my-5">
            <div class="col col-md-6 offset-md-3">
                <form method="POST" action="{{ route('login') }}" class="">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="emailAddress" placeholder="name@example.com" required autofocus autocomplete="username" />
                        <label for="emailAddress">Email Address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" required />
                        <label for="password">Password</label>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn btn-dark primary-button ms-3">Log In <span class="fa fa-arrow-circle-right"></span></button>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
