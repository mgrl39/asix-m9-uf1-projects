<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Estils per als colors de fons de les cel·les */

    table,
    th,
    td {
        border: 1px solid;
    }

    .tronja {
        background-color: #ffddaa;
    }

    .groc {
        background-color: #ffffaa;
    }

    .lila {
        background-color: #7777ff;
    }

    .rosa {
        background-color: #ccaaff;
    }
    </style>
    <!-- un titol no ve malament -->
    <title>Taula de Divisors</title>
</head>

<body>

    <table>
        <!-- Bucle per a les files -->
        <?php
  for ($fila = 0; $fila < 11; $fila++) {
	  // obro unafila, UNA FILA
	  echo "<tr>";

    // Bucle per a les columnes
    for ($columna = 0; $columna < 12; $columna++) {
      if ($fila == 0 && $columna == 0) {
        echo '<td class="lila">&nbsp;&nbsp;&nbsp;&nbsp;</td>';
      }
      else if ($fila == 0) {
      echo "<td class=\"rosa\">" . (50+$columna-1) . "</td>";
      }

     
      else if ($columna == 0){
	 echo "<td class=\"rosa\">$fila</td>";
        // Afegeix la lògica per a les altres cel·les aquí
        // echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>';
      } else {
	      if ($fila % 2 == 0) {
	      	$color = "tronja";
	      } else {
	      	$color = "groc";
	      }

	      if (((50+$columna-1) % $fila) == 0){
	echo "<td class=\"$color\">*</td>";	      
	      } else {
		      echo "<td class=\"$color\">-</td>";
	      }
      }
      // else if ($fila = 0) {
      	//echo "<td class=\"rosa\">$columna+50</td>";
      //}
    }

	  // Tanco la fila amb </tr>

    echo "</tr>";
  }
  ?>
    </table>

</body>

</html>