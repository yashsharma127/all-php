<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$mah_array = array_map('strlen', $my_array);

echo "The shortest array length is ".min($mah_array)."<Br>";
echo "The longest array length is ".max($mah_array);



?>