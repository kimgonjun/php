<?php
    session_start();
    $session_id = session_id();
    //echo $session_id;
    

    //print_r($_POST);
    $no=$_POST['no'];
    include 'libs.php';
    $sql = "select * from shop_data where no=$no";
    $result = $conn->query($sql);
    $data = mysqli_fetch_array($result);


    $name = $_POST['name'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $regdata = time();
    //print_r($data);
    $money = $_POST['price'] * $_POST['count'];
    $parent = $data['no'];


    $sql1 = "INSERT INTO `shop_temp`(`session_id`, `name`, `parent`, `count`, `price`, `total_price`, `register_date`) 
                              VALUES ('$session_id','$name',$parent,$count,$price,$money,$regdata)";

    
    if ($conn->query($sql1) === TRUE) {
        echo "
        <li> 상품번호 : " .$data['no']. "
        <li> 수량 : " .$_POST['count']. "
        <li> 금액 : " .$_POST['price']. "
        <li> 합계 : " .$money. "
        <li> 시간 : " .$regdata. "
        ";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
?>

<script>
    location.href='basket.php';
</script>
