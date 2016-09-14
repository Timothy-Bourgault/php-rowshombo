<?php
    require_once "src/Rowshombo.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_draw()
        {
            // Arrange
            $test_Game = new Game;
            $first_input = "rock";
            $second_input = "rock";

            // Act
            $result = $test_Game->playgame($first_input, $second_input);

            // Assert
            $this->assertEquals("It's a DRAW!", $result);
        }
    }
?>
