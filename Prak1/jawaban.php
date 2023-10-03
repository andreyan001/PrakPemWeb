<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $soal1 = $_POST["soal1"];
    $soal2 = isset($_POST["soal2"]) ? implode(", ", $_POST["soal2"]) : "";
    $saran = $_POST["saran"];

    // Menyimpan data ke dalam file teks
    $file = "data.txt";
    
    // Buka file untuk ditulis
    $fileHandle = fopen($file, "a");

    // Menulis data ke dalam file
    fwrite($fileHandle, "Apakah tugas praktikum saya sudah baik? Jawab: $soal1\n");
    fwrite($fileHandle, "Apakah saya bisa mendapat nilai yang baik? Jawab: $soal2\n");
    fwrite($fileHandle, "Saran dan Masukan: $saran\n");
    fwrite($fileHandle, "------------------------------------------------------------\n");

    fclose($fileHandle);

    echo "Data dan masukan Anda telah berhasil disimpan.";
}
?>
