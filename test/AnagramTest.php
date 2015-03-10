<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
        {
            function test_findAnagram()

        {
                //Arrange
                $test_Anagram = new Anagram;
                $input_anagram = "a";
                $input_2 = "b";

                //Act
                $result = $test_Anagram->findAnagram ($input_anagram, $input_2);

                //Assert
                $this->assertEquals("b", $result);

        }




        }





?>
