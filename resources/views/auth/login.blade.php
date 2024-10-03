<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
</head>
<link rel="stylesheet" href={{ asset('css/style.css') }}>

<body>
	<div class="container__login">
		<div class="entrance__body">
			<div class="entrance__content">
				<div class="tabs">
					<div class="tabs__nav">
						<button class="tabs__btn  tabs__btn_enter tabs__btn_active">Вход</button>
						<a href="/register" class="tabs__btn tabs__btn_reg">Регистрация</a>

					</div>
					<div class="tabs__content">
						<div class="tabs__pane tabs__pane_show tabs__pane_enter">
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<form action="{{ route('login') }}" method="POST" id="enter" class="form__enter enter">
							@csrf
								<div class="enter__item">
									<input type="email" class="enter__input input" placeholder="Email" tabindex="1">
								</div>
								<div class="enter__item">
									<input type="password" class="enter__input input" placeholder="Пароль" tabindex="2">
								</div>
								<div class="enter__button">
									<button type="submit" class="btn" tabindex="3">Войти</button>
								</div>
							</form>
							<div class="entrance__back "><a href="../recovery.html" class="recovery-link ">Забыли пароль?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>



</body>

</html>
