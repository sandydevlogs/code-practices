<?php 
function groupBy($files) {
    $groupedFiles = array();

    foreach ($files as $fileName => $name) {
        // Check if the name is already a key in the groupedFiles array
        if (!isset($groupedFiles[$name])) {
            // If not, create a new array with the name as the key
            $groupedFiles[$name] = array();
        }

        // Add the file to the array under the corresponding name
        $groupedFiles[$name][] = $fileName;
    }

    // Output the grouped files
    print_r($groupedFiles);
}
$files = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
groupBy($files);