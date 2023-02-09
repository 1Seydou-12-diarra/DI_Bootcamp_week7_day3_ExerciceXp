 <?php
 session_start();
$_SESSION['nom'] = 'seydou';
 echo '<pre>';
 print_r($_SESSION);
echo '</pre>';