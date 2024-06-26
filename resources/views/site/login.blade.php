<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>LOGIN</title>
    @yield('styles') {{-- yield: fazer importação dos css --}}
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="container">
		<div class="img">

            <img src="{{asset('img/bg.svg')}}">
		</div>

		<div class="login-content">

			<form action="{{ route('site.login')}}" method="post" >
                @csrf

                <img src="{{asset('img/avatar.svg')}}">
				<h2 class="title">SEJA BEM-VINDO</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>

           		   <div class="div">
           		   		<h5 style="color">EMAIL</h5>
           		   		<input type="email" value="{{ old('email') }}" name="email" class="input">
                        <br>  <br>
                        <span style="color:red">
                            {{ $errors->has('email') ? $errors->first('email') : '' }}
                         </span>

           		   </div>

           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="div">
           		    	<h5>SENHA</h5>
           		    	<input type="password" value="{{ old('senha') }}"  name="senha" class="input">
                           <br>  <br>
                           <span style="color: red">
                            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                         </span>


            	   </div>
            	</div>
                 <br>  <br>
            	<a href="#">Não Tem uma Conta?</a>
            	<input type="submit" class="btn" value="ENTRAR">
            </form>
        </div>
        {{ isset($erro) && $erro != '' ? $erro : '' }}
    </div>

    @yield('script')
    <script src="/js/login.js"></script>
</body>
</html>
