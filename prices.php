<?php
$mysqli = new mysqli("localhost", "cw58872_mysql", "qweasd123", "cw58872_mysql");

if ($mysqli == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    $result = $mysqli->query('SELECT * FROM promo_prices');

    while ($row = $result->fetch_array()) {
        if ($row['oldprice']) {
            $diff = $row['oldprice'] - $row['price'];
            $row['percent'] = round($diff/($row['oldprice']/100));
        }
        $PRICES[] = $row;
    }
}

if (is_countable($PRICES) && count($PRICES) > 0) {
    ksort($PRICES);
    foreach ($PRICES as $price) {
        ?>
        <div class="main__product-item">
            <div class="course__title"><?=$price['title']?></div>
            <div class="course__price"><?=$price['price']?> ₽</div>
            <?if (!empty($price['oldprice'])) {
                ?>
                <div class="course__old-price"><?=$price['oldprice']?> ₽</div>
                <div class="course__discount">
                    -<?=$price['percent']?>%
                </div>
                <?
            }?>
            <div class="course__info-list">
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text text-bold">
                        <?=$price['months']?> месяца обучения
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Грамматическая выжимка
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Разговорный тренажёр
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Слова с ассоциациями
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Регулярные мини-задания
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Персональный куратор
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Сертификат об обучении
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text">
                        Best Teachers
                    </div>
                </div>
                <div class="course__item-info">
                    <svg class="course__item-info-img" width="10" height="10" viewBox="0 0 10 10" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <div class="course__item-info-text text-bold">
                        Звонки от Second Teacher
                    </div>
                </div>
            </div>
            <?if ($price['prepay']) {
                ?>
                <div class="course__prepayment">
                    Предоплата
                </div>
                <div class="course__prepayment-price">
                    <?=$price['prepay']?> ₽
                </div>
                <?
            }?>
            <?if (!empty($price['link_ru'])) {
                ?>
                <div class="course__btn">
                    <a href="<?=$price['link_ru']?>" class="course__btn-link">
                        <div class="course__btn-text">
                            внести предоплату <br> из рф
                        </div>
                    </a>
                </div>
                <?
            }?>
            <?if (!empty($price['link_en'])) {
                ?>
                <div class="course__btn">
                    <a href="<?=$price['link_en']?>" class="course__btn-link">
                        <div class="course__btn-text">
                            внести предоплату <br> из-за границы
                        </div>
                    </a>
                </div>
                <?
            } ?>
        </div>
        <?
    }
}
