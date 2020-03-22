<html lang="en" lang="es">
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
        <hr>
        <h2>Variables en PHP</h2><br>
        <hr>
    <?php
        //Esto es un Sting
        
      $x = "Hello world!";
      $y = 'Hello world!';
      
      echo $x;
      echo "<br>";
      echo $y;  
    ?>
    <?php
        #Esto es un integer/entero
        $x = 5985;
        /*Esta funcion retorna el tipo de dato de la variable 
        y el valor*/
        var_dump($x);
    ?>
    <?php
        #Esto es una variable float
        $x = 10.365;
        var_dump($x);
    ?>
    <?php
        #Estos son variables booleans
        $x = true;
        $y = false;
    ?>
    <?php
        #Esto es un arreglo en php
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);/*Esta funcion tambien me da el tamaño del arreglo, 
        la posicion de cada elemento, y la longitud*/
    ?>
    <!--Aquí hay algo que dice object que no entendí-->
    <hr>
    <h2>Funciones Strings</h2>
    <hr>
    <?php
        #La funcion strlen te muestra cuantos caracteres hay en un string
        echo strlen("Hello world!"); //esto muestra 12
        echo "<br>";
        #La funcion siguente de muestra cuantas palabras hay en el string
        echo str_word_count("Hello World!"); //Muestra 2    
        echo "<br>";
        #funcion para hacer un reverse de un string
        echo strrev("Hello World!"); //muestra !dlroW olleH
        echo "<br>";
        #Funcion que muestra la primera posicion del string que solicitamos si existe
        echo strpos("Hello world!", "world"); //muestra 6
        echo "<br>";
        #funcion que remplaza unos characteres por otros
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    ?>
    <hr>
    <h2>Numeros en PHP</h2>
    <hr>
    <?php
    /*La funcion is_int retorna true si una variable es entera 
    y false si no lo es */
        $x = 5985;
        var_dump(is_int($x));
        $x = 59.85;
        var_dump(is_int($x));        
    ?>
    <?php
        /*Como la anterior, esta funcion retorna true si la variable es float
        y false si no lo es */
        $x = 10.365;
        var_dump(is_float($x));
    ?>
    <hr>
    <h2>Constantes en PHP</h2>
    <hr>
    <?php
        echo "<h4>Las constantes son globales</h4><br>";
        /*Para declarar una variable constante en php utilizamos la funcion define */
        #define(name, value, case insensitive) el ultimo atributo es true or false
        define("SALUDOS", "Bienvenidos al Himalaya!");
        echo SALUDOS, "<br>";
    ?>
    <?php
        //Podemos definir un arreglo constante en php con la misma funcion 
        define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
        echo cars[0];
    ?>
    <hr>
    <h2>Condicionales en PHP</h2>
    <hr>
    <!--El sintaxis de la condicional if seria este
        if(condicion) {codigo que se ejecuta}-->
    <?php
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day!";
        }
    ?>
    <!--El sintaxis de la condicional if else seria este
        if(condicion) {codigo que se ejecuta} else {codigo que se ejecuta}-->
    <?php
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day!";
        } else { 
            echo "Have a good night!";
        }
    ?>
    <!--El sintaxis de la condicional if else seria este
        if(condicion) {codigo que se ejecuta} else if {codigo que se ejecuta}
        else {codigo que se ejecuta}-->

    <?php
        $t = date("H");

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
        echo "<br>";
    ?>
    <?php
      /*
        El sintaxis del switch es 
        switch (n) {
            case label1:
                code to be executed if n=label1;
                break;
            case label2:
                code to be executed if n=label2;
                break;
            case label3:
                code to be executed if n=label3;
                break;
            ...
            default:
                code to be executed if n is different from all labels;
        }*/
        
        $favcolor = "grey";

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
            }
    ?>
    <hr>
    <h2>Loops en PHP</h2>
    <hr>
    <?php
        echo "<h3>While Loop!</h3>";
        $x = 1;

        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }
        echo "<h4>Ahora diferente</h4>";
        $x = 0;

        while($x <= 100) {
            echo "The number is: $x <br>";
            $x+=10;
        }   
    ?>
    <?php
        echo "<h3>Do - While Loop!</h3>";
        $x = 1;
        /*El do while ejecuta el codigo una vez y luego sigue ejecutando hasta que 
        deje de cumplir*/
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        
        echo "<h4>Ahora cumple una vez</h4>";
        
        $x = 6;

        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
    ?>
    <?php
        echo "<h3>For Loop!</h3>";
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }

        echo "<h4>Ahora de 10 en 10</h4>";
        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        }
    ?>
    <?php
    //Esta funcion es para los arreglos
    //La variable value ya está definida por default, es como un contador
         echo "<h3>Foreach Loop!</h3>";
         $colors = array("red", "green", "blue", "yellow");

         foreach ($colors as $value) {
           echo "$value <br>";
         }
         $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "<br>";
         foreach($age as $x => $val) {
           echo "$x = $val<br>";
        }
    ?>
    <hr>
    <h2>Funciones en PHP</h2>
    <hr>
    <?php
     function writeMsg() {
        echo "Hello world!<br>";
    }
    
    writeMsg(); // llamamos la funcion
    echo "<br>";
    /*Funciones con Argumentos */
    function familyName($fname) {
        echo "$fname Refsnes. <br>";
    }
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    
    function familyName2($fname, $year) {
        echo "$fname Refsnes was born in $year <br>";
    }
    echo "<br>";
    familyName2("Hege", "1975");
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983")
    ?>
    <hr>
    <h2>Arreglos en PHP</h2>
    <hr>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <h3>Loop por un array</h3>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        #La funcion arrlength es una funcion definida ya en php
        $arrlength = count($cars);
        
        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
    ?>
    <hr>
    <h3>Arreglos asociacitivos</h3>
    <hr>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.<br>";
        
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>
    <hr>
    <h3>Arreglos multidimensionales</h3>
    <hr>
    <?php
        $cars = array
        (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );

        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
              echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
          }   
    
    
    ?>


</body>
</html>