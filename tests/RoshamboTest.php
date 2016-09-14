<?php
    require_once "src/Roshambo.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_draw()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Rock";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("It's a DRAW!", $result);
        }

        function test_rock_vs_scissors()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Scissors";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 1 Wins the Freakin Match with a Rock Smash!!!", $result);
        }

        function test_scissors_vs_rock()
        {
            $test_Game = new Game;
            $first_input = "Scissors";
            $second_input = "Rock";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 2 Wins the Freakin Match with a Rock Smash!!!", $result);
        }

        function test_rock_vs_paper()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Paper";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 2 Wins the Freakin Match with a Paper Smother!!!", $result);
        }

        function test_paper_vs_rock()
        {
            $test_Game = new Game;
            $first_input = "Paper";
            $second_input = "Rock";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 1 Wins the Freakin Match with a Paper Smother!!!", $result);
        }

        function test_paper_vs_scissors()
        {
            $test_Game = new Game;
            $first_input = "Paper";
            $second_input = "Scissors";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 2 Wins the Freakin Match with a Scissor Slice!!!", $result);
        }

        function test_scissors_vs_paper()
        {
            $test_Game = new Game;
            $first_input = "Scissors";
            $second_input = "Paper";
            $player1Win = 0;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 1 Wins the Freakin Match with a Scissor Slice!!!", $result);
        }

        function test_game_win()
        {
            $test_Game = new Game;
            $first_input = "Scissors";
            $second_input = "Paper";
            $player1Win = 1;
            $player2Win = 0;

            $result = $test_Game->playgame($first_input, $second_input, $player1Win, $player2Win);

            $this->assertEquals("Player 1 is the Super Duper Freakin winner of the WHOLE ENTIRE Game!", $result);
        }

    }
?>
