<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<link rel="stylesheet" href={{ asset('css/style.css') }}>

<body>
<div class="container__registration">
    <div class="entrance__body">
        <div class="entrance__content">
            <div class="tabs">
                <div class="tabs__nav">
                    <a href="/login" class="tabs__btn tabs__btn_enter">Вход</a>
                    <button class="tabs__btn tabs__btn_reg tabs__btn_active">Регистрация</button>
                </div>
                <div class="tabs__content">
                    <div class="tabs__pane tabs__pane_reg tabs__pane_show">
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST" id="reg" class="form__enter enter">
                            @csrf
                            <div class="enter__item">
                                <label for="name"></label>
                                <input type="text" name="name" class="enter__input input" placeholder="Ваше имя" value="{{ old('name') }}"
                                       tabindex="1">
                            </div>
                            <div class="enter__item">
                                <label for="email"></label>
                                <input type="email" name="email" class="enter__input input" placeholder="Email"
                                       tabindex="2">
                            </div>
                            <div class="enter__item">
                                <label for="phone"></label>
                                <input type="tel" name="phone" class="enter__input input" placeholder="Телефон"
                                       tabindex="3">
                            </div>
                            <div class="enter__item">
                                <label for="password"></label>
                                <input type="password" name="password" class="enter__input input" placeholder="Пароль"
                                       tabindex="4">
                            </div>
                            <div class="enter__item">
                                <label for="password_confirmation"></label>
                                <input type="password" name="password_confirmation" class="enter__input input"
                                       placeholder="Подтвердите пароль"
                                       tabindex="5">
                            </div>
                            <div class="enter__consent">
                                <label for="consent-1"><input class="original__checkbox" type="checkbox" id="consent-1"
                                                              checked required>
                                    <span class="custom-checkbox"></span>Я даю свое согласие на обработку персональных
                                    данных
                                </label>
                            </div>
                            <div class="enter__button">
                                <button type="submit" class="btn" tabindex="7">Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
