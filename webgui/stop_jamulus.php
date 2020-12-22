<?php

echo"<h1>Jamulus anhalten</h1>";
echo "<br>";
exec('sudo /bin/systemctl stop jamulus.service', $jacktrip, $return1);
exec('sudo /bin/systemctl stop jack.service', $jack, $return0);
echo "Gestoppt <br>";
echo $return1," Jamulus (Fehler bei <>0)<br>";
echo $return0, " Jack<br>";
?>

<br>
<a href="index.html">Zurueck</a>
