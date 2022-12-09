<?php
include('./includes/head.php')
?>

<!--     Estilos -->
<link rel="stylesheet" href="/styles/style.css" />
<link rel="stylesheet" href="/styles/embed.css" />
<link rel="stylesheet" href="/styles/prezi.css" />
<link rel="stylesheet" href="/styles/img.css" />

</head>

<body>
    <!-- Contenido -->

    <div class="cuerpo">

        <div class="titulo">
            <header style="text-decoration:underline ;">Consejo de Participación</header>
        </div>

        <div class="revalidas">
            <article class="pdf">
                <h2 class="titulo-tarjeta">Articulos</h2>
                <embed src="/pdf/Consejo Part..pdf" type="application/pdf" width="100%" height="85%">
                <a href="/pdf/Consejo Part..pdf" target="_blank" class="enlace-tarjeta">Ampliar</a>
            </article>
        </div>

        <div class="compendio">
            <h2 class="titulo-tarjeta">Compendio</h2>
            <img src="/pdf/Compendio consejo de participación.png" alt="Compendio consejo de participación" class="CCP">

        </div>

        <div class="prezi">
            <h2 class="titulo-tarjeta">Prezi</h2>
            <iframe src="https://prezi.com/p/embed/ii-vu7ejuxr9/" id="iframe_container" frameborder="0"
                webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" allow="autoplay; fullscreen">
            </iframe>
        </div>

    </div>

    <?php
    include('./includes/footer.php')
    ?>