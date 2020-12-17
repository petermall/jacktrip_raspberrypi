<?php

//echo $_POST["volume"];

if (isset($_POST['volume'])) {
        $vol = $_POST["volume"];
        exec("sudo amixer -c 1 sset ADC $vol 2>&1", $out);

	//echo "Test Volume<br>";
        exec('sudo amixer -c 1 sget ADC 2>&1', $output);
        var_dump($output[4]);
        echo "<br>";
        var_dump($output[5]);
}

if (isset($_POST['inboost'])) {
        $in = $_POST["inboost"];
        exec("sudo amixer -c 1 sset Analogue Playback Boost $in 2>&1", $out);


	echo "Test Boost <br>";
        exec('sudo amixer -c 1 sget Analogue Playback Boost 2>&1', $output);
        var_dump($output[4]);
        echo "<br>";
        var_dump($output[5]);
}

if (isset($_POST['master'])) {
        $master = $_POST["master"];
        exec("sudo amixer -c 1 sset Digital $master 2>&1", $out);


	echo "Test Master<br>";
        exec('sudo amixer -c 1 sget Digital 2>&1', $output);
        var_dump($output[4]);
        echo "<br>";
        var_dump($output[5]);
}

if (isset($_POST['masterboost'])) {
        $oboost = $_POST["masterboost"];
        exec("sudo amixer -c 1 sset Analogue $oboost 2>&1", $out);


	echo "Test <br>";
        exec('sudo amixer -c 1 sget Analogue 2>&1', $output);
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
Input Volume (0-104 - 0db=24): <input type="text" name="volume"><br>
Input Boost (0/100): <input type="text" name="inboost"><br>
Master Volume (0-207): <input type="text" name="master"><br>
Master Boost (0/100): <input type="text" name="masterboost"><br>
<input type="submit">
</form>

<a href="index.html">Zurueck</a>
</body>
</html>
