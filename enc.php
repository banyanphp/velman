<?php
function encrypt($key, $text)  { 
    // Generate an initialization vector  
    $iv = substr(md5($key), 0, mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_ECB)); 

    // Generate the encrypted text 
    $encrypted = bin2hex(mcrypt_encrypt(MCRYPT_CAST_256, $key, $text, "ecb", $iv)); 
    return $encrypted; 
} 


function decrypt($key, $encrypted)  { 
    /* incoming: should be the $key that you encrypted with  
     * $encrypted is the encrypted string (encrypted text) 
     * returns plain text 
     */ 

    // generate an initialization vector 
    $iv = substr(md5($key), 0, mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_ECB)); 
     
    // Convert the hex back to a binary string  
    $binary_encrypted = hex2bin($encrypted); 
     
    // now we do our normal decrypting 
    $text = mcrypt_decrypt(MCRYPT_CAST_256, $key, $binary_encrypted, "ecb", $iv); 
     
    // Return the answer 
    return trim(chop($text)); 
} 


function hex2bin($data) { 
    $len = strlen($data); 
    return pack("H" . $len, $data); 
} 

// NOTE:  THIS IS BASICALLY HOW THIS FILE WORKS. 

/*  

$key = "THIS IS MY KEY"; 
$test_phrase = "This is the test phrase... SHH!  DON'T TELL ANYONE!"; 
echo("this is the phrase: ". $test_phrase ."<br /><br />"); 

$encrypted = encrypt($key, $test_phrase); 
echo("this is the encrypted text: " .$encrypted ."<br /><br />"); 

$decrypted = decrypt($key, $encrypted); 
echo("this is the decrypted text: ". $decrypted ."<br /><br />"); 

*/  
?>