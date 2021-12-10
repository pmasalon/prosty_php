wyniki.php
Kto ma dostęp

Właściwości systemowe
Typ elementu
HTML
Rozmiar
1 KB
Zajęte miejsce
1 KB
Lokalizacja
2
Właściciel
ja
Zmodyfikowano
30 paź 2019 przeze mnie
Otwarty
20:03 przeze mnie
Utworzono
6 wrz 2020 w aplikacji Google Drive Web
Dodaj opis
Przeglądający mogą pobierać
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Testowanie skryptów PHP</title>  
    <style>
        body{background-color: cadetblue;}
		.aaa{border: 2px solid #661144;
		width: 50%;
        height: 50px;
		background-color:burlywood;
        margin: 0 auto;
        text-align: center;
        font-size: 25px;
        }    
		span{color: cornflowerblue}    

  </style>
</head>
<body>
   <?php
        $cel = $_POST['cel'];
        $stopnie = $_POST['stopnie'];
        
		switch($stopnie)
		{
            case 'fah': $fah = $cel*(9/5)+32;
				echo "<div class='aaa'><span>Fahrenheit</span> $fah &degF</div>"; break;
            case 'kel': $kel = $cel+273.15;
				echo "<div class='aaa'><span>Kelvin</span> $kel K</div>"; break;
            case 'ran': $ran = ($cel+273.15)*(9/5);
				echo "<div class='aaa'><span>Rankine</span> $ran &degR</div>"; break;
            case 'del': $del = (100-$cel)*(3/2);
				echo "<div class='aaa'><span>Delisle</span> $del &degDe</div>"; break;
            case 'newt': $new = $cel*(33/100);
				echo "<div class='aaa'><span>Newton</span> $new &degN</div>"; break;
            case 'rea': $rea = $cel*(4/5);
				echo "<div class='aaa'><span>Reaumur</span> $rea &degRe</div>"; break;
            case 'rom': $rom = $cel*(21/40)+7.5;
				echo "<div class='aaa'><span>Romer</span> $rom &degRo</div>"; break;
		}
		
   ?>
</body>
</html>
