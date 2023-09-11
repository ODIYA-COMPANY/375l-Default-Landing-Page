<?php
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("fpx", $_GET['fpx'], time() + $period_cookie);
    setcookie("gtm", $_GET['gtm'], time() + $period_cookie);
}

$fpx = isset($_GET['fpx']) ? $_GET['fpx'] : $_COOKIE['fpx'];
$gtm = isset($_GET['gtm']) ? $_GET['gtm'] : $_COOKIE['gtm'];

?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <title>Стильний брючний костюм </title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="index.php" />
    <link rel="icon" href="files/favicon.png">
    <link rel="stylesheet" href="files/reset4a3c6.css" type="text/css">
    <link rel="stylesheet" href="files/styles8ca58.css" type="text/css">
    <script>
        function sclClickPixelFn() {
            const url = new URL(document.location.href).searchParams;
            const a = url.get('a'); // Your ID. Example: const a = "XX";
            if (a) {
                const availableParams = ['aff_click_id', 'sub_id1', 'sub_id2', 'sub_id3', 'sub_id4', 'sub_id5', 'aff_param1', 'aff_param2', 'aff_param3', 'aff_param4', 'aff_param5', 'idfa', 'gaid'];
                const t = new URL('https://odiya.scaletrk.com/click');
                const r = t.searchParams;
                r.append('a', a);
                r.append('o', '17');
                r.append('return', 'click_id');
                if (availableParams?.length > 0) {
                    availableParams.forEach((key) => {
                        const value = url.get(key);
                        if (value) {
                            r.append(key, value);
                        }
                    });
                }
                fetch(t.href).then((e) => e.json()).then((e) => {
                    const c = e.click_id;
                    if (c) {
                        const expiration = 864e5 * 365;
                        const o = new Date(Date.now() + expiration);
                        document.cookie = 'click_id=' + c + ';expires=' + o;
                        document.cookie = 'aff_id=' + a + ';expires=' + o;
                    }
                });
            }
        }
        sclClickPixelFn();
    </script>

    <?php if ($fpx) { ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', "<?= $fpx ?>");
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php
    };
    ?>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', "<?= $gtm ?>");
        </script>
        <!-- End Google Tag Manager -->
    <?php
    };
    ?>
</head>

