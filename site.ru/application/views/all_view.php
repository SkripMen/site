<div style="width: 25%; margin: 3%;">
    <?php
    while($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        echo '<h1>' . $row['title'] . '</h1>';
        echo '<p>' . $row['short_description'] . '</p>';
        echo '<li style="list-style-type: none"><a href="view?id=' . $row['id'] . '">Читать продолжение</a></li>';
        echo '<img src="' . $row['image_url'] . '" style="max-width: 350px; margin-top: 10px;">';
        echo '<p>' . $row['date'] . '</p><hr style="margin-top: 10px;">';
    }
    ?>
</div>

