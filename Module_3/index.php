<?php
    require('functions.php');
?>

<html>
    <body>
        <h1>Wil Czeschin</h1>
        <table>
            <tr>
                <th>Player 1 Main Deck</th>
                <th>Player 1 Side Deck</th>
                <th>Player 2 Main Deck</th>
                <th>Player 2 Side Deck</th>
            </tr>
            <tr>
                <td><?= drawMain(); ?></td>
                <td><?= drawSide(); ?></td>
                <td><?= drawMain(); ?></td>
                <td><?= drawSide(); ?></td>
            </tr>
        </table>
    </body>
</html>

