<?php
include 'iter.php';//file for showing the number of iteration 
$p1score = 0;//to store player1 score
$p2score = 0;//to store player2 score
$p3score = 0;//to store player3 score
$p4score = 0;//to store player4 score

/*
Logic- I have used rand() function to create choices for every players and depending upon numbers they have allocated their option.
To evaluate I have calculated the length of choices of each players e.g. length of Rock is 4,length of Paper is 5,length of Scissor is 7.
Paper beats Rock,Scissor beats Paper and Rock beats Scissor on this basis i have used length as parameter and applied if..elseif..else ladder to evaluate.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<?php
    for ($i=1; $i <= 50 ; $i++){
        iteration($i);
        $randnum1=rand(1,3);//to create choice for player1  
        $randnum2=rand(1,3);//to create choice for player2 
        $randnum3=rand(1,3);//to create choice for player3 
        $randnum4=rand(1,3);//to create choice for player4 
    ?>
    <!-- table for choices for players of each iteration -->
    <table>
        <tr>
            <th>Player1</th>
            <th>Player2</th>
            <th>Player3</th>
            <th>Player4</th>
        </tr>
        <tr>
            <td>
            <?php
            // condition to display choices
                if($randnum1 == 1){
                    echo "Rock";
                    $player1="Rock";
                    $lp1=strlen($player1);//length of player1 choice
                }elseif($randnum1 == 2){
                    echo "Scissor";
                    $player1="Scissor";
                    $lp1=strlen($player1);//length of player1 choice
                }else{
                    echo "Paper";
                    $player1="Paper";
                    $lp1=strlen($player1);//length of player1 choice
                }
            ?>
            </td>
            <td>
            <?php
            // condition to display choices
                if($randnum2 == 1){
                    echo "Rock";
                    $player2="Rock";
                    $lp2=strlen($player2);//length of player2 choice
                }elseif($randnum2 == 2){
                    echo "Scissor";
                    $player2="Scissor";
                    $lp2=strlen($player2);//length of player2 choice
                }else{
                    echo "Paper";
                    $player2="Paper";
                    $lp2=strlen($player2);//length of player2 choice
                }
            ?>
            </td>
            <td>
            <?php
            // condition to display choices
                if($randnum3 == 1){
                    echo "Rock";
                    $player3="Rock";
                    $lp3=strlen($player3);//length of player3 choice
                }elseif($randnum3 == 2){
                    echo "Scissor";
                    $player3="Scissor";
                    $lp3=strlen($player3);//length of player3 choice
                }else{
                    echo "Paper";
                    $player3="Paper";
                    $lp3=strlen($player3);//length of player3 choice
                }
            ?>
            </td>
            <td>
            <?php
            // condition to display choices
                if($randnum4 == 1){
                    echo "Rock";
                    $player4="Rock";
                    $lp4=strlen($player4);//length of player4 choice
                }elseif($randnum4 == 2){
                    echo "Scissor";
                    $player4="Scissor";
                    $lp4=strlen($player4);//length of player4 choice
                }else{
                    echo "Paper";
                    $player4="Paper";
                    $lp4=strlen($player4);//length of player4 choice
                }
            ?>
            </td>
        </tr>
    </table>
    <br><br><br>
    <!-- table for result of each iteration -->
    <table>
        <tr>
            <th>Total</th>
            <th></th>
            <th colspan="4">Against</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Player1</td>
            <td>Player2</td>
            <td>Player3</td>
            <td>Player4</td>
        </tr>
        <tr>
            <td rowspan="4">Player Wins</td>
            <td>Player1</td>
            <td>
            <?php
            //condition for evaluate for each iteration
                echo 0;
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp1>$lp2){
                    if(($lp1 == 7 && $lp2 ==4)){
                        echo 0;
                    }else{
                        echo 1;
                        $p1score++;
                    }
                }elseif ($lp1 == 4 && $lp2 ==7) {
                    echo 1;
                    $p1score++;
                }else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp1>$lp3){
                    if($lp1 == 7 && $lp3 ==4){
                        echo 0;
                    }
                    else{
                        echo 1;
                        $p1score++;
                    }
                }elseif ($lp1 == 4 && $lp3 ==7) {
                    echo 1;
                    $p1score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp1>$lp4){
                    if($lp1 == 7 && $lp4 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p1score++;
                    }
                }elseif ($lp1 == 4 && $lp4 ==7) {
                    echo 1;
                    $p1score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
        </tr>
        <tr>
            <td>Player2</td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp2>$lp1){
                    if($lp2 == 7 && $lp1 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p2score++;
                    }
                }elseif ($lp2 == 4 && $lp1 ==7) {
                    echo 1;
                    $p2score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                echo 0;
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp2>$lp3){
                    if($lp2 == 7 && $lp3 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p2score++;
                    }
                }elseif ($lp2 == 4 && $lp3 ==7) {
                    echo 1;
                    $p2score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp2>$lp4){
                    if($lp2 == 7 && $lp4 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p2score++;
                    }
                }elseif ($lp2 == 4 && $lp4 ==7) {
                    echo 1;
                    $p2score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
        </tr>
        <tr>
            <td>Player3</td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp3>$lp1){
                    if($lp3 == 7 && $lp1 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p3score++;
                    }
                }elseif ($lp3 == 4 && $lp1 ==7) {
                    echo 1;
                    $p3score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp3>$lp2){
                    if($lp3 == 7 && $lp2 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p3score++;
                    }
                }elseif ($lp3 == 4 && $lp2 ==7) {
                    echo 1;
                    $p3score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                echo 0;
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp3>$lp4){
                    if($lp3 == 7 && $lp4 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p3score++;
                    }
                }elseif ($lp3 == 4 && $lp4 ==7) {
                    echo 1;
                    $p3score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
        </tr>
        <tr>
            <td>Player4</td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp4>$lp1){
                    if($lp4 == 7 && $lp1 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p4score++;
                    }
                }elseif ($lp4 == 4 && $lp1 ==7) {
                    echo 1;
                    $p4score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp4>$lp2){
                    if($lp4 == 7 && $lp2 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p4score++;
                    }
                }elseif ($lp4 == 4 && $lp2 ==7) {
                    echo 1;
                    $p4score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                if($lp4>$lp3){
                    if($lp4 == 7 && $lp3 == 4){
                        echo 0;
                    }else{
                        echo 1;
                        $p4score++;
                    }
                }elseif ($lp4 == 4 && $lp3 ==7) {
                    echo 1;
                    $p4score++;
                }
                else{
                    echo 0;
                }
            ?>
            </td>
            <td>
            <?php
            //condition for evaluate for each iteration
                echo 0;
            ?>
            </td>
        </tr>
    </table>
    <br><br>
<?php
    }
?>
<h3>Final Score</h3>
<!-- table to display final score -->
<table>
    <tr>
        <th>Player1</th>
        <th>Player2</th>
        <th>Payer3</th>
        <th>Player4</th>
    </tr>
    <tr>
        <td><?php echo $p1score; ?></td>
        <td><?php echo $p2score; ?></td>
        <td><?php echo $p3score; ?></td>
        <td><?php echo $p4score; ?></td>
    </tr>
</table>
</body>
</html>