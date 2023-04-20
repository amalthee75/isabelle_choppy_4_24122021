<?php
if (isset($_SESSION['success'])) {
    // var_dump($_SESSION['success']);
?>
    <!-- HTML -->
    <p class="success"><?= $_SESSION['success'];  ?></p>

<?php
    unset($_SESSION['success']);
}
?>
<?php
if (isset($_SESSION['error'])) {
    // var_dump($_SESSION['error']);
?>
    <!-- HTML -->
    <p class="error"><?= $_SESSION['error']; ?></p>
<?php
    unset($_SESSION['error']);
}
?>