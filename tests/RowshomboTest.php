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

            $this->assertEquals("Player 1 Wins the freakin Match with a rock smash!!!", $result);
        }

    }
?>
