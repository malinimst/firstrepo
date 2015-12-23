<?php
//$myfile = fopen("/var/www/logs/checkout_log/log".date('Y-m-d').".txt", "a");
$myfile = fopen('/var/www/logs/checklog'.date('Y-m-d').'.txt', 'a');

$collectArray=$_POST['trackdata'];


 $current = "////// Collects the checkout log\n";

if($collectArray[4]!='')
{
$current .= "nfdn-shipping-enable:".$collectArray[4]."\n";

}

else
{
$current .= "nfdn-shipping-enable:N\n";
}
$current .= "Status:".$collectArray[0]."\n";
$current .= "Order id:".$collectArray[1]."\n";
$current .= "Insta click Enabled:".$collectArray[2]."\n";

$current .= "Shipping Amount:".$collectArray[3]."\n";


$current .= "Dealer id:".$collectArray[5]."\n";
$current .= "Dealer url:".$collectArray[6]."\n";
$current .= "Insurance Enabled:".$collectArray[7]."\n";
$current .= "Order Total:".$collectArray[8]."\n";
$current .= "Authorized Status:".$collectArray[10]."\n";
$current .= "Process Status:".$collectArray[11]."\n";

$current .= "Date/Time:".$collectArray[9]."\n";


fwrite($myfile, $current);
fclose($myfile);
?>

