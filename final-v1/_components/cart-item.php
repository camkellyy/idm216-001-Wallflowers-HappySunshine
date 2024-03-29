<?php 

include '_components/prices.php';
$id = $row['catID'];
$site_url = site_url();

?>
<li class="cart-item">
    <div class="cart-content">
        <div class="cart-image">
            <img src="<?php echo site_url(); ?><?php echo $row['img']?>" alt="" class="cart-item-image">
        </div>
        <div class="cart-item-text-content">
            <div class="cart-item-name-and-price">
                <h3 class="cart-item-name"><?php echo $row['cat']; ?></h3>
                <h3 class="cart-item-price">
                
                <?php 
                    if ($id ==1 ) {
                        $price = ($row['price']) + $row['proteinPrice'];
                        $finalPrice = number_format("{$price}", 2);
                        echo "$" . $finalPrice;
                    }
                    elseif ($id == 10) {
                        $sideNamesArray = explode(', ', $row['sideNames']);
                        $sideNamesCount = count($sideNamesArray);
                        $price = ($row['price']) * $sideNamesCount;
                        $finalPrice = number_format("{$price}", 2);
                        echo "$" . $finalPrice;
                    }
                    elseif ($id == 11) {
                        $totalDrinkPrice = 0;
                        $drinkPrices = explode(',', $row['drinkPrices']);
                        foreach ($drinkPrices as $drinkPrice) {
                            $totalDrinkPrice += (float) $drinkPrice;
                        }
                        $finalPrice = number_format("{$totalDrinkPrice}", 2);
                        echo "$" . $finalPrice;
                    }
                    else {
                        $price = ($row['price']);
                        $finalPrice = number_format("{$price}", 2);
                        echo "$" . $finalPrice;
                    }
                ?>

                </h3>
            </div>
            <p class="cart-item-description">
            
            <?php 
            
             if ($id == 1) {
                if (!$row['toppingNames']) {
                    echo $row['breadName'] . ", " . $row['proteinName'] . " (+$" . number_format("{$row['proteinPrice']}", 2) . ')';
                 }
                 else {
                    echo $row['breadName'] . ", " . $row['proteinName'] . " (+$" . number_format("{$row['proteinPrice']}", 2) . ')' . ", " . $row['toppingNames'];
                 }
             }
             elseif ($id == 10) {
                echo $row['sideNames'];
             }
             elseif ($id == 11) {
                $drinkPrices = explode(',', $row['drinkPrices']);
                $drinkNames = explode(',', $row['drinkNames']);
                $drinkString = '';
                foreach ($drinkPrices as $index => $drinkPrice) {
                    $drinkString .= $drinkNames[$index] . ' ($' . $drinkPrice . '), ';
                }
                // Remove the trailing comma and space from the string
                $drinkString = rtrim($drinkString, ', ');
                echo $drinkString . '<br>';

                // echo $row['drinkNames'] . " (+$" . number_format("{$row['drinkPrices']}", 2) . ')';
             }
             else {
                 if (!$row['toppingNames']) {
                    echo $row['proteinName'];
                 }
                 else {
                    echo $row['proteinName'] . ", " . $row['toppingNames'];
                 }
             }
            ?>
            
            </p>
            <div class="cart-item-actions">
                <div class="item-quantity">
                <p class="quantity">
                        <?php 
                            if ($id == 10) {
                                $sideNamesArray = explode(', ', $row['sideNames']);
                                $sideNamesCount = count($sideNamesArray);
                                $sideQuantity = $quantity * $sideNamesCount;
                                echo $sideQuantity;
                            }
                            elseif ($id == 11) {
                                $drinkNamesArray = explode(', ', $row['drinkNames']);
                                $drinkNamesCount = count($drinkNamesArray);
                                $drinkQuantity = $quantity * $drinkNamesCount;
                                echo $drinkQuantity;
                            }
                            else {
                                echo $quantity;
                            }
                        ?>
                    </p>
                </div>
            </div>
            <form action='<?php echo "{$site_url}/_includes/delete-item.php" ?>' method='POST'>
                <input type='hidden' name='orderID' value='<?php echo "{$row['id']}"; ?>'/>
                <button  class='delete-button'type='submit'>
                <p class='text-decoration-underline'>Delete</p>
                </button>
            </form>
        </div>
    </div>
</li>