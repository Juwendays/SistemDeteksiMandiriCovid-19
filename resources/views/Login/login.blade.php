@extends('layout/mainlogin')

@section('title', ' Deteksi Mandiri COVID-19')

@section('container')

<section class="forms">
        <div class="container">
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    <!-- <span class="fas fa-sign-in-alt"></span> -->
                    <img src="{{ asset('assets/starter/images/jateng1.png')}}" alt="" style="width:50px;height:50px">
                    <strong>Login Admin</strong>
                    <span>Diperuntukan hanya untuk admin</span>
                    
                                @if(\Session::has('alert'))
                                    <div class="alert alert-danger">
                                         <div>{{Session::get('alert')}}</div>
                                     </div>
                                @endif
                                @if(\Session::has('alert-success'))
                                     <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                    </div>
                                    @endif

                    <form action="{{ route('loginpost')}}" method="post" class="login-form">
                    @csrf
                        <fieldset>
                            <div class="form">
                                <div class="form-row">  

                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="emailadmin">Email</label>
                                    <input type="text" class="form-text @error('emailadmin') is-invalid @enderror" name="emailadmin" id="emailadmin" value="{{ old('emailadmin') }}">
                                    
                                    @error('emailadmin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-row">
                                    <span class="fas fa-eye"></span>
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-text @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                                    
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-row bottom">
                                    <div class="form-check">
                                        <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                        <label for="remenber"> remember me?</label>
                                    </div>
                                    <!-- <a href="#url" class="forgot">forgot password?</a> -->
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login" type="submit">Login <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- //login -->
            </div>

 @endsection