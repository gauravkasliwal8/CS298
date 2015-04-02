<?php

//echo $_SERVER['SERVER_ADDR'] . "\n";
echo $_SERVER['REMOTE_ADDR'] . "\n";

$ipAddress=$_SERVER['REMOTE_ADDR'];
$macAddr=false;
//$cols = array();
$arp=`arp -a $ipAddress`;
$lines=explode("\n", $arp);
foreach($lines as $line)
{
   $col=preg_split('/\s+/', trim($line));
   if ($col[0]==$ipAddress)
   {
       $macAddr=$col[1];
   }
}
$macAddr = preg_replace('/-/', ':', $macAddr);
echo "\n #### - " . $macAddr;
//echo "<br/>\n ---" . $macAddr;


?>
<html>
<head>

<meta http-equiv="refresh" content="55">
</head>
<body>
tshark -nn -r capturefile.dmp -T fields -E separator=';' -e ip.src -e tcp.srcport -e ip.dst -e tcp.dstport '(tcp.flags.syn == 1 and tcp.flags.ack == 0)'


<br/>
tshark -i eth0 -nn -e ip.src -e ip.dst -Tfields -E separator=, -R ip

<br/>
tshark -o column.format:'"Source", "%s","Destination", "%d"' -Ttext
</body>


</html>

