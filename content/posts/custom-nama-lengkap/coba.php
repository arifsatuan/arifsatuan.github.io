<?php
$name = 'Muhammad Raden Arjuna Mencari Cinta Petang Malam Kerajaan'; 
$words = explode(' ', $name);
$reducedName = '';
$maxstring = 22; 
$variations  = array("Muhammad", "Moechammad", "Muhamad", "Moh.", "Moech.", "Muhammad", "Mochamad","Mochammad");

if (strlen($name) <= $maxstring) {
    $reducedName = $name;
} else { 

    if (in_array(strtolower($words[0]), array_map('strtolower', $variations), true)) 
    {$reducedName = "M.";}
    else{
        $reducedName = $words[0];
    }
    $i = 1;
    while ($i < count($words) && strlen($reducedName . ' ' . $words[$i]) <= $maxstring) {
        $reducedName .= ' ' . $words[$i];
        $i++;
    }
    if ($i < count($words)) {
        // mengitung nama + inisial setiap kata
        $reducedName .= ' ' . substr($words[$i], 0, 1) . '.';
        $i++;
        // Memastikan setiap kata tertulis
        while ($i < count($words)) {
            // Setiap kata diganti dengan .
            $reducedName .= ' ' . substr($words[$i], 0, 1) . '.';
            $i++;
        }
    }
}

echo $reducedName . '\n';
echo 'panjangnya: '. strlen($reducedName);
?>
