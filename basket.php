<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>index</title>

		<style>
        .container {
            display: grid;
            grid-template-columns: auto;
            gap: 0;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        .item {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: left;
        }

        .container1 {
            display: grid;
            grid-template-columns: auto;
            gap: 0;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
    	</style>


	</head>
	<body>

	<div class="container">
    	<div class="item">
            <?php include 'menu.php';?>
        </div>
        <div class="item">
        
            <a href='menu1.php'>축산
                <?php $category2 = '축산'?>
            </a>
            <a href = 'menu1.php'>수산
                <?php $category2 = '수산'?>
            </a>
            <a href = 'menu1.php'>과일
                <?php $category2 = '과일'?>
            </a>
            <a href = 'menu1.php'>채소
                <?php $category2 = '채소'?>
            </a>
            <a href = 'menu1.php'>건_견과류
                <?php $category2 = '건_견과류'?>
            </a>
            <a href = 'menu1.php'>쌀_잡곡류
                <?php $category2 = '쌀_잡곡류'?>
            </a>       
		
        </div>
	</div>


	</body>
</html>
<?php
    session_start();
    $session_id = session_id();    
    include 'libs.php';
    

?>

<li> 장바구니
    <table border=1 width=100%>
        <tr>
            <td>상품명</td>
            <td>수량</td>
            <td>금액</td>
            <td>합계</td>
            <td>기타</td>
            <?php
            $sql = "select * from shop_temp where session_id='$session_id'";
            $result = $conn->query($sql);
            $total =0;
            while($data = mysqli_fetch_array($result)) {      
            ?>
        </tr>
        <tr>
            <td> <?=$data['name']?>
            <td> ￦<?=number_format($data['price'])?>
            <td> <?=$data['count']?>
            <td> ￦<?=number_format($data['total_price'])?>
            <td> <a href=basket_del.php?no=<?=$data['no']?> onclick="return confirm('정말 삭제 할까요?');">삭제</a>
        </tr>        

            <?php 
            $total += $data['total_price'];
            }            
            ?>
        <tr>
            <td> 합계
            <td> &nbsp;
            <td> &nbsp;
            <td> ￦<?=number_format($total)?>