@extends('layouts.auth')

@section('content')
<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
.m
{
  background: #03e9f4;
  color: red;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4; 
}
.j
{
  font-family:arial;
  color:white;
  fint-size:16px;
  padding:7px 15px 7px 15px;
}
.a
{
  background-color:red;
  color:white;
  font-family:arial;
}
.a:hover
{
  font-size:15px;
  background: red;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px red,
              0 0 25px red,
              0 0 50px red,
              0 0 100px red;
              padding:20px 20px 20px 20px;
}
input
{
  background: rgba(0,0,0,.5);
}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
.k
{
    float:right;
    position: relative;
  display: inline-block;
  padding: 10px 10px;
  color: #03e9f4;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 4px
}
.k:hover
{
background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  font-size:10px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
              padding:20px 20px 20px 20px;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}
.z{
  font-size:25px;
}
.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 10px;
  color: #03e9f4;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  font-size:10px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}
button:hover
{
 background: #03e9f4;
  color: #fff;
  border:1px solid #03e9f4;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}
button
{
  background: #03e9f4;
    color: #fff;
    border:1px solid #03e9f4;
    border-radius:5px;  
    font-size:15px;
    
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>
<a href="{{ route('auth.register') }}"><div class="k">Register</div></a>
<div class="login-box">
   <h2>Login</h2>
                @if (count($errors) > 0)
                <a><div class="a"><span></span><span></span><span></span><span></span>
                   <strong> <h4>Warning !!!</h4></strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div></a>
                @endif

                <form role="form" method="POST"action="{{ url('login') }}">
                {{ csrf_field() }}


                           <div class="user-box">
                           <input type="email"                                 
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email') }}" required>

        <label >@lang('quickadmin.qa_email')</label>
      </div>

      <div class="user-box">
      <input type="password" class="form-control" name="password" required>
            
                                   <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>
      </div>
                     
                    <div >
                        <div >
                            <a href="{{ route('auth.password.reset') }}" ><span></span><span></span><span></span><span></span>@lang('quickadmin.qa_forgot_password')</a>
                            <br>
                      
                    <div >
                        <div >
                         <a>   <label>
                            <span></span><span></span><span></span><span></span>   <input type="checkbox"
                                       name="remember"> @lang('quickadmin.qa_remember_me')
                            </label></a>
                            <a><span></span><span></span><span></span><span></span> 
                            <button class="z"type="submit">
                           @lang('quickadmin.qa_login')
                            </button></a>
                </form>            
@endsection