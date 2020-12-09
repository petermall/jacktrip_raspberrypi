<?php


$JACKAUDIO = "JACK_OPTS=-R -dalsa -dhw:sndrpihifiberry --rate " . $_POST['rate'] . "--period" . $_POST['period'];

echo $JACKAUDIO;

//exec("sudo echo $JACKAUDIO > /etc/jacktrip/jackconf")
//exec("sudo echo $JACKTRIP >> /etc/jacktrip/jackconf")

//To be
//JACKTRIP_OPTS=-t -z -n 2 -C server --bindport 4494 --clientname hubserver -q 2
//JACK_OPTS=-R -dalsa -dhw:sndrpihifiberry --rate 44100 --period 128

//echo "Test <br>";
//        exec('sudo amixer -c 1 sget ADC 2>&1', $output);
//        var_dump($output[4]);
//        echo "<br>";
//        var_dump($output[5]);
//}
//echo $_POST["volume"];

?>

<html>
<body>
<h1>Jackaudio und JackTrip Setup</h1>

<form action="" method="post">
Sample rate (44100, 48000): <input type="text" name="rate", value="44100"><br>
period (64,128,256,1024): <input type="text" name="period", value="128"><br>
Server Name: <input type="text" name="server"><br>
Queue (2+, auto): <input type="text" name="queue", value="3"><br>
Bindport: <input type="text" name="bindport", value="4464"><br>
Number of channes: <input type="text" name="num", value="2"><br>



<input type="submit">
</form>

<a href="index.html">Zurueck</a>
</body>
</html>

<br>
<a href="index.html">Zurueck</a>
