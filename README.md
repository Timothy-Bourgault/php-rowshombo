# Roshambo #

#### An application to play Rock, Paper, Scissors, September 14th, 2016

#### By Angie Smith and Timothy Bourgault

## Description ##

This application recreates the game Rock, Paper, Scissors. It allows two players to input their choice of either rock, paper or scissors. The program will then display which player wins or a "draw" if no one wins.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Display a draw if both players pick the same choice.
    * input: player 1 - "rock", player 2 - "rock"
    * output: It's a freakin draw!

* Display which player won the match if a player picks rock and the other player picks scissors.
    * input: player 1 - "rock", player 2 - "scissors"
    * output: player 1 won the match!

* Display which player won the match if a player picks rock and the other player picks paper.
    * input: player 1 - "paper", player 2 - "rock"
    * output: player 1 won the match!  

* Display which player won the match if a player picks paper and the other player picks scissors.
    * input: player 1 - "paper", player 2 - "scissors"
    * output: player 2 won the match!       

* Display game winner after a player has won two matches.
    * input: player 1 - "rock", player 2 - "scissors"; player 1 - "rock", player 2 - "scissors"
    * output: player 1 is the freakin winner of the whole game!

## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues to avksmit2@gmail.com or tim.bourgault@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig
* composer
* PHPUnit
* Bootstrap

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Angie Smith & Timothy Bourgault