<body>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php
    };
    ?>
    <div class="main_wrapper">

        <!-- header 3 -->
        <header class="offer_section offer3">

            <h1 class="main_title">НОВИНКА 2023 РОКУ</h1>


            <div class="info_block">
                <p class="subtitle">СТИЛЬНИЙ БРЮЧНИЙ КОСТЮМ</p>
                <div class="discount"><b>40% знижка</b></div>



                <img src="files/offer1.jpg" alt="">
            </div>

            <div class="price_block">
                <div class="yellow_line"></div>
                <div class="price_item old">
                    <div class="text">Звичайна ціна:</div>
                    <div class="value">1749грн</div>
                </div>
                <div class="price_item new">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="value">1049грн</div>
                </div>
            </div>

            <div class="benefits_block clearfix">

                <div class="benefit_item">

                    <img src="files/benefit1.jpg" alt="">
                    <p>МОДНИЙ ДИЗАЙН</p>
                </div>

                <div class="benefit_item">
                    <img src="files/benefit2.jpg" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="benefit_item">

                    <img src="files/benefit3.jpg" alt="">

                    <p>ПРЕМІУМ ТКАНИНА</p>
                </div>
            </div>

            <a href="#cat" class="button">Замовити костюм</a>

        </header>
        <br>
        <div class="catitem">
            <h2 class="title"><span>ЯК КОСТЮМ</span>
                ВИГЛЯДАЄ НАЖИВО!</h2>
        </div>
        <section>
            <ul class="bxslider">
                <video controls="true" width="100%" height="600" autoplay loop muted="">
                    <source src="files/375.mp4">
                </video>
            </ul>
        </section>
        <br>

        <section class="description_section">
            <h2 class="title"><span>Опис</span> виробу</h2>

            <ul class="characteristics__list">
                <li><b>Тканина:</b> турецький мікровельвет преміум якості</li>
                <li><b>Країна-виробник:</b> Україна</li>
                <li><b>Кольори:</b> моко, фреза, графіт, марсала </li>
                <li><b>Розміри:</b> від 50 до 60 </li>

                <li>
                    <table class="size" width="100%">
                        <tbody>

                            <tr align="center" height="35">
                                <td>Розмір</td>
                                <td>50-52</td>
                                <td>54-56</td>
                                <td>58-60</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват грудей</td>
                                <td>98-107</td>
                                <td>108-115</td>
                                <td>116-123</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват тілії</td>
                                <td>82-90</td>
                                <td>91-99</td>
                                <td>100-108</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват стегон</td>
                                <td>105-112</td>
                                <td>113-120</td>
                                <td>121-128</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина кофти</td>
                                <td>63</td>
                                <td>64</td>
                                <td>65</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина рукава</td>
                                <td>76</td>
                                <td>77</td>
                                <td>78</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина брюк</td>
                                <td>103</td>
                                <td>103</td>
                                <td>103</td>
                            </tr>


                        </tbody>
                    </table>
                </li>

                <br>
                <center>*залиште заявку і ми надамо вам пораду за розміром!</center>

            </ul>

        </section><br>
        <section class="cat" id="cat">
            <div class="catitem">
                <h2 class="title"><span>Виберіть свій колір</span> костюму</h2>
            </div>
            <center>Костюми у різних ракурсах, гортайте </center>
            <br>
            <br>
            <section class="cat" id="cat">
                <ul class="bxslider">
                    <li>
                        <div><img src="files/m1.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/m2.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/m3.jpg" alt=""></div>
                    </li>

                </ul>
            </section>
            <br>
            <div class="catitem">
                <div class="clearfix">
                    <h3>Колір марсала</h3>
                    <div class="catprice clearfix">
                        <div class="cp-left"><span>-40%</span>
                            <p>1749грн</p>
                        </div>
                        <div class="cp-right"><span>Ціна зі знижкою:</span>
                            <p>1049грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="button zakaz">Оформити замовлення</a>
            </div>
            <br>
            <ul class="bxslider">
                <li>
                    <div><img src="files/mo1.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/mo2.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/mo3.jpg" alt=""></div>
                </li>

            </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3>Колір моко</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>1749грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1049грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='1' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>

        <br>
        <ul class="bxslider">
            <li>
                <div><img src="files/g1.jpg" alt=""></div>
            </li>
            <li>
                <div><img src="files/g2.jpg" alt=""></div>
            </li>
            <li>
                <div><img src="files/g3.jpg" alt=""></div>
            </li>

        </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3>Колір графіт</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>1749грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1049грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='1' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>

        <br>
        <ul class="bxslider">
            <li>
                <div><img src="files/f1.jpg" alt=""></div>
            </li>
            <li>
                <div><img src="files/f2.jpg" alt=""></div>
            </li>
            <li>
                <div><img src="files/f3.jpg" alt=""></div>
            </li>

        </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3>Колір фреза</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>1749грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1049грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='1' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>


        <section class="reviews3_section">
            <h2 class="title"><span>Відгуки</span> покупців</h2>
            <div class="reviews_list">
                <div class="review_item">
                    <div class="author_block clearfix">
                        <img src="files/ava1.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Людмила</div>
                            <div class="text">37 років</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">01.08.2023</div>
                        </div>
                    </div>
                    <p> Дуже стильно. Тканина дуже ніжна на дотик. Фасон чудовий. Рекомендую, дівчата </p>
                </div>

                <div class="review_item">
                    <div class="author_block clearfix"><img src="files/ava2.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Тетяна</div>
                            <div class="text">47 років</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">29.07.2023</div>
                        </div>
                    </div>
                    <p> В захваті від цього костюму. Подруга купила собі та зкинула ваш магазин. Я замовляла марсалу 48-50. Підійшов чудово. Якість на вищому рівні!</p>
                </div>
                <div class="review_item">
                    <div class="author_block clearfix"><img src="files/ava3.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Галина</div>
                            <div class="text">50 років</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">30.07.2023</div>
                        </div>
                    </div>
                    <p> Зручний та стильний костюм. Пошито дуже акуратно, тканина якісна. Буду тепер вашим клієнтом </p>
                </div>
            </div>
        </section>

        <!-- /reviews 3 -->
        <!-- order steps 1 -->
        <div class="tlt">

            <h2 class="title"><span>Як зробити</span><br> замовлення?</h2>
        </div>
        <div class="order_steps1">
            <div class="step_item">
                <div class="step_wrapper"><img src="files/order_steps__step1_icon15b1b.png" alt="">

                    <h4>Замовлення</h4>
                    <p>Залиште замовлення внизу сторінки</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step2_icon95bea.png" alt="">

                    <h4>Дзвінок</h4>
                    <p>Наш менеджер уточнить деталі замовлення</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step3_icon9469b.png" alt="">

                    <h4>Відправлення</h4>
                    <p>Доставимо Ваше замовлення Новою Поштою</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step4_icone6b9d.png" alt="">

                    <h4>Отримання</h4>
                    <p>Сплачуйте при отриманні на відділенні</p>
                </div>
            </div>
        </div>

        <!-- Доставка/оплата-v3 -->
        <div class="tlt">
            <section class="delivery-block-v3">
                <ul class="delivery-cont">
                    <li>
                        <h3>Доставка</h3>
                        <p>Доставляємо Новою Поштою по Україні. Вартість за тарифами Нової Пошти</p>
                    </li>
                    <li>
                        <h3>Безпечна оплата</h3>
                        <p>Ви оплачуєте замовлення за фактом отримання виробу на руки з комісією або без комісії переказом на банківську картку</p>
                    </li>
                    <li>
                        <h3>Обмін, повернення та гарантії</h3>
                        <p>Ми завжди перевіряємо товар перед відправкою і гарантуємо 100% якість.</p>
                        <p>Обмін і повернення протягом 14 днів!</p>
                    </li>

                </ul>
            </section>
        </div>

        <!-- order 3 -->
        <section class="offer_section offer3 order">
            <h1 class="main_title">НОВИНКА 2023 РОКУ</h1>
            <div class="info_block">
                <p class="subtitle">СТИЛЬНИЙ БРЮЧНИЙ КОСТЮМ</p>
                <div class="discount"><b>40% знижка</b></div>


                <img src="files/offer1.jpg" alt="">
            </div>

            <div class="price_block">
                <div class="yellow_line"></div>
                <div class="price_item old">
                    <div class="text">Звичайна ціна:</div>
                    <div class="value">1749грн</div>
                </div>
                <div class="price_item new">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="value">1049грн</div>
                </div>
            </div>

            <div class="benefits_block clearfix">

                <div class="benefit_item">

                    <img src="files/benefit1.jpg" alt="">
                    <p>МОДНИЙ ДИЗАЙН</p>
                </div>

                <div class="benefit_item">
                    <img src="files/benefit2.jpg" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="benefit_item">

                    <img src="files/benefit3.jpg" alt="">

                    <p>ПРЕМІУМ ТКАНИНА</p>
                </div>
            </div>

            <p align="center">Для замовлення та консультації заповніть форму:</p>
            <br>
            <form id="order_form" class="order_form" action="order_375l.php" method="post">

                <input class="field" type="text" name="name" placeholder="Введіть Ваше ім'я" required>
                <input class="field" type="tel" name="phone" placeholder="Введіть Ваш телефон" required>
                <div style="margin: 0 auto 25px;font-size: 15px; text-align: center; color: #000;" bis_skin_checked="1">
                    <input id="data1" type="checkbox" checked required style="appearance: auto;">
                    <label for="data1">Я погоджуюся з політикою конфіденційності</label>
                </div>
                <button class="button">Оформити замовлення</button>
            </form>

        </section>
        <!-- /order 3 -->
        <!-- footer -->
        <footer class="footer_section">
            <p>Виробництво в Україні
                <br>
                49356, м. Днiпро, вул. Старокозацька, 56
                <br>ТОВ "Одяг"
            </p>
            <br>
            <a href="politics.html" target="_blank">Політика конфіденційності</a> <br>
            <a href="refund.html" target="_blank">Гарантії та повернення</a> <br>
            <a href="ugoda.html" target="_blank">Угода Користувача</a> <br>
        </footer><!-- /footer -->
    </div>
    <!-- scripts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bxslider/jquery.bxslider.js">
    </script>
    <link href="bxslider/jquery.bxslider.css" rel="stylesheet">

    <script>
        $(document).ready(function() {

            $('.bxslider').bxSlider();

        });
    </script>
    <script>
        $(function() {

            $('.zakaz').click(function() {

                ind = $(this).attr('rel');

                $('#select option').removeAttr('selected');

                $('#select').children('option').eq(ind).attr("selected", "selected");

            });


        });
    </script>
    <script src="files/scripts6085f.js">
    </script>
    <script>
        function identifyDate(e) {
            var t = new Date;
            t.setTime(t.getTime() + 864e5 * e);
            var a = t.getDate(),
                n = t.getMonth() + 1,
                r = t.getFullYear();
            return (a > 9 ? a : "0" + a) + "." + (n > 9 ? n : "0" + n) + "." + r
        }

        function printCommentsDate(m) {
            for (var t = $(m).length, e = 0; e <= t; e++) $(m + ":eq(" + (t - e) + ")").html(identifyDate(-e))
        }
        printCommentsDate('.date');
    </script>


</body>

</html>