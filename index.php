<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cevicherias.informaticapp.com/pedidos',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VWYVRVZXpBOFQuSEYza25WTjZLUTVMSzBSc1Nwc0tPOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlSGdrN1Q1dWswNGhrWFN1MG9GYmdBZFZ3dkxSbWt2dQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);
//$valorGlobal = $_SESSION['mi_variable_global'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cevicheria</title>
    <link rel="stylesheet" href="style.css">

</head>
<!-- DISEÑO SUPERIOR, CARRITO -->

<body>

    <header class="header">

        <img class="bg" src="image/bg.png" alt="">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="image/menu.png" class="menu-icono" alt="">

            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#carta">Carta</a></li>
                    <li><a href="#platos">Platos</a></li>
                    <li><a href="register.php">Reservas</a></li>
                    <li><a href="login.php">Login/Register</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="image/car.png" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1><span>Bienvenido</span> disfruta de nuestros ricos platillos Marinos</h1>
                <p>
                    Te invitamos a sumergirte en una experiencia culinaria única, donde el
                    ceviche es la estrella indiscutible. Acompaña tu ceviche con una
                    refrescante bebida y déjate llevar por el ambiente acogedor y amigable que hemos creado para ti.
                    ¡Gracias por elegirnos y esperamos que tu visita sea una experiencia gastronómica inolvidable!
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="image/pl-1.png" alt="">
            </div>
        </div>
    </header>
    <!-- PLATILLOS-->
    <section class="breakfast container">

        <h2>Carta del día</h2>
        <p>
            Horario 9 a.m. - 8 p.m.
        </p>
        <div class="breakfast-content" id="carta">

            <div class="breakfast-1" id="cevichesnav">
                <img src="image/ceviche_clasico.png" alt="">
                <a href="#lista-1" class="btn-cv">Ceviches</a>
            </div>
            <div class="breakfast-1" id="combosnav">
                <img src="image/ceviche_clasico.png" alt="">
                <a href="#lista-2" class="btn-cb">Combos</a>
            </div>
            <div class="breakfast-1" id="menusnav">
                <img src="image/ceviche_clasico.png" alt="">
                <a href="#lista-3" class="btn-dy">Menu</a>
            </div>
            <div class="breakfast-1" id="bebidasnav">
                <img src="image/ceviche_clasico.png" alt="">
                <a href="#lista-4" class="btn-bb">Bebidas</a>
            </div>
        </div>
    </section>

    <section class="info">

        <img class="bg-2" src="image/bg-2.png" alt="">
        <div class="info-content container" id="carta">
            <div class="info-img">
                <img src="image/breakfast.png" alt="">
            </div>

            <div class="info-txt">


                <h2>Los Mejores platillos Norteños del Perú</h2>
                <p>
                    
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>

        </div>

    </section>

    <!-- APARTADO DE CEVICHES -->

    <main class="ceviches container">

        <h2>Ceviches</h2>

        <div class="box-container" id="lista-1">

            <div class="box">
                <img src="image/plato1.png" alt="">
                <div class="">
                    <h3>Ceviche </h3>
                    <p>Ceviche de pescado</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>

            </div>
            <div class="box">
                <img src="image/plato2.png" alt="">
                <div class="">
                    <h3>Ceviche Mixto</h3>
                    <p>Ceviche de pescado con chicharon de chancho</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato3.png" alt="">
                <div class="">
                    <h3>Ceviche de Mariscos</h3>
                    <p>Ceviche de pescado con pota, pulpo y camarones</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato4.png" alt="">
                <div class="">
                    <h3>Ceviche Viuda Negra</h3>
                    <p>Mixto con conchas Negras</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato5.png" alt="">
                <div class="">
                    <h3>Ceviche Afrodisiaco</h3>
                    <p>Ceviche de pescado + Conchas Negras</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato6.png" alt="">
                <div class="">
                    <h3>Ceviche de conchas Negras</h3>
                    <p>Ceviche de conchas negras</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato7.png" alt="">
                <div class="">
                    <h3>Tiradito Natural</h3>
                    <p>Tiradito de pescado</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="image/plato8.png" alt="">
                <div class="">
                    <h3>Tiradito de Ají Amarillo</h3>
                    <p>Tiradito en pasta de Ají Amarillo</p>
                    <p class="precio">s/.32</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                </div>
            </div>

        </div>

        <div class="btn-pcv" id="load-more"> Cargar Mas</div>

    </main>

    <!-- FIN DE APARTADO DE CEVICHES -->

    <!-- APARTADO DE COMBOS -->

    <main class="combos container">

        <h2>Combos</h2>

        <div class="box-container-2" id="lista-2" id="combosnav">

            <div class="box-2">
                <img src="image/plato9.png" alt="">
                <div class="">
                    <h3>Combo I</h3>
                    <p>Ceviche de Pescado y Arroz con Mariscos</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar al carrito</a>
                </div>

            </div>
            <div class="box-2">
                <img src="image/plato10.png" alt="">
                <div class="">
                    <h3>Combo II</h3>
                    <p>Chufa de Mariscos y Ceviche Mixto</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato11.png" alt="">
                <div class="">
                    <h3>Combo III</h3>
                    <p>Chicarrón de Pescado y Arroz con Mariscos</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="11">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato12.png" alt="">
                <div class="">
                    <h3>Combinado de Pescado</h3>
                    <p>Ceviche de pescado + Chicharon de Pescado</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="12">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato13.png" alt="">
                <div class="">
                    <h3>Combinado Mixto</h3>
                    <p>Ceviche mixto + Chicharrón Mixto</p>
                    <p class="precio">s/.35</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="13">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato14.png" alt="">
                <div class="">
                    <h3>Chaufa Regional</h3>
                    <p>Chaufa regional Loretano</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="14">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato15.png" alt="">
                <div class="">
                    <h3>Tortilla de Mariscos</h3>
                    <p>Tortilla de mariscos</p>
                    <p class="precio">s/.32</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="15">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-2">
                <img src="image/plato16.png" alt="">
                <div class="">
                    <h3>Tortilla de Lagostino</h3>
                    <p>Tortilla de langostino</p>
                    <p class="precio">s/.32</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="16">Agregar al carrito</a>
                </div>
            </div>

        </div>

        <div class="btn-pcb" id="load-more-2"> Cargar Mas</div>

    </main>

    <!-- FIN DE APARTADO DE COMBOS -->

    <!-- APARTADO DE MENUS -->

    <main class="menus container">

        <h2>Menus</h2>

        <div class="box-container-3" id="lista-3">

            <div class="box-3">
                <img src="image/plato17.png" alt="">
                <div class="">
                    <h3>Lomo Saltado</h3>
                    <p>Lomo saltado con papas</p>
                    <p class="precio">s/.32</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="17">Agregar al carrito</a>
                </div>

            </div>
            <div class="box-3">
                <img src="image/plato18.png" alt="">
                <div class="">
                    <h3>Pollo Saltado</h3>
                    <p>Pollo saltado con papa</p>
                    <p class="precio">s/.32</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="18">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato19.png" alt="">
                <div class="">
                    <h3>Pechuga a la Plancha</h3>
                    <p>Pechuga a la plancha con ensalada de palta + arroz</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="19">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato20.png" alt="">
                <div class="">
                    <h3>Chicharon de Pollo</h3>
                    <p>Chicharon de pollo con porcion de papa + arroz</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="20">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato21.png" alt="">
                <div class="">
                    <h3>Bisteck a lo Pobre</h3>
                    <p>Bisteck con huevo + maduro + arroz</p>
                    <p class="precio">s/.38</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="21">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato22.png" alt="">
                <div class="">
                    <h3>Bisteck con Papas</h3>
                    <p>Bisteck + papas + arroz</p>
                    <p class="precio">s/.30</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="22">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato23.png" alt="">
                <div class="">
                    <h3>Tallarin Saltado</h3>
                    <p>Tallarin saltado</p>
                    <p class="precio">s/.20</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="23">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-3">
                <img src="image/plato24.png" alt="">
                <div class="">
                    <h3>Dieta de Pollo</h3>
                    <p>Dieta de pollo</p>
                    <p class="precio">s/.20</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="24">Agregar al carrito</a>
                </div>
            </div>

        </div>

        <div class="btn-pm" id="load-more-3">Cargar Mas</div>

    </main>

    <!-- FIN DE APARTADO DE MENUS -->

    <!-- APARTADO DE BEBIDAS -->

    <main class="bebidas container">

        <h2>Bebidas</h2>

        <div class="box-container-4" id="lista-4">

            <div class="box-4">
                <img src="image/bebida1.png" alt="">
                <div class="">
                    <h3>Chicha Morada</h3>
                    <p>Jarra de litro</p>
                    <p class="precio">s/.12</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="25">Agregar al carrito</a>
                </div>

            </div>
            <div class="box-4">
                <img src="image/bebida2.png" alt="">
                <div class="">
                    <h3>Cebada</h3>
                    <p>Jarra de litro</p>
                    <p class="precio">s/.12</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="26">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida3.png" alt="">
                <div class="">
                    <h3>Limonada Americana</h3>
                    <p>jarra de litro</p>
                    <p class="precio">s/.15</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="27">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida8.png" alt="">
                <div class="">
                    <h3>Maracuya</h3>
                    <p>jarra de litro</p>
                    <p class="precio">s/.12</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="28">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida5.png" alt="">
                <div class="">
                    <h3>Coca Cola</h3>
                    <p>Botella Personal</p>
                    <p class="precio">s/.5</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="29">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida6.png" alt="">
                <div class="">
                    <h3>Agua Mineral</h3>
                    <p>Botella Personal</p>
                    <p class="precio">s/.3</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="30">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida4.png" alt="">
                <div class="">
                    <h3>Inka Cola</h3>
                    <p>Botella Personal</p>
                    <p class="precio">s/.5</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="31">Agregar al carrito</a>
                </div>
            </div>

            <div class="box-4">
                <img src="image/bebida7.png" alt="">
                <div class="">
                    <h3>Cerveza</h3>
                    <p>Botella de 630ml</p>
                    <p class="precio">s/.10</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="32">Agregar al carrito</a>
                </div>
            </div>

        </div>

        <div class="btn-pbb" id="load-more-4">Cargar Mas</div>

    </main>

    <!-- FIN DE APARTADO DE MENUS -->


    <!-- APARTADOS DE APP -->
    <section class="app container">

        <div class="app-txt" id="contacto">
            <h2>Descarga nuestra app y descubre ofertas</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum laborum nesciunt labore autem, id
                doloribus doloremque enim
                maiores! Saepe facere possimus exercitationem, quisquam quos placeat
                inventore sit et doloribus fugit
            </p>
            <div class="descarga">
                <img src="image/store1.png" alt="">
                <img src="image/store2.png" alt="">
            </div>

        </div>

        <div class="app-img">
            <img src="image/app.png" alt="">
        </div>
    </section>

    <!-- FOOTER -->

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem</h3>
                <div class="descarga">
                    <img src="image/store1.png" alt="">
                    <img src="image/store2.png" alt="">
                </div>
            </div>

        </div>
    </footer>


    <script src="script/script.js"></script>
</body>

</html>