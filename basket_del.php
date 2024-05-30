<?php
    session_start();
    $session_id = session_id();


    print_r($_GET);
    $no = $_GET['no'];
    include 'libs.php';
    $sql = "delete from shop_temp where no='$no' and session_id='$session_id'";
    $result = $conn->query($sql);

    $sql = "SELECT * FROM shop_data";
    $result = $conn->query($sql);
?>

<script>
    location.href = 'basket.php';
</script>