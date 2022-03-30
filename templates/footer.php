 <!--Модальное окно-->
<div class="modal fade" id="tickets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Билеты</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table>
            <tr>
                <td></td>
                <td><b>Фильм</b></td>
                <td><b>Дата и время</b></td>
                <td><b>Количество</b></td>
                <td><b>Цена</b></td>
            </tr>

<?php
        $sql_m= $link->query("SELECT * FROM `films`");
        $Sum = 0;
        $add_film =  $_SESSION['add_film'];
        if(isset($add_film)){
       foreach($add_film as $key => $value){
            $a = $key;  //id товара
            $kol =  $_SESSION['add_film'][$a];
            $flm_m = [];
            foreach ($sql_m as $film_m) {
                if($film_m['id'] == $a){
                $flm_m= $film_m;
                break;  
                }   
            }?> 

                <tr>
                    <td><img width="50px" src="images/ticket.png"/></td>
                    <td><?php echo $flm_m['name']; ?></td>
                    <td><?php echo $flm_m['daytime']; ?></td>
                    <td><input type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="<?php echo $kol; ?>" title="Qty"></td>
                    <td><?php echo $kol*$flm_m['price'].'р'; ?></td>
                    <td><b><a href="delete_ticket.php">очистить корзину</a></b></td>
                </tr>
           
        <?php
        $Sum +=$kol*$flm_m['price'];
        }   
        }        

        ?>


        <tr>
             <td align="right" colspan="5"><b> <?php echo 'Всего: '.$Sum ?></b></td>
         </tr> 
        <tr>
          <td align="left" colspan="3"><b><button type="button" class="btn btn-dark" data-bs-dismiss="modal">Продолжить просмотр</button></b></td>
          <td align="right" colspan="4"><b><a href="add_basket.php"><button type="button" class="btn btn-light" >Оплатить билеты</button></a></b></td>
        </tr>         
                  
        </table>
          </div>
        </div>
      </div>
      </div>
</div>

<footer>
    
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-6">
            <h4>Информация</h4>
            <ul class="list-unstyled">
              <li><a href="#">Главная</a></li>
              <li><a href="#">О магазине</a></li>
              <li><a href="#">Оплата и доставка</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>

           <div class="col-md-3 col-6">
            <h4>Время работы</h4>
            <ul class="list-unstyled">
              <li>г.Нижний Новгород, ул. Большая Покровская, 1</li>
              <li>пн-вс 07:00 - 00:00</li>
              <li>без перерыва</li>
            </ul>  
        </div>

         <div class="col-md-3 col-6">
            <h4>Контакты</h4>
            <ul class="list-unstyled">
            <li><a href="tel:88005353535">8-800-535-35-35</a></li>
            <li><a href="tel:88005353536">8-800-535-35-36</a></li>
            <li><a href="tel:88005353537">8-800-535-35-37</a></li>
            </ul>
      </div>
               <div class="col-md-3 col-6">
            <h4>Мы в сети</h4>
            <div class="footer-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

      </div>
      </div>
    </section>
   
  </footer>
