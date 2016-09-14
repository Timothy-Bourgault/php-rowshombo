<?php
    class Game
    {
        function playGame($input1, $input2, $player1Win, $player2Win)
        {
            // $player1Win = 0;
            // $player2Win = 0;
            $message = "";

            if ($input1 == $input2)
            {
                return "It's a DRAW!";
            } elseif ($input1 == "Rock" && $input2 == "Scissors") {
                $player1Win++;
                $message = "Player 1 Wins the Freakin Match with a Rock Smash!!!";
            } elseif ($input1 == "Scissors" && $input2 == "Rock") {
                $player2Win++;
                $message =  "Player 2 Wins the Freakin Match with a Rock Smash!!!";
            } elseif ($input1 == "Rock" && $input2 == "Paper") {
                $player2Win++;
                $message =  "Player 2 Wins the Freakin Match with a Paper Smother!!!";
            } elseif ($input1 == "Paper" && $input2 == "Rock") {
                $player1Win++;
                $message =  "Player 1 Wins the Freakin Match with a Paper Smother!!!";
            } elseif ($input1 == "Paper" && $input2 == "Scissors") {
                $player2Win++;
                $message =  "Player 2 Wins the Freakin Match with a Scissor Slice!!!";
            } elseif ($input1 == "Scissors" && $input2 == "Paper") {
                $player1Win++;
                $message =  "Player 1 Wins the Freakin Match with a Scissor Slice!!!";
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
