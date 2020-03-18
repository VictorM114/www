<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3SChoolsPHP</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    <!--Comentarios-->
    <?php
        #Se puede comentar así
        //Asi
        /*O asi*/
        #Echo basicamente es como un print
        echo "Hola a todos!<br>";
        $num = 10; #las variables se declaran con el signo de dolar
        $texto = "Hola mundo!<br>";
        $deci = 10.6;
        echo $num;#mostrando una variable
        echo "<br>";
        echo "Yo quiero decir $texto<br>";
        echo "Yo quiero decir <br>" . $texto; //En php se concatena con el punto
        
    ?> 
    <!--Variables-->
    <?php
        $x = 5;#esto es una variable global
        function myTest(){
            /*Si utilizo la variable global x dentro de la función, me va a generar un error.
            si uso la variable y, que esta declarada dentro, no tendré problemas*/
            $y = 8;

            global $x; /*puedo utilizar las variables globales si 
                        las declaro es como un buscador*/
            echo "<p>Variable x inside function is: $y y la global es $x.  </p><br>";
        }

        myTest();#llamo la funcion
        echo $x;//Si uso la variable fuera, no tendre error
    ?>

    <!--Echo-->
    <?php
        echo "<h2>PHP</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
        
        #Haciendo display a las variables

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;

    ?>
    <!--PHP Print-->
    <?php 
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt1 . "</h2>";
        print "Study PHP at " . $txt2 . "<br>";
        print $x + $y;
    ?>



    
</body>
</html>