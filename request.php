<? if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {
    die();
}
$result['status'] = true;
$post = $_POST;
$mysqli = new mysqli("localhost", "cw58872_mysql", "qweasd123", "cw58872_mysql");

if ($mysqli == false) {
    $result['status'] = false;
    $result['message'] = 'Ошибка отправки';
} elseif ($post['FIO'] && $post['PHONE'] && $post['EMAIL']) {
    $db = $mysqli->query('INSERT INTO applications (name, phone, email) VALUES ("'.$post['FIO'].'", '.(int)$post['PHONE'].', "'.$post['EMAIL'].'")');

    if ($db === false) {
        $result['status'] = false;
        $result['message'] = 'Ошибка отправки';
    } else {
        $result['message'] = 'Сообщение успешно отправлено!';
    }
} else {
    $result['status'] = false;
    $result['message'] = 'Незаполнено одно из полей';
}
$mysqli->close();

echo json_encode($result);