<?php
//File : WordCount.php
class WordCount
{
     // Metode untuk menghitung jumlah kata dalam sebuah kalimat
    public function countWords($sentence)
    {
        // Menggunakan fungsi "count" untuk menghitung jumlah elemen dalam sentence
        // Ini akan memberikan jumlah kata dalam kalimat
        return count(explode(" ", $sentence));
}
}
?>