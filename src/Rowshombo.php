<?php
    class Game
    {
        function playGame($input1, $input2)
        {
            if ($input1 == $input2)
            {
                return "It's a DRAW!";
            } elseif ($input1 == "Rock" && $input2 == "Scissors") {
                return "Player 1 Wins the Freakin Match with a Rock Smash!!!";
            } elseif ($input1 == "Scissors" && $input2 == "Rock") {
                return "Player 2 Wins the Freakin Match with a Rock Smash!!!";
            } elseif ($input1 == "Rock" && $input2 == "Paper") {
                return "Player 2 Wins the Freakin Match with a Paper Smother!!!";
            } elseif ($input1 == "Paper" && $input2 == "Rock") {
                return "Player 1 Wins the Freakin Match with a Paper Smother!!!";
            } elseif ($input1 == "Paper" && $input2 == "Scissors") {
                return "Player 2 Wins the Freakin Match with a Scissor Slice!!!";
            } elseif ($input1 == "Scissors" && $input2 == "Paper") {
                return "Player 1 Wins the Freakin Match with a Scissor Slice!!!";
            }
        }
    }
?>


[[rock, scissors], [scissors, paper], [paper, rock]]
