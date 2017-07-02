<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>UnBSnacks</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Ativar navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">UnBSnacks</a>
                        <img src="images/unbsnackslogo.png" width="53" height="45">
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">Home</a></li>
                            <li><a class="color_animation" href="#pricing">Preços</a></li>
                            <li><a class="color_animation" href="#beer">Banca Colina</a></li>
                            <li><a class="color_animation" href="#bread">Horários</a></li>
                            <li><a class="color_animation" href="#featuredru">R.U.</a></li>
                            <li><a class="color_animation" href="#reservation">Opine</a></li>
                            <li><a class="color_animation" href="#contact">Contato</a></li>
                            <li><a class="color_animation" href="#story">Sobre</a></li>
                            <li><a class="color_animation" href="{{ url('admin/login') }}">Cadastro/Acessar</a></li>
                            <!--
                            <?php
                            session_start();

                            if (!isset($_SESSION['logg']) || $_SESSION['logg']!=1) {
                            ?>
                                <li><a class="color_login" href="#top" data-toggle="modal" data-target="#myModal">Entrar</a></li>
                            <?php
                            } else {
                            ?>
                                <li><a class="color_login" href="./panel.html">Perfil</a></li>
                            <?php
                            }
                            ?>-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

		<div class="container">
		<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
							    
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h5 class="modal-title">

							<div class="container">
								<div>
								<button id="butt2" type="radio" class="btn btn-primary" onclick="$('#demo').toggleClass('hidden');" data-toggle="collapse" data-target="#demo2">Login/Cadastro
								</button>
								</div>

							</div>

							</h5>
						</div>
						<div class="modal-body">
							<div id="demo" class="collapse in">
								<p><strong>Login</strong></p><br>
								<form name="Cadastro" action="./logIn.php" method="POST">
									<p><input type="text" class="form-control" name="User" placeholder="Usuário"></p>
									<p><input type="password" class="form-control" name="Pass" placeholder="Senha"></p><br>
									<p><button style="margin-left:44%" name="logIn" type="submit" class="btn btn-primary" href="#" target="_blank">Enviar</button></p>
								</form>
								<p><a style="margin-left:36%" href="#" target="_blank">Esqueci minha senha</a></p>
							</div>
							<div id="demo2" class="collapse">
								<p><strong>Cadastro</strong></p><br>
								<p>Vínculo: 
								<input id="opt1" type="radio" class="hidden" name="optradio" onclick="$('#opt1').addClass('hidden');$('#opt2').removeClass('hidden');" data-toggle="collapse" data-target="#user,#comp" checked="checked"> Usuário
								<input id="opt2" type="radio" name="optradio" onclick="$('#opt2').addClass('hidden');$('#opt1').removeClass('hidden');" data-toggle="collapse" data-target="#comp,#user"> Lanchonete
								</p><br>
								<div id="user" class="collapse in">
									<form name="Cadastro" action="./logIn.php" method="POST">
										<p><input type="text" class="form-control" name="Nome" placeholder="Nome"></p>
										<p><input type="email" class="form-control" name="Email" placeholder="E-mail"></p>
										<p><input type="tel" class="form-control" name="Tel" placeholder="Telefone"></p>
                                        <p><input type="number" class="form-control" name="CPF" placeholder="CPF"></p>
                                        <p><input type="date" class="form-control" name="Nasc" placeholder="Nasc"></p><br>
                                        <p>Imagem de perfil: <input type="file" name="Foto" accept="image/*" /></p><br>
										<p><input type="text" class="form-control" name="Login" placeholder="Login"></p>
										<p><input type="password" class="form-control" name="Senha" placeholder="Senha"></p><br>
										<p><button type="submit" name="regUser" class="btn btn-primary form-control" href="#" target="_blank">Enviar</button></p>
									</form>
								</div>
								<div id="comp" class="collapse">
									<form name="Cadastro2" action="./logIn.php" method="POST">
										<p><input type="text" class="form-control" name="Nome" placeholder="Nome da Empresa"></p>
										<p><input type="text" class="form-control" name="NomeR" placeholder="Nome do Responsável"></p>
                                        <p><input type="number" class="form-control" name="CNPJ" placeholder="CNPJ"></p>
                                        <p><input type="email" class="form-control" name="Email" placeholder="E-mail"></p>
										<p><input type="tel" class="form-control" name="Tel" placeholder="Telefone"></p>
										<p><input type="text" class="form-control" name="End" placeholder="Endereço"></p><br>
										<p>Imagem do estabelecimento: <input type="file" name="Foto" accept="image/*" /></p><br>
										<p><input type="text" class="form-control" name="Login" placeholder="Login"></p>
										<p><input type="password" class="form-control" name="Senha" placeholder="Senha"></p><br>
										<p><input type="submit" name="regComp" class="btn btn-primary form-control" href="#" target="_blank"></p>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>      
				</div>
			</div>
		</div>

        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> UnBSnacks </h2>
                    <h4 class="white second-title">Encontre o melhor lanche para seu melhor momento!</h4>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Sobre</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Somos parte de um trabalho universitário de Engenharia de Software. Este projeto tem como intuito expor as lanchonetes da Universidade de Brasília, bem como suas notas e preços que serão dadas por vocês, alunos, professores, etc.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/Lanchonete1.jpg" width="250" height="220">
                       <img src="images/Lanchonete2.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/Lanchonete3.jpg"  width="250" height="220">
                       <img src="images/Lanchonete4.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->

        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1 class="shadow"><span>Melhores</span> preços</h1>
             </div>
            <div class="text-content container">
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <!--<ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="special">Special</li>
                                <li class="filter" data-filter="desert">Desert</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul>  @end #filter-list -->
                            <ul id="portfolio">
                                <li class="item breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>

                                <li class="item dinner special mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item dinner breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item special mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item dinner mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item special mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item desert mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                                <li class="item desert breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="images/food_icon01.jpg" alt="Food">
                                    <h2 class="white">R$ 3,00</h2>
                                </li>
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>
        </section>


        <!-- ============ Our Beer  ============= -->


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1 class="shadow">Ótimo <span>Lugar</span> para lanchar.</h1>
            </div>
            <div class="text-content container">
                <div class="col-md-5">
                   <div class="img-section">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.9740359050146!2d-47.87497981508801!3d-15.756632438154348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3982427b69e3%3A0x3542a7779945b2ac!2sBanca+Colina+UNB+-+Banca+DNPM!5e0!3m2!1spt-BR!2sbr!4v1498132285136" width="530" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>Cerveja?</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Próximo à universidade tempos apenas um local onde vende-se cerveja. Chama-se <b>Colina</b>, uma banca de revista que também vende algumas guloseimas.</p>
                </div>
            </div>
        </section>


       <!-- ============ Our Bread  ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1 class="shadow"><span>Menus</span> para o café da manhã, almoço e jantar.</h1>
            </div>
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Lanches para todas as horas do dia</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">Muitas opções de lanches que você pode encontrar, desde o início da manhã até o final da noite.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                </div>
            </div>
        </section>



        <!-- ============ Featured Dish  ============= -->

        <section id="featuredru" class="description_content">
            <div  class="featuredru background_content">
                <h1 class="shadow"><span>Menu</span> do R.U.</h1>
            </div>
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Cardápio:</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">
					<p style="text-align: center;"><a style="font-size: 12.16px;" target="_blank" href="http://www.ru.unb.br/images/Cardapio/Cardpio%20Julho%202017.xlsx%20-%2002%20SEMANA%20julho%20.pdf"><span style="font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="font-size: 18pt;"><span style="color: #0000ff; font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="color: #0000ff; font-size: 18pt;">03/07/2017 a 09/07/2017</span></span></span></span></a></p>
					<p style="text-align: center;"><a target="_blank" href="http://www.ru.unb.br/images/Cardapio/Cardpio%20Julho%202017.xlsx%20-%2003%20SEMANA%20julho%20.pdf"><span style="font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="font-size: 18pt;"><span style="color: #0000ff; font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="color: #0000ff; font-size: 18pt;">10/07/2017 a 16/07/2017</span></span></span></span></a></p>
					<p style="text-align: center;"><a target="_blank" href="http://www.ru.unb.br/images/Cardapio/Cardpio%20Julho%202017.xlsx%20-%2004%20SEMANA%20julho%20.pdf"><span style="font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="font-size: 18pt;"><span style="color: #0000ff; font-family: arial, helvetica, sans-serif; font-size: 18pt; line-height: 1.3em;"><span style="color: #0000ff; font-size: 18pt;">17/07/2017 a 23/07/2017</span></span></span></span></a></p>
					
					</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Reservation  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1 class="shadow">Deixe sua Sugestão!</h1>
            </div>
            <div class="text-content container">
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Guest Number" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Enviar opiniões</button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Principais Dicas dos clientes</h2><hr>
                                            <p>1. Criem um suco de frutas da estação.</p>
                                            <p>2. Senti faltar de um combo "lanche e suco" natural.</p>
                                            <p>3. Se caprichar, eu vou voltar.</p>
                                            <p>4. Demorou a sair, mais estava gostoso.</p>
                                            <p>5. Esperimentei, gostei, mas pode melhorar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============ Social Section  ============= -->

        <section class="social_connect">
            <div class="text-content container">
                <div class="col-md-6">
                    <span class="social_heading">Siga</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">Contate-nos</span>
                    <span class="social_info"><a class="color_animation">alunos@unbsnacks.com</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.772736136834!2d-47.87281978462758!3d-15.763157289070708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a398265a2d027%3A0x9431d651ab4c1104!2sUniversidade+de+Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1495418660608" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Enviar Mensagem</button>
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Versão <a href="#">1.3</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Voltar para o <a href="#top">TOPO</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Trabalho da <a href="#" target="_blank">UnB</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>



    </body>
</html>