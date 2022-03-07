<?php
        $play = false;
        if (!$play)
        {
            session_start();
            $_SESSION['p1']['main'] =2;

            if(!empty($_POST))
            {
                if(empty($_SESSION['game']))
                {
                    $_SESSION['game'] = [];
                }

                $_Session['game'][] = $_POST['main'];
            }

            print_r($_SESSION);

            require('functions.php');
            print_r($_GET);
            print_r($_POST);
            echo '<p>'.date('l jS \of F Y h:i:s A').'</p>';
            error_reporting(E_ERROR | E_PARSE);
            $bet1 = $_POST['p1Bet'];
            $bet2 = $_POST['p2Bet'];
            $main1 = $_POST['p1Main'];
            $main2 = $_POST['p2Main'];


            if ($_POST['p1Hit'] == 'Hit')
            {
                echo '<h3>Player 1 Hit!</h3>';
                echo "<h4>$bet1</h4>";
                echo "<h4>$main1</h4>";
            }
            elseif ($_POST['p1Stand'] == 'Stand')
            {
                echo '<h3>Player 1 Stands!</h3>';
                echo "<h4>$bet1</h4>";
            }
            elseif ($_POST['p2Hit'] == 'Hit')
            {
                echo '<h3>Player 2 Hit!</h3>';
                echo "<h4>$bet2</h4>";
            }
            elseif ($_POST['p2Stand'] == 'Stand')
            {
                echo '<h3>Player 2 Stands!</h3>';
                echo "<h4>$bet2</h4>";
                echo "<h4>$main2</h4>";
            }
            elseif ($_POST['reset'] == 'Reset')
            {
                echo '<h2>RESET</h2>';
            }
            $player1count = array();
            array_push($player1count, );
            print_r($player1count);
            print_r($_SESSION);
        }
    
?>

<html>
    <body>
        <h1>Wil Czeschin</h1>

        <?php if(!empty($_SESSION['p1']['main'])): ?>
        <table>
            <tr>
                <th>Player 1 Main Deck</th>
                <th>Player 1 Side Deck</th>
                <th>Player 2 Main Deck</th>
                <th>Player 2 Side Deck</th>
            </tr>
            <tr>
            <form action="/index.php" method="post">
                <label for="p1Main"></label>
                <td><?= drawMain($p1Main); ?></td>
            </form>
            
                <td><?= drawSide($p1s); ?></td>
                <form action="/index.php" method="post">
                <label for="p2Main"></label>
                <td><?= drawMain($p2Main); ?></td>
            </form>
                <td><?= drawSide($p2s); ?></td>
            </tr>
        </table>
        <form action="/index.php" method="post">
            <label for="p1Bet">Player 1 Bet:</label>
            <input type="text" name="p1Bet">

            <input type="submit" name='p1Hit' value="Hit">
            <input type="submit" name='p1Stand' value="Stand">
        </form>
        <form action="/index.php" method="post">
            <label for="p2Bet">Player 2 Bet:</label>
            <input type="text" name="p2Bet">

            <input type="submit" name="p2Hit" value="Hit">
            <input type="submit" name="p2Stand" value="Stand">
        </form>
        <form action="/index.php" method="post">
            <input type="submit" name="reset" value="Reset">
        </form>


        
        </form>
        <?php else: ?>
            <form action="/index.php" method="post">
            <input type="submit" name="begin" value="Begin">
        </form>
        <?php endif; ($_POST['begin'] == 'Begin') ?>
    </body>
</html>
