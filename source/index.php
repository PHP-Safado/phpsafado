<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800;900&display=swap" rel="stylesheet">


    <title>PHP SAFADO</title> <!-- fazer no back dps -->
</head>
<body>

<section class="section-home">
    <div class="container">
        <div class="btn-login">
            <p>Fazer Login</p>
        </div> <!--btn-login-->
        <div class="txt-home">
            <h2>Bem-vindo ao<br><span>php safado</span></h2>
            <p>Nos somos  uma comunidade de programadores PHP,
                criamos essa comunidade com o objetivo de
                ajudar uns aos outros a se destacarem no
                mercado.
            </p>
            <p class="btn-view-more">
                <a href="#">Clique para ver mais</a>
            </p> <!--btn-view-more-->
        </div> <!--txt-home-->

        <div class="iphone">

        </div> <!--iphone-->

        <div class="background-number-one"></div>
        <div class="background-elephant"></div>

    </div> <!--container-->
</section> <!--section-home-->

<!--svg-curva-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate"
     viewBox="0 0 1000 154" width="100%" height="154pt">
    <g clip-path="url(#_clipPath_Cg1ZESbAFlCT18z8mFrAYQyRq7MN1mZY)">
        <rect width="1000" height="154" style="fill:rgb(0,0,0)" fill-opacity="0"/>
        <path d=" M -9.228 0 Q 220.044 45.862 346.262 56 C 574.656 74.345 766.014 21.358 995.21 18.667 C 1363.021 14.347 1576.963 64.136 1637 168 L 1637 168 L -14 168 L -9.228 0 Z "
              fill="rgb(255,255,255)"/>
    </g>
</svg>
<!--svg-curva-->


<section class="section-members" style="background: white;position: relative;top: -44px">
    <h2>ORGANIZADORES DO GRUPO</h2>
    <p>GuiMont</p>
</section><!--section-members-->







<div class="area-login">
    <div class="btn-leave">
        <h1>X</h1>
    </div><!--btn-leave-->
    <div class="box-login">
        <header>
            <span class="bullets"></span>
            <span class="bullets"></span>
            <span class="bullets"></span>
        </header>

        <h2>Área de login</h2>

        <form>
            <span>Email:</span>
            <label>
                <input type="text" name="email" required autofocus>
            </label>
            <span>Senha:</span>
            <label>
                <input type="password" name="password" required>
            </label>

            <input type="checkbox" id="conect">
            <label for="conect">Manter-me Conectado</label> <br>

            <input type="submit" value="Entrar">
        </form>
    </div> <!--box-login-->
</div> <!--area-login-->


<script src="js/funtion.js"></script>


</body>
</html>