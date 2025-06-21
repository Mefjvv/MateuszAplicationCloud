<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            /* Ustawia różowe tło */
            background-color: #FFC0CB; /* Kod szesnastkowy dla różowego */
            /* Wyrównuje zawartość do środka pionowo i poziomo */
            display: flex;
            justify-content: center;
            align-items: center;
            /* Rozciąga ciało strony na całą wysokość widoku */
            min-height: 100vh;
            /* Usuwa domyślne marginesy */
            margin: 0;
            /* Ustawia czcionkę */
            font-family: Arial, sans-serif;
            /* Rozmiar czcionki dla "Hello World" */
            font-size: 5em;
        }

        .hello-text {
            /* Kolor tekstu - biały */
            color: #FFFFFF;
            /* Obwódka tekstu - czarna, o grubości 2 pikseli */
            text-shadow: 2px 2px 0 #000000,
                         -2px -2px 0 #000000,
                         2px -2px 0 #000000,
                         -2px 2px 0 #000000;
            /* Wyśrodkowanie tekstu */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hello-text">
        <?php
            // Wyświetla tekst "Hello World!"
            echo "Hello World!";
        ?>
    </div>
</body>
</html>
