<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
    <script type="text/x-template" id="modal-template">
        <transition name="modal">
            <div class="modal-mask" role="dialog">
                <div class="modal-wrapper">
                    <div class="modal-container">

                        <div class="modal-body">
                            <slot name="body">
                                <div class="modal_header_item">
                                    <img class="modal_header_item_pic" src="assets/img/google-icon.svg" alt="">
                                    <h6>Sign up with Google</h6>
                                </div>
                                <span>or</span>
                                <div class="" method="POST">
                                    <input type="text" name="login" placeholder="Login" required="">
                                    <input type="text" name="password" placeholder="Password" required="">
                                    <button class="modal-default-button" type="submit" @click="close">
                                        Create account
                                    </button>
                                </div>
                            </slot>
                        </div>

                        <div class="modal-footer-stand">
                            <slot name="footer">
                                <p>Already have account? </p><a href="/"> Log in</a>
                            </slot>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </script>
</head>
<body>
<div id="app" class="wrapper">
    <header class="header">
        <div class="header__logo">
            <h2>ЛОМБАРД</h2>
        </div>
        <div class="header__menu">
            <a href="" class="menu__item">Услуги</a>
            <a href="" class="menu__item">Компания</a>
            <button id="show-modal" @click="showModal" class="menu__item">Вход</button>
        </div>
    </header>
    <modal v-show="showSignUp" @close="closeModal"></modal>
<!--    <modal v-show="showLogIn" @close="closeModal">-->
<!--        <div slot="body">-->
<!--            <div class="modal_header_item">-->
<!--                <img class="modal_header_item_pic" src="assets/img/google-icon.svg" alt="">-->
<!--                <h6>Log In with Google</h6>-->
<!--            </div>-->
<!--            <span>or</span>-->
<!--            <div class="">-->
<!--                <input type="text" placeholder="Login">-->
<!--                <input type="text" placeholder="Password">-->
<!--                <button class="modal-default-button" @click="close">-->
<!--                    Log In-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div slot="footer">-->
<!--            <div class="modal-footer">-->
<!--                <a href="/">Forgot password?</a>-->
<!--                <p>No account?</p><a @click="closeLogIn">Sign up</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </modal>-->
    <div class="content">
        <h2 class="slider__title">НОВИНКИ</h2>
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="silde first">
                    <img class="slide__img" src="assets/img/1.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/2.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/3.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/4.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/5.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/6.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/7.jpg" alt="">
                </div>
                <div class="silde">
                    <img class="slide__img" src="assets/img/8.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            {{slide}}
        </div>

        <h1 class="content__title">РАССЧИТАЙТЕ СТОИМОСТЬ</br>ЗАЙМА</h1>
        <p class="content__text">Ломбард ежедневно обновляет расценки для каждой пробы золота.</br>
            По этим расценкам рассчитывается именно сумма займа на руки.</p>
        <div class="content__calc">
            <div class="calc__left">
                <h2 class="left__title">Курс фунта</h2>
                <div class="left__item">
                    <h3>Килограмм</h3>
                    <p>0.453592</p>
                </div>
                <div class="left__item">
                    <h3>Грамм</h3>
                    <p>453.592</p>
                </div>
                <div class="left__item">
                    <h3>Унция</h3>
                    <p>16</p>
                </div>
            </div>
            <div class="calc__right">
                <h2 class="right__title">Рассчитать</h2>
                <div class="right__body">
                    <div class="right__body_up">
                        <div class="body_up">
                            <p>Сумма на руки</p>
                            <h2>18 021 тг</h2>
                        </div>
                        <div class="line-beetwen"></div>
                        <div class="body_up">
                            <p>Сумма к возврату</p>
                            <h2>18 021 тг</h2>
                        </div>
                    </div>
                    <div class="right__body_down">
                        <div class="right__body_down__input">
                            <p>Введите в фунтах</p>
                            <input v-model="num" type="text" class="body_down">
                        </div>
                        <div class="right__body_down__result">
                            <div>
                                <p>В Граммах</p>
                                <p class="body_down">{{countG}}</p>
                            </div>
                            <div>
                                <p>В Киллограммах</p>
                                <p class="body_down">{{countKg}}</p>
                            </div>
                            <div>
                                <p>В Унциях</p>
                                <p class="body_down">{{countOunc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <h2>НАШИ УСЛУГИ</h2>
        <div class="services__content">
            <div class="content__item">
                <img src="assets/img/s1.png" class="content__item_pic" alt="">
                <h3>Online-Продление</h3>
                <p>Быстрое продление займа без регистрации.</p>
            </div>
            <div class="content__item">
                <img src="assets/img/s2.png" alt="">
                <h3>Продление займа через QIWI</h3>
                <p>Удобное продление займа через любой терминал QIWI.</p>
            </div>
            <div class="content__item">
                <img src="assets/img/s3.png" alt="">
                <h3>Спектральный Анализ</h3>
                <p>Бесплатно. Не портит золото. Точная оценка без обмана.</p>
            </div>
            <div class="content__item">
                <img src="assets/img/s4.png" alt="">
                <h3>LondonFix-5%</h3>
                <p>Ежедневное обновление расценок по курсу Лондонской биржи металлов.</p>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xs-12 col-md-4">
                    <h6>Компания</h6>
                    <ul class="footer-links">
                        <li><a href="/">История</a></li>
                        <li><a href="/">Вакансии</a></li>
                        <li><a href="/">Поиск недвижимости</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-4">
                    <h6>Услуги</h6>
                    <ul class="footer-links">
                        <li><a href="/">Займы под залог золота</a></li>
                        <li><a href="/">Спектральный анализ</a></li>
                        <li><a href="/">Продление займа через QIWI</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-4">
                    <h6>Ссылки</h6>
                    <ul class="footer-links">
                        <li><a href="/">О Нас</a></li>
                        <li><a href="/">Связаться с нами</a></li>
                        <li><a href="/">Способствовать</a></li>
                        <li><a href="/">Политика Конфиденциальности</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 Все права защищены Сериков Д. и Едилев Д.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="script/main.js"></script>
<?php

//$connection  = @mysqli_connect('localhost', 'root', '', 'practice') or die('Ошибка соединения с БД');
//mysqli_set_charset($practice, "utf8") or die('Не установлена кодировка');
$connection = mysqli_connect('localhost','root','','practice');  /*хост атауы, учетная запись, пароль, БД-аты */
$select_db = mysqli_select_db($connection, 'users'); /*practice - таблица атауы*/

 ?>


<?php


if (isset($_POST["login"]) && isset($_POST["password"])){
	$login = $_POST["login"];
	$password = $_POST["password"];
	//#$password = md5($password."ghjsfkld2345");
	#$password = password_hash($password, PASSWORD_DEFAULT);

	$query="INSERT INTO users (login, password) VALUES ('$login','$password')";
	$rezult = mysqli_query($connection, $query);
	//echo "INSERT INTO users (login, password) VALUES ('$login','$password')";
}

 ?>

</body>
</html>
