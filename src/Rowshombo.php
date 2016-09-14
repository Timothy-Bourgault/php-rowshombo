<?php
    class Game
    {
        function playGame($input1, $input2)
        {
            if ($input1 == $input2)
            {
                return "It's a DRAW!";
            } elseif ($input1 == "Rock" && $input2 == "Scissors") {
                return "Player 1 Wins the freakin Match with a rock smash!!!";
            } 
        }
    }
?>
