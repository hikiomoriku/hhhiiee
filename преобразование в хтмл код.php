<?php
$input = '<script>alert("i have some tomatoes, ' .
'therefore i  crack websites.");</script>';

echo htmlspecialchars($input) . '<br />';
echo htmlentities($input);
?>