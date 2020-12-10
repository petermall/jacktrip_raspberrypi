<?php

echo"<h1>Jacktrip anhalten</h1>";
echo "<br>";
exec('sudo /bin/systemctl stop jacktrip.service', $jacktrip, $return1);
exec('sudo /bin/systemctl stop jack.service', $jack, $return0);
echo "Gestoppt <br>";
echo $return1," Jacktrip (Fehler bei <>0)<br>";
echo $return0, " Jack<br>";
?>

<br>
<a href="index.html">Zurueck</a>
