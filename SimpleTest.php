<?php
// Mengimpor TestCase dari PHPUnit
use PHPUnit\Framework\TestCase;

// Membutuhkan file "Wordcount" (asumsi ini adalah file Wordcount.php)
require_once "Wordcount.php";

// Membuat kelas pengujian dengan nama "SimpleTest" yang merupakan turunan dari TestCase
class SimpleTest extends TestCase {
    // Metode pengujian untuk menguji metode countWord
    public function testCountWords()
    {
        // Membuat objek dari kelas Wordcount
        $Wc = new WordCount();

        // Kalimat yang akan diuji
        $TestSentence = "My name is Joko";

        // Memanggil metode countWord dari objek Wordcount untuk menghitung kata dalam kalimat
        $WordCount = $Wc->countWords($TestSentence);

        // Memeriksa apakah jumlah kata yang dihitung sesuai dengan harapan (4 kata)
        $this->assertEquals(4, $WordCount);
    }
}
?>