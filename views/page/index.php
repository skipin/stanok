


<!-- banner -->
<div class="banner">
    <div class="head-line">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <h1><a href="tel:8-800-200-60-00">8-800-200-60-00</a></h1>
                </div>
                <div class="navigation">
                    <span class="menu"><img src="images/icon.png" alt="" /></span>
                    <ul class="nav1">
                        <!--<li><a class="scroll" href="#home">HOME</a></li>-->
                        <li><a class="scroll" href="#about-us">О КОМПАНИИ</a></li>
                        <li><a class="scroll" href="#portfolio">НАШИ УСЛУГИ</a></li>
                        <!--<li><a class="scroll" href="#services">SERVICES</a></li>-->
                        <li><a class="scroll" href="#contact-us">КОНТАКТЫ</a></li>
                    </ul>
                    <!-- script for menu -->
                    <script>
                        $( "span.menu" ).click(function() {
                            $( "ul.nav1" ).slideToggle( 300, function() {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- //script for menu -->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="banner-info">
                <h1 style="text-transform: uppercase">Ремонт и пусконаладка промышленного оборудования</h1>
                <!--<div class="download"><a href="#">DOWNLOAD</a></div>-->
            </div>
        </div>
    </div>

</div>
<!-- //banner -->
<!-- about-us -->
<div id="about-us" class="about-us">
    <div class="container">
        <div class="about-info">
            <h2>О КОМПАНИИ</h2>
            <br>
           <!-- <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>-->
        </div>
        <div class="about-grids">
            <div class="col-md-6 about-left">
                <img src="<?=$page->img?>" alt=" "/>
            </div>
            <div class="col-md-6 about-right">
                <h2><?=$page->title?></h2>
                <div class="border"></div>
                <p>
                    <?=$page->description?>
                    <!--Ремонт промышленного оборудования и промышленной электроники любой сложности, гидравлика, пневматика, кондиционеры и холодильное оборудование. Выезд специалиста на место. Сборка, разборка, наладка оборудования, ремонт и монтаж вентиляции<br><br>
                    У наших специалистов накоплен большой опыт по ремонту оборудования любой сложности. Наличный, безналичный расчёт.-->
                </p>
               <!-- <div class="getstart"><a href="#">GET STARTED</a></div>-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about-us -->
<!-- portfolio -->
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="portfolio-info">
            <h2>НАШИ УСЛУГИ</h2>
            <p>Мы с радостью готовы помочь вам</p>
        </div>
        <div class="portfolio-grids">

            <?foreach ($portfolio as $port) {
                ?>
                <div class="col-md-4 portfolio-grid">
                    <div class="portfolio-image">
                        <div class="port-img">
                            <img src="<?=$port->img?>" alt=" " />
                        </div>
                        <!--<div class="desc">
                            <a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
                        </div>-->
                        <div class="caption">
                            <ul>
                                <li><?=$port->title?></li>
                                <!--<li><span class="left"><i>Photo</i></span></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <?
            }?>
            <div class="clearfix"> </div>
        </div>
        <!-- pop-up-box -->
        <!-- script for pop-up-box -->
        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!-- //script for pop-up-box -->
        <div id="small-dialog" class="mfp-hide">
            <div class="image-top">
                <img src="images/2.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <div id="small-dialog1" class="mfp-hide">
            <div class="image-top">
                <img src="images/3.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <div id="small-dialog2" class="mfp-hide">
            <div class="image-top">
                <img src="images/4.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <div id="small-dialog3" class="mfp-hide">
            <div class="image-top">
                <img src="images/5.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <div id="small-dialog4" class="mfp-hide">
            <div class="image-top">
                <img src="images/6.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <div id="small-dialog5" class="mfp-hide">
            <div class="image-top">
                <img src="images/8.jpg" alt="" />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
            </div>
        </div>
        <script>
            /*$(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });*/
        </script>
        <!-- //pop-up-box -->
    </div>
</div>
<!-- //portfolio -->
<!-- services -->
<!--<div id="services" class="services">
    <div class="container">
        <div class="service-info">
            <h2>SERVICES</h2>
            <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="services-grids">
            <div class="col-md-3 service-grid">
                <div class="service-image">
                    <div class="camera"></div>
                    <div class="ser-info">
                        <h2>PHOTOGRAPHY</h2>
                    </div>
                    <div class="strip"></div>
                    <div class="ser-info">
                        <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-md-3 service-grid">
                <div class="service-image">
                    <div class="paint"></div>
                    <div class="ser-info">
                        <h2>PAINTING</h2>
                    </div>
                    <div class="strip"></div>
                    <div class="ser-info">
                        <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-md-3 service-grid">
                <div class="service-image">
                    <div class="video"></div>
                    <div class="ser-info">
                        <h2>VIDEO EDITING</h2>
                    </div>
                    <div class="strip"></div>
                    <div class="ser-info">
                        <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-md-3 service-grid">
                <div class="service-image">
                    <div class="web-design"></div>
                    <div class="ser-info">
                        <h2>WEB DESIGN</h2>
                    </div>
                    <div class="strip"></div>
                    <div class="ser-info">
                        <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    </div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>-->
<!-- //services -->
<!-- contact-us -->
<!--<div id="contact-us" class="contact-us">
    <div class="container">
        <div class="contact-info">
            <h2>CONTACT US</h2>
            <p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="contact-grids">
            <div class="col-md-6 contact-left">
                <h2>CONTACT INFO</h2>
                <div class="border"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero accumsan et.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </p>
                <h3>Address</h3>
                <ul>
                    <li>1931 Dawson Drive,</li>
                    <li>15th Avenue,</li>
                    <li>Little Rock, AR 72211</li>
                </ul>
            </div>
            <div class="col-md-6 contact-right">
                <form>
                    <input type="text" placeholder="Name..." required>
                    <input type="text" placeholder="E-Mail..." required>
                    <textarea placeholder="Subject..." required></textarea>
                    <textarea class="text" placeholder="Message..." required></textarea>
                   <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>-->
<div id="contact-us" class="contact-us">
    <div class="container">
        <div class="contact-info">
            <h2>КОНТАКТЫ</h2>
            <p>Свяжитесь с нами. Мы будем рады вас видеть</p>
        </div>
        <div class="contact-grids">
            <div class="col-md-6 contact-left">
                <h2>Контактная информация</h2>
                <div class="border"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero accumsan et.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </p>
                <h3>Адресс</h3>
                <ul>
                    <li>1931 Dawson Drive,</li>
                    <li>15th Avenue,</li>
                    <li>Little Rock, AR 72211</li>
                </ul>
            </div>
            <div class="col-md-6 contact-right">
                <?
                $form = \yii\widgets\ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data'
                    ],
                    'action' => '/',
                    'fieldConfig' => [
                        'template' =>
                            "{input}",

                        'inputOptions' => [
                            'class' => '',

                        ],
                    ],
                ])
                ?>
                <?
                echo $form->field($model,'name')->textInput(['placeholder' => 'Ваше имя']);
                echo $form->field($model,'email')->textInput(['placeholder' => 'E-mail']);
                echo $form->field($model,'subject')->textarea(['placeholder' => 'Тема']);
                echo $form->field($model,'message')->textarea(['placeholder' => 'Сообщение','class' => 'text']);
               // Html::submitButton('Вход', ['class' => 'btn btn-primary']);
                //echo $form->field($model,'time')->textInput();
                ?>
                <div style="text-align: left">
                    <input type="submit" value="ОТПРАВИТЬ" style="margin-left: 0">
                </div>

                <?
                \yii\widgets\ActiveForm::end();
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //contact-us -->
<!-- footer -->
<div class="footer">
    <p>Разработал <a href="https://vk.com/skipin">Сергей Скипин</a></p>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
       // $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- smooth scrolling -->