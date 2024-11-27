<!DOCTYPE html>
<html>
<head>
<title>Getting Started With PHP</title>
</head>
<body>
<h1>Beginners Guide For PHP</h1>
<p>Tutorial Series For Learning PHP</p>
<?php

class handphone {
    var $brand;
    var $type;
    var $ttlPulsa;

    function __construct($pulsa) {
        $this -> ttlPulsa = $pulsa;
    }

    function sendMessage($fee, $ttl_message=1){
        $this->ttlPulsa -= $fee * $ttl_message;
    }

    function __destruct() {
        echo "Jumlah pulsa sekarang ";
        echo $this -> ttlPulsa;
    }

}

$kevin = new handphone(1500);
$selin = new handphone(2000);

echo "Jumlah pulsa Kevin ";
echo $kevin -> ttlPulsa;
echo "<br>";

$kevin -> sendMessage(150);

echo "Jumlah pulsa sekarang ";
echo $kevin -> ttlPulsa;
echo "<br>";

$kevin -> sendMessage(100, 2);

echo "Jumlah pulsa sekarang ";
echo $kevin -> ttlPulsa;
echo "<br>";

?>
</body>
</html>