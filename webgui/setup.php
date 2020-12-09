<?php


if (isset($_POST['volume'])) {
        $vol = $_POST["volume"];
        exec("sudo amixer -c 1 sset ADC $vol 2>&1", $out);


//echo "Test <br>";
        exec('sudo amixer -c 1 sget ADC 2>&1', $output);
        var_dump($output[4]);
        echo "<br>";
        var_dump($output[5]);
}
//echo $_POST["volume"];

?>

<html>
<body>
<h1>Jackaudio und JackTrip Setup</h1>

<form action="" method="post">
Sample rate (44100, 48000): <input type="text" name="rate", input="44100">
period (64,128,256,1024): <input type="text" name="period", input="128">
Server Name: <input type="text" name="server">
Queue (2+, auto): <input type="text" name="queue", input="3">
Bindport: <input type="text" name="bindport", input="4464">
Number of channes: <input type="text" name="num", input="2">


<input type="submit">
</form>

<a href="index.html">Zurueck</a>
</body>
</html>

<br>
<a href="index.html">Zurueck</a>
