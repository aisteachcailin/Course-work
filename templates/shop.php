<div class="all">
    <div class="main">
        <div class="left_nav" style="width: 17%;">
            <div class="genre">
            <img src="images/popcorn.png" alt="">
            <h1>
                Жанры
            </h1>
            </div>
            <nav>
                <ul>
                    <?php
                    $sql_gen=$link->query("SELECT * FROM `genre`");
                    foreach ($sql_gen as $gen):
                    ?>

                    <li>
                        <a href="index.php?page=film_genre&id_genre=<?php
                    echo $gen['id_genre'];?>"> <?php
                    echo $gen['name'];?>
                         </a>
                        
                    </li>
                <?php endforeach; ?>
                 <li><a href="index.php?page=film_genre&id_gen=0">Все</a></li>

                </ul>
            </nav>
            </div>

             <div class="right_nav" style="width: 85%">

                <div class="sort">
                    <forma action="">
                    <select class="selecter" onchange="location=value">
                        <option value="" selected="selected">Сортировка по названию</option>
                        <option value="index.php?page=sort&id_sort=1">А-Я</option>
                        <option value="index.php?page=sort&id_sort=2">Я-А</option>
                    </select>

                    <select class="selecter" onchange="location=value">
                        <option value="" selected="selected">Сортировка по цене</option>
                        <option value="index.php?page=sort&id_sort=3">по возрастанию</option>
                        <option value="index.php?page=sort&id_sort=4">по убыванию</option>
                    </select>

                    </forma>

                </div>
                <?php
                foreach ($sql as $flm):

                ?>
                <div class="shopUnit">
                    <img src="<?php echo $flm['imgs'];?>" /> 

                    <div class="shopUnitName">
                        <?php echo $flm['name'];?>
                    </div>
                     <div class="shopUnitShortAge">
                        <button class="btn btn-outline-info"><?php echo "+", $flm['age'];?></button>
                    </div>

                    <div class="shopUnitShortDescr">
                        <?php echo $flm['descr'];?>
                    </div>
                     <div class="shopUnitShortDaytime">
                        <?php echo "Дата и время сеанса: ",$flm['daytime'];
                    ?>
                    </div> 
                    <div class="shopUnitPrice">
                        <img src="images/ticket.png" alt="">
                        <?php echo $flm['price'].'p';?>
                    </div>
                    <a href="index.php?page=openProduct&id=<?php echo $flm['id']; ?> " class="shopUnitMore">
                        Подробнее
                    </a>
                </div>
            <?php endforeach;?>
           </div>
            </div>
            </div>

