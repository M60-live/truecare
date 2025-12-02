@extends('layout.layout')
@section('content')

    <section class="container">
        <div class="row my-5">
            <div class="col col-md-6 offset-md-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required autofocus />
                        <label for="name">name</label>
                    </div>

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required />
                        <label for="email">Email</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                        <label for="password">Password</label>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required />
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button type="submit" class="btn btn-dark primary-button ms-3">Register <span class="fa fa-arrow-circle-right"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
