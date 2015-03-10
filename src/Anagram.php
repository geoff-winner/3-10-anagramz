<?php
        class Anagram
    {
        function findAnagram($input_anagram, $input_2)
        {
            $words1 = str_split($input_anagram);
            $words2 = str_split($input_2);
            $array1 = sort($words1);
            $array2 = sort($words2);

            if($input_anagram == $input_2){
                return "This is the same word";
            }

            elseif($words1 !== $words2){
                return "It is not an anagram";
            }

            elseif($words1 == $words2){
                return "Yes it is an anagram";
            };

        }

    }










            // public $anagram_bread = ["bread", "beard"];
            //
            // function findAnagram($anagram_input)
            // {
            //
            //     $anagram_array = explode(" ", $anagram_input)
            //
            //     for($i= 1; $i < count($anagram_array) -1; $i++)
            //     {
            //         if(in_array($anagram_array[$i], $this->$anagram_bread)){
            //             $anagram_array[$i] = ($anagram_array[$i]);
            //         }
            //     }
            //
            //     $anagram_input = implode(" ", $anagram_array);
            //     return $anagram_input;


    //     }
    //
    //
    // }
    //
    //
    //
    //
    //
    //



?>
