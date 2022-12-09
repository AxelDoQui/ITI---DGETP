<?php
include('./includes/head.php')
?>

<!--     Estilos -->
<link rel="stylesheet" href="/styles/style.css" />
<link rel="stylesheet" href="/styles/embed.css">

</head>

<body>

    <!-- Contenido -->
    <div class="cuerpo">

        <div class="titulo">
            <header style="text-decoration:underline ;">Comisión Fomento</header>
        </div>

        <div class="tarjetas">
            <article class="pdf">
                <h2 class="titulo-tarjeta">Reglamento</h2>
                <embed src="/pdf/Estatuto_del_estudiante_de_educaion_media.pdf" type="application/pdf" width="100%" height="85%">
                <a href="/pdf/Consejo Part..pdf" target="_blank" class="enlace-tarjeta">Ampliar</a>
            </article>
        </div>

    </div>

    <?php
    include('./includes/footer.php')
    ?>