<?php
echo "<h1>Jamulus wird gestartet</h1>";
echo "\n";
exec('sudo /bin/systemctl start jack.service');
exec('sudo /bin/systemctl start jamulus.service', $jacktrip, $return);
// exec('sudo su jacktrip -c "/usr/bin/jmess -D -c /var/tmp/test.xml"', $jmess, $jreturn);

echo "Jmess ok? ";
echo $jreturn;

echo "Gestartet\n";
echo $return;
?>
<br>
<a href="index.html">Zurueck</a>
