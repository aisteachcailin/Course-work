<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фильм</title>
</head>
<body> 
    <div class="all">
    <div class="main">
<div id="openedProduct-img">
    <img src="<?php echo $flm['imgs'];?>" />
</div>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?php echo $flm['name'];?>
    </h1>
    <div id="openedProduct-age">
        <button class="btn btn-outline-info"><?php echo "+", $flm['age'];?></button>
    </div>

    <div id="openedProduct-descr">
        <?php echo $flm['descr'];?>
    </div>
        <div id="openedProduct-daytime">
        <?php echo "Дата и время сеанса: ",$flm['daytime'];?>
    </div>
   <table>
    <!-- счетчик количество товаров -->
    <form id="form1" name="form1" action="add_cart.php" method="post">
        
        <tr>
            <td>
        <div class="input-group quantity_flms">
            <input type="button" value="-" id="button_minus">
            <input type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="1" title="Qty" >
            <input type="button" value="+" id="button_plus">
        </div>
        <!-- начало невидимой части формы -->
        <input type="hidden"  name="film_id" value="<?php echo $flm['id']?>" />
        <!-- конец невидимой части формы -->
            </td>
            <td>
            <div id="openedProduct-price">
            <img src="images/ticket.png" alt=""><?php echo $flm['price'].'p';?>
            </div>
            </td>
        </tr>
    <tr><td><input class='add_to_cart' type="submit" value="В корзину" name="submit"></td></tr>
    </form>
    </table>    
    </div>
</div>
<script>
    var numCount = document.getElementById('num_count');
    var plusBtn = document.getElementById('button_plus');
    var minusBtn = document.getElementById('button_minus');
    plusBtn.onclick = function() {
        var qty = parseInt(numCount.value);
        qty = qty + 1;
        numCount.value = qty;
    }
    minusBtn.onclick = function() {
        var qty = parseInt(numCount.value);
        if(qty>1){
            qty = qty - 1;
        }
        numCount.value = qty;
    }
</script>
</body>
</html>
