<?php
echo "<h1>Jacktrip wird gestartet</h1>";
echo "\n";
exec('sudo /bin/systemctl start jack.service');
exec('sudo /bin/systemctl start jacktrip.service', $jacktrip, $return);
exec('sudo su jacktrip -c "/usr/bin/jmess -D -c /var/tmp/test.xml"', $jmess, $jreturn);

echo "Jmess ok? ";
echo $jreturn;

echo "Gestartet\n";
echo $return;
?>
<br>
<a href="index.html">Zurueck</a>
