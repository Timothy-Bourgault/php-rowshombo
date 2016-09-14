<?php
    class Game
    {
        public $player1Win;
        public $player2Win;

        // function __construct()
        // {
        //     $this->player1Win = 0;
        //     $this->player2Win = 0;
        // }

        function playGame($input1, $input2)
        {
            $message = "";

            $input1 = strtolower($input1);
            $input2 = strtolower($input2);

            if ($input1 == $input2)
            {
                return "It's a DRAW!";
            } elseif ($input1 == "rock" && $input2 == "scissors" ||
                    $input1 == "paper" && $input2 == "rock" ||
                    $input1 == "scissors" && $input2 == "paper") {
                $this->player1Win++;
                $message = "Player 1 Wins the Freakin Match!!!";
            } elseif ($input2 == "rock" && $input1 == "scissors" ||
                    $input2 == "paper" && $input1 == "rock" ||
                    $input2 == "scissors" && $input1 == "paper"){
                $this->player2Win++;
                $message = "Player 2 Wins the Freakin Match!!!";
            }

            if ($this->player1Win == 2)
            {
                $message = "Player 1 is the Super Duper Freakin winner of the WHOLE ENTIRE Game!";
            } elseif ($this->player2Win == 2) {
                $message = "Player 2 is the Super Duper Freakin winner of the WHOLE ENTIRE Game!";
            }

            return $message;
        }

        function save()
        {
            array_push($_SESSION['games_won'], $this);
        }

        static function getAll()
        {
            return $_SESSION['games_won'];
        }

        static function deleteAll()
        {
            $_SESSION['games_won'] = array();
        }
    }
?>
