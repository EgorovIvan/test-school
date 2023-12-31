<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.cdnfonts.com/css/headline-text" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/footer.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<header>
  <img class="header__img-coffee-shop" src="img/header/coffee-shop.png" alt="coffee-shop">
  <img class="header__img-men" src="img/header/men.png" alt="men">
  <img class="header__img-coffee1" src="img/header/coffee1.png" alt="coffee1">
  <img class="header__img-coffee2" src="img/header/coffee2.png" alt="coffee1">

  <div class="header__wrapper">
    <div class="container">
      <div class="header__logo">
        <img src="img/header/logo.png" alt="logo">
        <div class="header__logo-text">English</div>
      </div>
      <div class="header__text">Вкладывайте незначительные <br> деньги каждый день в копилку <br> своих знаний.
      </div>
      <div class="header__text-info">Следующий курс для вас будет стоить всего
        <span class="header__text-info-bold"> 178 рублей в день</span>
      </div>

      <div class="header__promotion">
        <div class="header__promotion-btn">
          <a href="#" class="promotion-btn__link">
            <div class="promotion-btn__link-title">01</div>
            <div>
              <div class="promotion-btn__link-text">Ноября</div>
              <div class="promotion-btn__link-text-addition">Ближайший старт</div>
            </div>
          </a>
        </div>
        <div class="header__promotion-btn">
          <a href="#" class="promotion-btn__link">
            <div class="promotion-btn__link-title">21</div>
            <div>
              <div class="promotion-btn__link-text">Октября</div>
              <div class="promotion-btn__link-text-addition">Конец акции</div>
            </div>
          </a>
        </div>
      </div>

      <div class="header__info">
        <div class="header__info-btn btn-details">
          <a href="#detail" class="info-btn__link">
            <div class="info-btn__link-text btn-details__text">Узнать подробнее</div>
          </a>
        </div>
        <div class="header__info-btn btn-consultation">
          <a href="#consult" class="info-btn__link">
            <div class="info-btn__link-text btn-consultation__text">Бесплатная консультация</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<main>
  <div class="container">
    <div class="main__title">
      Выберите свой вариант обучения
    </div>
    <div class="main__product-list" id="detail">
      <?
      require 'prices.php';
      ?>
    </div>
    <div class="main__present">
      <img class="main__present-img" src="img/main/present.png" alt="present">
    </div>
  </div>
