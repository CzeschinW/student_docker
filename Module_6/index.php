<?php
require('connection.php');

$result = mysqli_query($con, "SELECT * FROM post");
print($result);

foreach ($result as $row) {
    echo " id = " . $row['id'] . "\n";
    echo " name = " . $row['title'] . "\n";
    echo " text = " . $row['text'] . "\n";
}

?>

<!-- <html>
    <head>
        <link rel="stylesheet" href"style.css">
    </head>
<body>
    <h2>Wil Czeschin</h2>
    <h3><?=date("F j Y");?></h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Text</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['text'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</head>