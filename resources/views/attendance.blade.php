<div class="inner">
    <?php
        $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 1";
        $query = $conn->query($sql);

        echo "<h3>".$query->num_rows."</h3>";
    ?>
</div>