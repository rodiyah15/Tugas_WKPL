<?php
// Path to run ./vendor/bin/PHPUnit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework phpunit
use PHPUnit\Framework\TestCase;

// Class yang mau di Test.
require_once "WordCount.php";

// Class untuk run Testing.
Class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        // Kita pakai class yang mau kita test.
        $Wc = new Wordcount();
        // Kita masukan parameter 4 kata, yang harusnya dapat Output 4.
        $TestSentence = "My Name is Rodiyah"; // 4 Kata ..
        $WordCount = $Wc->CountWords($TestSentence);

        // Kita assert equal, ekspektasinya harus 4, jika benar berarti WordCount berfungsi dengan baik.
        $this->assertEquals(4, $WordCount);
    }
}
?>