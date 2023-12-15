<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transcription = $_POST['transcription'] ?? '';

    // Save the transcription to a text file
    $filename = "transcriptions.txt";
    $file = fopen($filename, "a") or die("Unable to open file!");
    fwrite($file, $transcription . PHP_EOL);
    fclose($file);

    echo "Transcription saved successfully.";
} else {
    echo "Invalid request method.";
}
?>