<?php
/** 
 * Returns a random valid public IP address. For the definition of a  
 * public IP address see http://www.faqs.org/rfcs/rfc1918.html 
 * @return string The IP address 
 */  
function random_valid_public_ip() {  
  // Generate a random IP  
  $ip =  
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255);  

   // generate random ip adress
  // Return the IP if it is a valid IP, generate another IP if not  
  if (  
      !ip_in_range($ip, '10.0.0.0', '10.255.255.255') &&  
      !ip_in_range($ip, '172.16.0.0', '172.31.255.255') &&  
      !ip_in_range($ip, '192.168.0.0', '192.168.255.255')  
  ) {  
    return $ip;  
  } else {  
    return random_valid_public_ip();  
  }  
}  
  
/** 
 * Returns true if the IP address supplied is within the range from  
 * $start to $end inclusive 
 * @param string $ip The IP address to be checked 
 * @param string $start The start IP address 
 * @param string $end The end IP address 
 * @return boolean  
 */  
function ip_in_range($ip, $start, $end) {  
  // Split the IP addresses into their component octets  
  $i = explode('.', $ip);  
  $s = explode('.', $start);  
  $e = explode('.', $end);  
  
  // Return false if the IP is in the restricted range  
  return in_array($i[0], range($s[0], $e[0])) &&  
      in_array($i[1], range($s[1], $e[1])) &&  
      in_array($i[2], range($s[2], $e[2])) &&  
      in_array($i[3], range($s[3], $e[3]));  
}  

function check($host,$user,$pass){

	$ssh = new Net_SSH2($host);

    if (!$ssh->login($user, $pass)) {

   return 'BAD';

} else {
d
   return 'GOOD';


}


}