<?php

echo"Jacktrip anhalten";
echo "<br>";
exec('sudo /bin/systemctl stop jacktrip.service', $jacktrip, $return1);
exec('sudo /bin/systemctl stop jack.service', $jack, $return0);
echo "Gestoppt <br>";
echo $return1,"<br>";
echo $return0, "<br>";
?>

<br>
<a href="index.html">Zurueck</a>
