<?php
    require_once "src/Rowshombo.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_draw()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Rock";

            $result = $test_Game->playgame($first_input, $second_input);

            $this->assertEquals("It's a DRAW!", $result);
        }

        function test_rock_vs_scissors()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Scissors";

            $result = $test_Game->playgame($first_input, $second_input);

            $this->assertEquals("Player 1 Wins the Freakin Match with a Rock Smash!!!", $result);
        }

        function test_scissors_vs_rock()
        {
            $test_Game = new Game;
            $first_input = "Scissors";
            $second_input = "Rock";

            $result = $test_Game->playgame($first_input, $second_input);

            $this->assertEquals("Player 2 Wins the Freakin Match with a Rock Smash!!!", $result);
        }

        function test_rock_vs_paper()
        {
            $test_Game = new Game;
            $first_input = "Rock";
            $second_input = "Paper";

            $result = $test_Game->playgame($first_input, $second_input);

            $this->assertEquals("Player 2 Wins the Freakin Match with a Paper Smother!!!", $result);
        }

        function test_paper_vs_rock()
        {
            $test_Game = new Game;
            $first_input = "Paper";
            $second_input = "Rock";

            $result = $test_Game->playgame($first_input, $second_input);

            $this->assertEquals("Player 1 Wins the Freakin Match with a Paper Smother!!!", $result);
        }

    }
?>
