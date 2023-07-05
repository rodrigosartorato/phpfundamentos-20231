<?php
require_once "templates/header.php";

if (!playersRegistered()) {
    header("location: index.php");
}

// Check if the restart button was clicked
if (isset($_POST['restart'])) {
    resetBoard(); // Call the resetBoard() function
}

if ($_POST['cell']) {
    $win = play($_POST['cell']);

    if ($win) {
        header("location: result.php?player=" . getTurn());
    }
}

if (playsCount() >= 9) {
    header("location: result.php");
}
?>

<h2><?php echo currentPlayer() ?>'s turn</h2>

<form method="post" action="play.php">

    <table class="tic-tac-toe" cellpadding="0" cellspacing="0">
        <tbody>

        <?php
        $lastRow = 0;
        for ($i = 1; $i <= 9; $i++) {
            $row = ceil($i / 3);

            if ($row !== $lastRow) {
                $lastRow = $row;

                if ($i > 1) {
                    echo "</tr>";
                }

                echo "<tr class='row-{$row}'>";
            }

            $additionalClass = '';

            if ($i == 2 || $i == 8) {
                $additionalClass = 'vertical-border';
            } else if ($i == 4 || $i == 6) {
                $additionalClass = 'horizontal-border';
            } else if ($i == 5) {
                $additionalClass = 'center-border';
            }
            ?>

            <td class="cell-<?= $i ?> <?= $additionalClass ?>">
                <?php if (getCell($i) === 'x'): ?>
                    X
                <?php elseif (getCell($i) === 'o'): ?>
                    O
                <?php else: ?>
                    <input type="radio" name="cell" value="<?= $i ?>" onclick="enableButton()"/>
                <?php endif; ?>
            </td>

        <?php } ?>

        </tr>
        </tbody>
    </table>

    <button type="submit" disabled id="play-btn">Play</button>

</form>

<form method="post" action="play.php">
    <button type="submit" name="restart">Restart</button>
</form>

<h3>Play History</h3>

<table>
    <thead>
        <tr>
            <th>Player</th>
            <th>Cell</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (getPlayHistory() as $play): ?>
            <tr>
                <td><?php echo $play['player']; ?></td>
                <td><?php echo $play['cell']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
    function enableButton() {
        document.getElementById('play-btn').disabled = false;
    }
</script>

<?php
require_once "templates/footer.php";
?>
