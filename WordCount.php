<?php
// File : WordCount.php
class Wordcount
{
    public function CountWords($sentence)
    {
        return Count(explode(" ",$sentence));
    }
}
?>