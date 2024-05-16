<script src="functii.js"></script>
<script>
	function show_hide_password(target) {
		var input = document.getElementById('password-input');
		if (input.getAttribute('type') == 'password') {
			target.classList.add('view');
			input.setAttribute('type', 'text');
		} else {
			target.classList.remove('view');
			input.setAttribute('type', 'password');
		}
		return false;
	}
</script>






<body>
	<style>
		.aut_input_info_second {
			display: flex;
			height: 100vh;
			width: 100vh;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-width: 500px;
		}

		.aut_input_info_second>form {
			display: flex;
			height: auto;
			width: 350px;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background: linear-gradient(to bottom, #0602e8 70%, #4f0278 100%);
			border-radius: 25px;
			overflow: hidden;
		}

		.aut_input_info_second>form>input {
			font-size: 14px;
			color: black;
			outline: none;
			border-radius: 27px;
			border: 0;
			width: 60%;
			background: #ffffff;
			padding: 10px 20px 10px 20px;
			margin-top: 10px;
		}

		.aut_input_info_second>form>input::placeholder {
			color: gray;
		}

		.aut_input_info_second>form>span {
			font-size: 30px;
			color: #fff;
			line-height: 1.2;
			text-align: center;
			display: block;
			width: 100%;
			top: 0;
			left: 0;
			background: linear-gradient(to bottom, ##0602e8 20%, #4f0278 80%);
			padding-top: 50px;
			padding-bottom: 20px;
			text-shadow: 2px 1px 5px black;
		}

		.aut_input_info_second>form>button {
			font-size: 14px;
			color: white;
			font-weight: 600;
			outline: none;
			border-radius: 27px;
			border: 0;
			background: #00000000;
			padding: 10px 20px 10px 20px;
			margin: 10px 0px 10px 0px;
			transition-duration: 0.5s;
			transition-property: background, color;
		}

		.aut_input_info_second>form>button:hover {
			color: black;
			background: white;
		}

		.aut_input_info_third {
			margin: 10px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.aut_input_info_third>span {
			font-size: 14px;
			color: white;
			text-shadow: 2px 1px 2px black;
		}

		.aut_input_info_third>a {
			font-size: 14px;
			text-decoration: none;
			color: white;
			text-shadow: 2px 1px 5px black;
			transition-duration: 0.5s;
			transition-property: font-size;
		}

		.aut_input_info_third>a:hover {
			font-size: 16px;
		}

		.aut_input_info_first {
			display: flex;
			flex-direction: row;
			justify-content: center;
			background-image: url(fon.jpg);
			min-width: 500px;



		}

		main {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
		}
	</style>


	<main>
		<div class="aut_input_info_first pattern">
			<div class="aut_input_info_second">
				<form action="auth.php" method="POST" autocomplete="off">
					<span>Авторизация</span>
					<input type="email" name="login" id="login" placeholder="Введите почту">
					<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
					<input type="password" name="pass" id="pass" placeholder="Введите пароль">
					<button type="submit" onclick="pocaz()">Войти</button>
					<div class="aut_input_info_third">
						<span>Ещё нет учётной записи?</span>
						<a href="REG.php">Зарегистрироваться</a>
					</div>
				</form>
			</div>
		</div>
	</main>









</body>