<?php
$str = "Hello World";

// Original String
echo "<h2 style='color:blue;'>Original String: $str</h2>";

// String Length
echo "<p style='color:green;'>Length: " . strlen($str) . "</p>";

// Reverse String
echo "<p style='color:red;'>Reverse: " . strrev($str) . "</p>";

// Substring
echo "<p style='color:purple;'>Substring: " . substr($str, 0, 5) . "</p>";
?>