</main>
<footer>
  <form class="footer__form" id="consult">
    <div class="footer__form-title">Еще думаете?</div>
    <div class="footer__form-text">
      Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение
    </div>
    <input class="footer__form-name" type="text" name="FIO" placeholder="Введите ваше имя" required>
    <input class="footer__form-phone" type="phone" name="PHONE" placeholder="Введите ваш телефон" required>
    <input class="footer__form-email" type="email" name="EMAIL" placeholder="Введите ваш email" required>
    <input class="footer__form-btn" type="submit" value="записаться"/>
    <div class="footer__form-addition">Нажимая на кнопку, вы даете согласие на обработку персональных
      данных и соглашаетесь с политикой конфиденциальности
    </div>
  </form>
  <div class="footer__company-info">
    <div class="footer__logo">
      <svg class="footer__logo-text-img" width="96" height="96" viewBox="0 0 96 96" fill="none"
           xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="96" height="96" fill="url(#pattern0)"/>
        <defs>
          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_204_111" transform="scale(0.0104167)"/>
          </pattern>
          <image id="image0_204_111" width="96" height="96"
                 xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAOx0lEQVR4nO1dC1SUVR4ftlPbPjunhO/eAdEQSsF8YSoF9w7yDFERBV+IWoAumpirIj4ABRVSmKGHpbnHUsvKdGuttKzMzQczlWnZy922be1l2cPdlBlL757/h8MZvvneMzAfOv9z/ufMGe53uff/++7/de//jskUpCAFKUhBClKQghSkIAUpSF2AwsISo8IwKUOINgHDZ/gu0OO67Aljmogw2YUwvYgwZULmEDnAmclIk8kUEuixXjYUHZ35a4RIIcLkPTGhizKiJ2BVYBz/20CPvwtT3lUcpos4TL9RLXhvPsVhWs1xCWGBnk2XIw6TdT4IXqiaWhCiGzkuOS7Q8+oSdMMNt/0BYXreXwB48EUOkT0YJ6UH7YQMdeuWhBXfalBNiK4E1qemyHucmdwJNsZ0pRHoZNDvCNOnOEyXm80pN3i1weRNCcG/jzEt7tGDXutuGxEx7DfwHYfpBzqA+BohUolQYqjpcieEEmMRIo/wOlngtVx//ZA/erYNDU3uhRA56lYdCNGXEaKZCqojBCFyB0Jkrx47wSGyAcZouswoJAyTNA6T3VL+O2p9s2eLPWw2J3UXWyFKFBae2A9hsolDxKnZTmD6YpiZppq6MoFu5cx0OsL0XVUTR7SuA9VdNYfIt9pXBf0Y4glQcaauQqBLEaLLECZfaZowIlnS/VnGAkAcJts5RN6BvjlEv0eYXkCY/Nz6mXyKMLVzmGxBiC4FVRQaSn8vEtAd1xtPYEy7mYxKCJE+HKbrOUTPaV/ypNGzr7Cw4RzH0QUI0WNyakuJcbjlQu+BE04mZNzTGB2d6bYxIaBe5FIaMnbCyWGy2VDxRJjZksJh+oL2yVAXh+mjoKs933YAsSNigO490y8MSZ/9Os1cGOH+f6Hhyf1bXxqBU6DipQFDH8C8U95VCCVN9fBStLxFpzlMa8HXN3kQQiSXQ+QHVSsGkQ85TJ6BTCj0dWN09n1DM8oOJGTNa4mOGyP7fI9emRdH/en+3fe/fdbcLu6AeAKR05rBBRkgUggy6RTRm810gJSPriD4jxCiM8USZKhVN/+isGKOYExKQD25n7MddsbYHK4mq9151uZwMTdXbDvOMqbUMXN4smR/aQWrfll76OyWRrurTZ3A2GCMYHw1zw+TN2FFdajwQfepfEs9BX8AIZon9YYglNwDYfKTTB9nwjCZ5LnUbW+dT7Q6XLusdudFT8ELefH2D1nvgRMkxzZ+4WOtbe3OA40O50jGWIhvdsLyM2e+HdSS/wkiTw7Rz9Trd7IZVotSvxymy2XAcyJEB0O7quPsGmuzq9DqcB6TE7qQF245Jq2OokewNX8/09YW+m5ynC9pOMTa3E6zmQzkDS+iLnUgkJ+jolKv8zsAsDRV/PMfQS9D8KS+X7JNRr8+UfcWu87mcJbZHK7PtQi+TajNLSw6LldyzPMffVvsuVNWu6t67Vusze0MDaWIQ3Qrh4iig8AhavM7ABym+6UFRU8gREo5Lu132vslK6T6jU+Z/ZFQv+vh8sffZQOSir367zdsOqt77Vtp8OxO5+pXTj/R//ai5WD4Najeo34HQCqwgmjXZDL9SjSljEgWx1GLyRR/tSQAHO3JIXpWrO+IyDS2YMs7Pgnfk6t3fcbuXvcGm3X/Plbx5PsgYMm2NS9+znJKH2Q9Y0ZqMsaXVOcX/pZ/iMQ/uyguVMtQzxQxh8jnYZgslso4hvdML0Fmy0UpEMbN2yj7pvqT528+wpLzKpk5YrhmwXvwhUACECLlxrUGPGQTxkmDoGHdJf1udbhOzmh8iUVGZUpOKqJHOhueX8Wm1exkZRsOsYqnP2Q1e77kdbyvQm84dJbNtO5lg5NLfRG64ovZKQCAn65mkH3iJ31RvGaPEybvFkTtni95IWOzRfVkwyNT2eCU2bwAtQq+ft/3bPKyJ1nMLeM0C7lHdBbLLm40HgCxsbHXgO+udiLRcbksf8GjbNXeU22CqXru3yxn1jrWq89oTUIpqn9BleCrnv2EZRdbWfeeGZoF3yd+Mg/amjfO8DbEcAAAIUTv0TqxiMg0llawko9i3YJqPPQTm/PwQR4MUA/m7qmSz3e/MYPN+8ubsu7o3EeaWeKohZpWGDAOT2bDMuey2Q/ub2e4JQEwWxjEE5v2sWsDAgAQx1lGRPXOeV8rEAhTNjhlFpvR+DJrPHzOS4g1u7/gfffSplfZXat3sekrn+UFU7/vO1HB37v/R95u9B1SqHkcYJMyp93Llu38h5SbKg6Y2dL6d4frpLXZmRMQAKz2lgyb3Xlh8VMf8JPQs9yjY3N4D8hTPallMNDwrB43sveA8WzCos2KnpcSAK0gOH9pam5J73QAbA7nofYG7zted97cP0+zQMIjU5ll3DK2YMtRRcEv2nacpU6q0eVGDkgsYkX1z3utPM0AhCe3b2t3HggEAOekdDGoDNCpSId6cgvJ03sCWwFeULxlpub+wK6oBVeMxdIc4FW1b+c8FwAAlAe/2Ef1NLr0ATZ27gYW03es5uejeo/mjTvYFD2Cd3PB0ie9+i6ofMqrnSEBsF1i0PHgiuoRpFbud9udvPFuOPiTT4L3ZFiRQzPKeJZyhQ0NgM2tSg6f470f8IL8KXTQyUk5FbJuKjCoIVgV8cNLWeygSWwgncGyZ9j4uMRXkAwBAAi4bMNhfqNEacAV247zcQHEB3oF36NXFi/A6r9JC7Bu32leZfQdKu2mgoqEBF6XByC9YFXbs8l5VWztwf8pDtztPd3UT7331GfQBP6Z+te/l37bHzvCUifV8jkmNX1CoOfLSgg4ADB44R5t6qQa1RMAr0dJPYEOnvXA65IJOtj9Unrb5Xhkia3rAjCiqEF0UhUeqQc1LBf+yz0H0bOvRj7u1gLRviuf+xcbv2ATz/DZcABARAlL2B9vlVVF9Om9+j7ls5e+CN+thoR9z91ob2en4DN8ZygA8udvkpxUTN+xsjtT/gAgZfxyVQIeSEp4tQgxgpRRF/bdP2G6Vzv4zjAAgL+tdFiqfOuxDgVASqDAPaOz+VW49JkTbe1hG1Ss7S3Dpnr1LXb2CL4zDACQrVR683JmreswAGRy9nzQJOaJgecl1j5jar1XW6m+DQEATF5NGrjPoImdDoDciim97zXRZ8rWH+paAMAJBDW6F2GqKjjrDABWv/otv+slbA+RcaOIe2toAIamz1ENwLh5GwMOwD0b7ZIrluQu6VoAgH8vNTgxw3VLwrSAAACpCIia1QRnEL13GQCG51fLGl3wPpDg+8q/ftKpAIDLqTXXBFuhhgcgPJxGhHdPkdzdqn3pa5YycYXX38aXb+40APQybOobHgAO0wapgbldOTFPYyApMTwAsANmaACg3pc/JS0hpKU7WgOetQf+65WegL+veOGkoQEAlWVoADhMFqpdvnTsEq82YBADBQBsxExf9SyfuAOD2wVXQPzVHCInpQZVsubFdoMqXrvbqw0cM+xMAMRSEcArXz4l2h5ca8MCgBCdorQ1CKsATqjBoO7d/4OXFwJtavd8FdBUBPDy5/8j+ozQUTAUAK1F1OqWO+y3zmh8iSVkzfP627QVOwKaigDOLVsvGr9AjYEhAYBCC7XCF77xSPBdwh3zAgoA7P+KudFQNyBsaxgAuoWTGD0AIBGGyUsdC+xIAFqNb6Xo4V3YOxbbEzYMAFCmdOm+Bq8Drnp2o+6q29W5qQiFrO3EisdF+zcSACaMkyYL24ye9QBvbGEzXK5mFwk4afQiw6QiwCWV2rUzFABACJEl7qp3cPGg6sU9CMgmQi4F/G2lSUdEpvFHyzsKALUMXhsEjVL2wnAAuCvqp67YwZbt/KfkwGEbMjmvSvYUMxxDCRQA0F9WUYPsSWktY+n0MlWpQQu5ds9Xkuf4xbyOzgAgdvBkfjNJbtxw9giiZrHnYwTRsl8A0FqorRYA2yUGD0PMgAsDpY4EAA59QXQutvHiebirsHo7v0Mmd0DM7wDATSVarirQCoANjngkFnn1CSfdOhIA8NDgiDyUvcqNDVITsFJvvEm54gYOIvgdAK2XdYCHAdXoWgAYX77Zq6/0Kat9AgBYrAwVCj2gdszzsg4xhjnwFTcyBYKefHP/fNGj76ZAXVcDHg9Ur8gta5tHnYAwZgBB+QoApDzgbBK4wVCeKky8ia0aPRWVcHBL6nCByV/Ues2X9gubwLCBZwT1tXKTL73vtXZpgNtG/NmrjZjnBM/oUXvt9PsbZ/gxip2KUGLYTJI72WEyypVloEPHzFkvm/FcsOUd/hQCCF/sbYXJCvsdZJmhW/Awltw5D6vS72LHEPnCPoUVburYH1WgTytdOSZVHFeu4Vii5yVMnqoKLl6CK2m09gOGFwyw1o15UEtihdvS7HuRniKFRtBo/hI9iatn/GUnbB5eCaStgbXUEevV77yai0zlDbKSDfFiP5Spqia43JTDpDw8MlXzDYR9Bk1su4fBV30uZPBMQFXoKc6Aw73ggq5+5RvN/xcKtRsdLZ1/DTJc2pGcX9kUN6TgvL6bSKw+l5ACw+rg/febR+m+mEMuFyQvfNdJq8M5yhRIgsv2xs/ftGxI2uwftC55c/fWJa/23KgnwzO8fldZAyZUier1u+hbf9Tfl3X4hQpWPD3BMq7yhJ7C7HiVQoFNFV/0+5LtH+sTOlyhaXftFVx/aUwqrNs5JKOw7kB03BjN90JDDkZoJ3zV73zFvEfaXKPgnVa7c3NTs7Pr/e7AzHUHw+6YXr8t9tbJ5/UIDnz3MXc/JFsBI8VQ7XLnqud0V8xbHa6vhVdbdlmq8sFOBPV7B9mJCB3GU8mYXxH63V80uWrHsJSJNc1RvUfr/v0At/+u58InT/3uecH3FUcz1x0Myy5u2KrFTogZao3sdXXxFU9Vx9k1kyq21g5NLzsjZSf84L97Xd4dJBEqXLkzP3fuhveyi238wdopVdu9jgxqYu/r64OkhqR+wCGo3zuZmo6wUKvdWa7yivtTNoerzvMnTILkJ3L/yIPN7nxXRPAfwz3VQf3eCcQYC2lqbkm22l0rbQ5XLXwO6vcgBSlIQQqSyWD0fx6ez0EspMNEAAAAAElFTkSuQmCC"/>
        </defs>
      </svg>
      <div class="footer__logo-text">English</div>
    </div>
    <div class="footer__title">
      2015 - 2021 © English. Все права защищены.
      Политика конфиденциальности
      Соглашение об обработке персональных данных
    </div>
    <div class="footer__info">
      ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0
      ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000
    </div>
    <div class="footer__social">
      <svg class="footer__social-vk" width="30" height="15" viewBox="0 0 30 15" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <path id="vk_red copy" fill-rule="evenodd" clip-rule="evenodd"
              d="M14.6782 14.9369H16.4715C16.4715 14.9369 17.0128 14.8849 17.2893 14.624C17.5446 14.3836 17.5361 13.9333 17.5361 13.9333C17.5361 13.9333 17.5011 11.8249 18.6176 11.5139C19.7182 11.2075 21.1323 13.5517 22.6301 14.4532C23.7636 15.1356 24.6248 14.9861 24.6248 14.9861L28.6309 14.9369C28.6309 14.9369 30.7262 14.8237 29.7326 13.38C29.651 13.2621 29.1532 12.3114 26.7539 10.359C24.2413 8.31553 24.5782 8.64604 27.6045 5.11067C29.4466 2.95862 30.1838 1.644 29.9529 1.08139C29.7337 0.544768 28.3788 0.686814 28.3788 0.686814L23.8674 0.710952C23.8674 0.710952 23.5327 0.671031 23.2848 0.801008C23.0433 0.9282 22.8876 1.22529 22.8876 1.22529C22.8876 1.22529 22.1725 2.89085 21.2213 4.3076C19.2129 7.29707 18.4089 7.4549 18.0806 7.26922C17.3168 6.83658 17.5075 5.53217 17.5075 4.60469C17.5075 1.70713 18.0096 0.499276 16.5319 0.186403C16.0415 0.0833498 15.6802 0.0146477 14.4261 0.00350683C12.817 -0.0113477 11.4548 0.00722047 10.6836 0.338662C10.1699 0.558694 9.77372 1.04982 10.0152 1.07767C10.3129 1.11295 10.9887 1.23736 11.3467 1.66443C11.8086 2.2159 11.7927 3.45346 11.7927 3.45346C11.7927 3.45346 12.0586 6.8635 11.172 7.28778C10.5639 7.57745 9.73029 6.98512 7.93905 4.27232C7.02172 2.88342 6.32895 1.34784 6.32895 1.34784C6.32895 1.34784 6.19548 1.06096 5.95715 0.906846C5.66796 0.721165 5.26438 0.661747 5.26438 0.661747L0.977491 0.686814C0.977491 0.686814 0.334511 0.702597 0.0982924 0.947696C-0.112504 1.16587 0.081344 1.61708 0.081344 1.61708C0.081344 1.61708 3.43713 8.49842 7.23675 11.966C10.7218 15.1458 14.6782 14.9369 14.6782 14.9369Z"
              fill="white"/>
      </svg>
      <svg class="footer__social-telegram" width="27" height="27" viewBox="0 0 27 27" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <path d="M23.2477 4.18179L3.30143 11.8734C1.94018 12.4202 1.94806 13.1795 3.05168 13.5182L8.17268 15.1157L20.0212 7.64004C20.5814 7.29916 21.0933 7.48254 20.6726 7.85604L11.0729 16.5197H11.0707L11.0729 16.5208L10.7197 21.7993C11.2372 21.7993 11.4656 21.5619 11.7558 21.2818L14.2432 18.863L19.4171 22.6847C20.3711 23.21 21.0562 22.94 21.2936 21.8015L24.6899 5.79504C25.0376 4.40116 24.1578 3.77004 23.2477 4.18179Z"
              fill="white"/>
      </svg>
    </div>

  </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
