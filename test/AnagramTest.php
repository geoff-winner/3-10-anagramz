<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
        {
            function test_findAnagram()

        {
                //Arrange
                $test_Anagram = new Anagram;
                $input_anagram ["time", "chocolate", "tomato"];
                $input_2 = ["time", "chocolat", "tomato"];

                //Act
                $result = $test_Anagram->findAnagram ($input_anagram[0], $input_2[0]);

                //Assert
                $this->assertEquals("It is not an anagram", $result);

        }




        }





?>
