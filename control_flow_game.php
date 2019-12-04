// Christie Finnie
// Due: 2019-12-03

<?php 
echo "Let's play a game!\n";
echo "Higher number wins.\n";

$end_game = false;

while ($end_game !== true) {
    $my_number = rand(0, 9);

    #echo "$my_number\n";

    echo "Pick a number between 0 and 9\n";
    $your_number = rtrim(fgets(STDIN));
    #echo "$your_number\n";


     preg_match("/\d+\.*\d*/", $your_number, $matches );
     #print_r($matches);
     if(count($matches) < 1)
     {
        echo "Invalid entry. You must enter a number. Your number must be a number between 0 and 9\n";
        continue;
    }


    if ( $your_number > 9 || $your_number < 0)
    {
        echo "Invalid number $your_number. Your number must be between 0 and 9.\n";
    }
    elseif ( $my_number === $your_number)
    {
        echo "It's a tie! Play again?\n";
    }
    elseif ( $my_number < $your_number)
    {
        echo "You cheated! Play again.\n";
    }
    elseif ($your_number < $my_number)
    {
        echo "I won! Bye now.\n";
        $end_game = true;
    }
}

?>