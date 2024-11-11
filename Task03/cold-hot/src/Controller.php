<?php

namespace Mario2003\ColdHot\Controller;

use Mario2003\ColdHot\View;
use Mario2003\ColdHot\Game;

function startGame() {
    View\showStartScreen();
    
    $game = new Game();

    do {
        $guess = View\getUserInput();
        $feedback = $game->checkGuess((int) $guess);
        View\showFeedback($feedback);
    } while (!$game->isCorrectGuess((int) $guess));

    View\showFeedback("Congratulations! You've guessed the number in " . $game->getAttempts() . " attempts.");
}
