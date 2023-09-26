<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFZ0lEQVR4nO2dWYgdRRSG/3FGY+KCaFwyZIwkEh2MmohiXHBByYL7AoMgLigSxShhNPgkkYgvgkgUH4yKJi6I+iDGEFDRB7PhQkRFQXBLjIJRJzqKo5k5UnAGmuvte6u7T3Wd7j4f/G/Tt0/Vf+tOVfU51YBhGIZhGIbRbE4CsAjAUbEDaTqHAtgIgFhjAIZjB9VknkiYkdTtsQNrKrtTDPkXwMWxg2saB6WYMalfAcyNHWSTmN3FEKfPAEyLHWhTONPDEKenYgfaFK73NIT4b43APJnBkD/s/0l4vsxgiNNWAL0lxNVIjgcwkdEQp7tjB15XHsxhhtOfbKYhyH4Avs9piNO7AHrMETmuKWDGpG4wQ2ToAbBDwJAfeKVvKBgdxHrA3CjG/gA+FzTkLwADZkp+hgXNmNQLZkg+jgYwEsAQt5aZZ6Zk5+UAZkxqnRmSjcsDmkEA/gFwnJnix2EAdgU2hAA8Zob48WIJZhBvqVjGSheuK8kMYq2yUZLOTAC/lGzITtueT988fKdkM4i1xEbJ/7knkhnE/7OMBKcA+DuiIb8DmOrpyAA/l3mWE/N8r6sMBwD4JKIZxLrKI9b5bF7yui0ApqBGrFZgBgF42iPWt1KuXYGacDqnf5ICfdcl1iMA7Eu59us6zNTcMP9UgRGUUKcU1Fu6XHsFKs5DCgygFt3YId6tXa515RGV5TTe3CNlWpMS78ke17qfsxmo6KxK8gkgCWpzSszPe15fyaKhlQo6nlL0c5t4FwAY97z+I1TwCeBeBR1PHXRwIt4+AB9kfBLp9uMqw3MKOpy6yBWSFlkjLUNFmJdh6MfUORzvUM484g2oCK8p6Gzy0GJ+JjNWIM1IfTLeqTm/bRRBbwvEqn6R+IqCjqYStRaKmalov4pK0m7NmfarFHQQRdCJUEhfSek8pFC3QSFLFHQMRZLbblHH4wo6hiLpWyjkGwUdQxF1JJQlLlDDtRiKuFNBh1Bk3YeKnrggpR8VmJDUS1DE9hIbvgPABQAeVWBCUh9CCb2cWR66weMA7uc6RMcXCkxoPbtLBf0lNHYvgEtLvmceHQ4FDAZu5CiAhS33PFdB57eTilrGswI2cCxlOjmkoPPb6WzUfMtkOOWeNyno/HZaCgVcGahx27iOpB2XKej8vEncwbkwUOPO63DPBQo6X+1qfX6EOX0vgD0KDEhLmoj+lFC6Ycs97uubYVim3JczOj0BijfneJY3kDK55EAVpBW3hF7xvqnAhOSpqLUsN9iS4b6zuCNIgVypnhoWCjZsY8Z736zADHW7vT1cJibRsNdz3F/Dzu9dUMbDQg3bnjPjJXb66hlQxiyhSqldBeoYN0Uy47fEYwFVrBNq4OwCprwRwZD1UMqgUCrpsgIxHNjyzqoydC0U84hQVnoRpnDtRlk/V9O0v1Ut7b1RvppoqW7Ka0oZI8XN8NRziUDdxVqBOKbyaAtlxoTWROsQP137BEYJ+OdkWyBDXC1MpWrUNxds8AahWI4JkOo6zocMVIrpAL4q2PAhwRMlJM/pclXGlcS9XOWnAg3fI3iMxR1CZozwqKssgwVnXu8JroQlHhXU4rWvJxR8a84awTjylkETb8+orSnMSj+fEZK3M1ZGngHurOopQJ1whfavFpj3rxCIYSDHRugoZ7vUluUFZj2rBe6/PuMU92o0AHfqw8eRcqAWZRiVjXo3Yh9XH41mNMQVCRVduI54mOGqwxpJPx9YnHYaaIhNvU5vZnCPEW4VuEflmQvgmS7/X9w39/yAabBuMXqRwOfXiuk8o3q/ZdSMCR9mfG/LusTtDh8r+Pm15BCuQ1ka6KUsM/izXXm3YRiGYRiGgbrxH3I+Ak7FecZmAAAAAElFTkSuQmCC" />
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Practica PHP</title>
</head>


<body class='body'>

    <h1 class="sara">INDEX</h1>

    <?php
        // Texto
        echo "index";
        // Espacio
        echo "<br><br>";

        // Botón "Ir a otra carpeta"
        echo '<a href="/miaplicacionphp/practica.php">Ir a otra carpeta</a>
        <br><br>';

        // Hora
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechayhora = date('m-d-Y h:i:s a');
        echo $fechayhora;
    ?>
</body>


<br><br>
<a href="/miaplicacionphp/practica.php">Ir a practica</a>
    
    

