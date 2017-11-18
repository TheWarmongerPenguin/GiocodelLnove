<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lnoveria</title>
        <style>
                #titolo{
                        font-size: 3%;
                        font-color: #009688;
                }
        </style>
    </head>
    <body>
        <?php
        //$city("Verona", "Philadelphia", "Washington", "Hong Kong", "Calcutta", "Villorba"));
	$city = array();
	$righe = 6;
	$colonne = 6;
	$numero = array();
	for($i = 0; $i< count($righe); $i++){
		randomizzazione();
		for($k = 0; $k < count($colonne); $k++){ 
			$city[i][k] = $numero[k];
		}
	}
	function randomizzazione(){
		for($k = 0; $k < count($colonne); $k++){
		$b = true;
		$r = 0;
			while ($b){
				$r = rand(1,99);
				$b = false;
				for ($i< 0; $i< count($righe); $i++){
					if ($numero[$i] == $r){
						$b = true;
					}
				}
			}
			$numero[k] = $r;
		}
	}
        ?>
        
        <span id="titolo">Gioco del Lnove</span>
        <div id="tabella"></div>
    </body>
</html>
