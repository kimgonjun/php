<?php
    if($_GET == null){
        $category1 = '신선식품';
        $category2 = '축산';
        $sql = "SELECT * FROM shop_data where category2='$category2'";
    }else{
        $category1 = $_GET['category1'];
        $category2 = $_GET['category2'];
        $sql = "SELECT * FROM shop_data where category2=$category2";
    }
    

    //print_r($category1);
    //print_r($category2);    
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "index: " . $row["no"]. "-- name: " . $row["name"]."<br> category1: " .$row['category1']. "<br>";
            $image_path = "/img/products/" .$row['category1']. "/";
            $image_path .= $row['category2']. "/";
            $image_path .= $row['name']. "/" .$row['name']. ".JPG";
            
            echo "<style>
        .container1 {
            display: grid;
            grid-template-columns: auto auto;
            gap: 0;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        .item {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: left;
        }
    	</style>";
            echo "<div class=\"container1\">";
                echo "<div class='item'>";
                    echo "<img src='" .$image_path. "' height=150 style='margin: 5px; auto'/>";
                    
                echo "</div>";
                echo "<div class='item'>";
                echo "<h4>" .$row['name']. "<h4>"; 
                echo "<h4>" .$row['sell_price']. "<h4>";
                echo "
                    <form action='basket_post.php' method='post'>   
                    <input type='hidden' id='name' name='name' value = " .$row['name']. ">
                    <input type='hidden' id='price' name='price' value = " .$row['sell_price']. ">
                    <input type='hidden' id='no' name='no' value = " .$row['no']. ">
                    <input type='number' id='count' name='count' value ='1' min='1'>        
                    <button>장바구니에 추가</button>
                    </form>                
                ";

                echo "</div>";
            echo "</div>";           

        }
    } else {
        echo "0 results";
    }
?>
