<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    		<style>
        .container {
            display: grid;
            grid-template-rows: auto 1fr;
            gap: 0;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0px;
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
<?php
    include 'drop_down_menu.php';
                if($_GET == null)
                {
                    $category1 = '신선식품';
                    $category2 = '축산';
                }else{
                    $category1 = $_GET['category1'];            
                    $category2 = $_GET['category2'];
                }
                print_r($category1);
                print_r($category2);
    //echo phpinfo();   
?>
      </div>
    </div>
  </body>
</html>
