<div style="width: 25%; margin: 3%;">
<?php
while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
    echo '<h1>' . $row['title'] . '</h1>';
    echo '<p>' . $row['full_description'] . '</p>';
    echo '<img src="' . $row['image_url'] . '" style="max-width: 350px;">';
    echo '<p>' . $row['date'] . '</p>';
}
?>
</div>
