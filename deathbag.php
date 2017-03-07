
$token = $_POST['token'];
if($token != 'NbCuGdont8NDrMXzcKbVbR0i'){
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}

$black_stones = 3;
$red_stones = 10;
$white_stones = 20;
for ( $i = 0; $i < 10; $i++)
    {

        $stones = ($black_stones + $red_stones + $white_stones );

        $j = rand(0,($stones - 1));



        if ($j <  $white_stones)
        {
            $white_stones--;
        }
        else if($j < ($white_stones + $red_stones))
        {
            $red_stones--;
        }
        else if($j< $white_stones + $red_stones + $black_stones)
        {
            $black_stones--;
        }

    }

   $result = "STONES PULLED: \n\tBlack: " . (3 - $black_stones) . "\n\tRed: " . (10 - $red_stones) . "\n\tWhite: " . (20 - $white_stones);
   echo $result;
