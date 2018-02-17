<?php

// Create a blackjack game in terminal using php

$suits = [];
$cards = [];
$divider = "--------------------";
$gap = PHP_EOL;

// prints game messages for user
function gameMessage($message) {
	fwrite(STDOUT, $message . PHP_EOL);
}

// build a deck (array) of cards ex: "7 H"
function buildDeck($suits, $cards) {
	$deck = [];
	foreach ($cards as $card) {
		foreach($suits as $suit) {
			$deck[] = "$card" . "" . "$suit";
		}
	}
	if(shuffle($deck)) {
		return $deck;
	}
}

// return true if a card is an ace, false otherwise
function cardIsAce($card) {
	return strpos($card, "A");
}

//determine the value of an individual card (string)
function getCardValue($card) {
	if(strpos("$card", "A") !== false) {
		return 11;
	} elseif (strpos("$card", "J") !== false || strpos("$card", "Q") !== false || strpos("$card", "K") !== false) {
		return 10;
	} else {
		return intval($card);
	}
}

// get total value for a hand of cards
function getHandTotal($hand) {
	$handTotal = 0;
	foreach ($hand as $card) {
		$cardValue = getCardValue($card);
		if(count($hand) > 2 && cardIsAce($card)) {
			$cardValue = 1;
		}
		$handTotal += $cardValue;
	}
	return $handTotal;
}

// draw a card from the deck into a hand
function drawCard(&$hand, &$deck, $drawNumber) {
	$card1 = array_rand($deck);
	$hand[] = $deck[$card1];
	if($drawNumber == 2) {
		$card2 = array_rand($deck);
		$hand[] = $deck[$card2];
		unset($deck[$card2]);
	}
	unset($deck[$card1]);
}

// print out a hand of cards
function echoHand($hand, $name, $hidden = false) {
	if($hidden === true) {
		$cardString = "[$hand[0]] [???]";
	} elseif (count($hand) == 2) {
		$cardString = "[$hand[0]] [$hand[1]]";
	} else {
		$cardString = "[$hand[0]] [$hand[1]] [$hand[2]]";
	}
	return "$name: $cardString";
}

// gameplay
do {
	gameMessage("NEW GAME" . PHP_EOL . $divider);
	$deck = buildDeck($suits, $cards);
	$dealer = [];
	$player = [];

	// dealer and player each draw two cards
	drawCard($dealer, $deck, 2);
	drawCard($player, $deck, 2);

	gameMessage("Dealer and player draw 2 cards each.");

	// echo the dealer hand, only showing the first card
	gameMessage(echoHand($dealer, "Dealer", true));

	// echo the player hand
	gameMessage(echoHand($player, "Player") . " Total: " . getHandTotal($player) . $gameGap);

	// player is given choice to hit until they bust or stay
	while (getHandTotal($player) < 21) {
		gameMessage("(H)it or (S)tay?");
		$response = trim(fgets(STDIN));
		if($response = "H" || $response == "h") {
			drawCard($player, $deck, 1);
			gameMessage(echoHand($player, "Player") . " Total:" . getHandTotal($player));
		} else {
			break;
		}
	}
}

















