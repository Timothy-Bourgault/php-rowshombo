<?php
    class Game
    {
        function playGame($input1, $input2, $player1Win, $player2Win)
        {
            $message = "";

            if ($input1 == $input2)
            {
                return "It's a DRAW!";
            } elseif ($input1 == "Rock" && $input2 == "Scissors" ||
                    $input1 == "Paper" && $input2 == "Rock" ||
                    $input1 == "Scissors" && $input2 == "Paper") {
                $player1Win++;
                $message = "Player 1 Wins the Freakin Match!!!";
            } elseif ($input2 == "Rock" && $input1 == "Scissors" ||
                    $input2 == "Paper" && $input1 == "Rock" ||
                    $input2 == "Scissors" && $input1 == "Paper"){
                $player2Win++;
                $message = "Player 2 Wins the Freakin Match!!!";
            }

            if ($player1Win == 2)
            {
                $message = "Player 1 is the Super Duper Freakin winner of the WHOLE ENTIRE Game!";
            } elseif ($player2Win == 2) {
                $message = "Player 2 is the Super Duper Freakin winner of the WHOLE ENTIRE Game!";
            }

            return $message;
        }

        function save()
        {
            array_push($_SESSION['games_won'], $this);
        }
    }
?>


[[rock, scissors], [scissors, paper], [paper, rock]]
