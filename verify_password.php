<?php
// Hash from database
$hashFromDatabase = '$2y$10$WtN1stStI0/96DhAphCnUuOwb6lr0ztVmC1m8o.x1BKs0fkWoHquG';

// Password to verify
$passwordToVerify = 'admin123';

// Verify the password
$isPasswordValid = password_verify($passwordToVerify, $hashFromDatabase);

echo 'Hash from Database: ' . $hashFromDatabase . '<br>';
echo 'Password Comparison: ' . ($isPasswordValid ? 'Match' : 'No Match') . '<br>';

?>
