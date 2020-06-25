<?php

echo '<h1>Felicidades tu pago se ha procesado correctamente </h1>';
echo 'pago realizado con: ' .htmlspecialchars($_GET["payment_type"]).'<br>';
echo 'Referencia: ' .htmlspecialchars($_GET["external_reference"]).'<br>';
echo 'Id de pago MP: ' .htmlspecialchars($_GET["collection_id"]).'<br>';

echo '<a href="/">Volver a la página principal</a>';

?>