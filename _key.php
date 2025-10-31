<?php
header('Content-Type: text/plain');

$secret_key = getenv('_KEY'); 
 
$received_key = $_GET['key'] ?? '';

if ($received_key === $secret_key) {
    echo "True";
} else {
    echo "False";
}
?>
