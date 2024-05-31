<?php
// Una funcio que rebi cinc numeros sencers com a paràmetres i mostri per pantalla el resultat de sumar els cinc números
function primeraFuncio($primerNumero1,$segonNumero1,$tercerNumero1,$quartNumero1,$cinqueNumero1) {
	$resultat = $primerNumero1 + $segonNumero1 + $tercerNumero1 + $quartNumero1 + $cinqueNumero1;
	echo "$resultat";
}

$a = 1; $b = 1; $c = 1; $d = 1; $e = 1;
echo "<strong>A) El resultat de la funció pasant com a paràmetres $a,$b,$c,$d,$e és:</strong><br><br>";
primeraFuncio($a,$b,$c,$d,$e);
echo "<br><br>";


function segonaFuncio($primerNumero2,$segonNumero2,$tercerNumero2,$quartNumero2,$cinqueNumero2) {
	// Una funció que rebi cinc números sencers com a paràmetres i retorni el resultat de sumar els cinc números (hi ha un valor de retorn).
	$resultat = $primerNumero2 + $segonNumero2 + $tercerNumero2 + $quartNumero2 + $cinqueNumero2;
	return $resultat;
}

// Amb els valors: 2, 5, 1, 8, 10 a una variable de nom $tmp i mostra per pantalla el valor de la variable
$a = 2; $b = 5; $c = 1; $d = 8; $e = 10;
echo "<strong>B) \$tmp = El resultat de la funció passant com a paràmetres $a,$b,$c,$d,$e</strong><br><br>";
$tmp = segonaFuncio(2,5,1,8,10);
// echo "La variable \$tmp és la suma dels números. El resultat és: $tmp";
echo "\$tmp = $tmp<br><br>";


// Rep el valor del radi de la base i l'alçada d'un cilindre i retorna el volum del cilindre
function terceraFuncio($radi,$alcada) {
	$volum = pi() * $radi * $radi * $alcada;
	$volum = round($volum,3); // arrodonir numero
	return $volum;

}

$a = 5; $b = 10;
echo "<strong>C) Radi = $a / Alçada = $b:</strong><br><br>";
$volum = terceraFuncio($a,$b);
echo "\$volum = $volum<br><br>";



// Una funció per crear un mètode de generació de missatges de depuració per a la pàgina web.
function quartaFuncio($a) {
	// Si DEBUG té qualsevol valor diferent d'1, els missatges de DEBUG no es mostraran.
	// Si DEBUG té valor 1, es mostrará, un condicional "if" de tota la vida.
	// Tots els missatges de depuració es mostraran dins d'un paràgraf remarcat en color vermell.
	if (DEBUG == 1) {
        echo '<p style="border: 1px solid red; padding: 1px;"><strong>Debug:</strong><br>' . $a . '</p>';
	}
	
}

define('DEBUG',1); // Constant (global) amb nom DEBUG amb el valor 1
echo "<strong>D) Debug:</strong>";
quartaFuncio('Missatge de prova de debug.');

?>