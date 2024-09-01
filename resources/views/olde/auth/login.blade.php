@extends('Dashboard.layouts.master2')
@section('content')
<div class="page">
		
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('Dashboard/img/media/login.jpg')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                @include('Dashboard.messages_alert')
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label>Email</label> 
                                        <input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" class="form-control" placeholder="Enter your email">
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label> 
                                        <input class="form-control" placeholder="Enter your password" id="password" type="password" name="password" required autocomplete="current-password" >
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <button type="submit"  class="btn btn-main-primary btn-block">{{ __('Log in') }} {{trans('Dashboard/login_trans.user')}}</button>
                                </form>
                                <div class="main-signin-footer mt-5">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{  route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
    
</div>
@endsection