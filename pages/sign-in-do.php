<?php
session_start();
// phone, userpassword хүлээж авна
$phone = post('phone', 15);
$password = post('userpassword', 12);

// Алдааг хадгалах массив үүсгэнэ
$errors = [];

// Хэрэв phone password алдаатай бол алдааг session-д бичээд логин хуудас руу үсэргэнэ
if (strlen($phone) < 8) {
    $errors[] = "Утасны дугаар буруу байна";
}

if (strlen($password) < 4) {
    $errors[] = "Нууц үгээ зөв оруулна уу";
}

if (sizeof($errors) > 0) {
    $_SESSION['errors'] = $errors;
    redirect('/sign-in');
}

// Базаас ийм утас нууц үгтэй хүний мэдээллийг татна
_selectRow(
    $stmt, $count,
    "select id, name, email, phone from users where phone=? and pass=?",
    'ss',
    [$phone, $password],
    $id, $name, $email, $phone
);

/* Хэрэв мэдээлэл ирсэн байвал
1) session эхлүүлнэ
2) session-д хэрэглэгчийн мэдээллийг бичнэ
3) home хуудас руу үсэргэнэ
 */
if (!empty($name)) {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['type'] = 'user';
    redirect('/user/home');
} else {
    $_SESSION['errors'] = ["Таны утас эсвэл нууц үг буруу байна"];
    redirect('/sign-in');
}