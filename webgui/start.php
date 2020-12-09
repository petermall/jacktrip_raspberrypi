<?php
echo "<h1>Jacktrip wird gestartet</h1>";
echo "\n";
exec('sudo /bin/systemctl start jack.service');
exec('sudo /bin/systemctl start jacktrip.service', $jacktrip, $return);
echo "Gestartet\n";
var_dump($jacktrip);
?>
<br>
<a href="index.html">Zurueck</a>
