<?php

//echo $_POST["volume"];
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
<h1>Eingangs-Lautstärke einstellen</h1>

<form action="" method="post">
Volume (0-104 - 0db=24): <input type="text" name="volume">
<input type="submit">
</form>

<a href="index.html">Zurueck</a>
</body>
</html>
