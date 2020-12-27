@extends('layout/mainlogin')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')


<!-- register -->
<section class="forms">
        <div class="container">
        <div class="forms-grid">
                <div class="register">
                <img src="{{ asset('assets/starter/images/jateng1.png')}}" alt="" style="width:50px;height:50px">
                    <strong>Buat Akun Admin Baru</strong>


                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                    <form action="/registerPost" method="post" class="register-form">
                        @csrf
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label  for="name">Name</label>
                                    <input type="text" class="form-text @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">

                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label  for="emailadmin">E-mail</label>
                                    <input type="emailadmin" class="form-text @error('emailadmin') is-invalid @enderror" name="emailadmin" id="emailadmin"  value="{{ old('emailadmin') }}">

                                    @error('emailadmin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-text @error('password') is-invalid @enderror" name="password" id="password"  value="{{ old('password') }}">

                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label for="confirmation">Password Confirmation</label>
                                    <input type="password" class="form-text @error('confirmation') is-invalid @enderror" id="confirmation" name="confirmation">
                                </div>


                                <div class="form-row button-login">
                                    <button class="btn btn-login">Create <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                        </form>

                        <!-- <span class="create-account">Or create account using social media!</span> -->

                </div>
                <!-- //register -->

                @endsection