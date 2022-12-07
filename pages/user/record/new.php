<?php
session_start();
try {
    $ognoo = post('ognoo', 10);
    $utga = post('utga', 255);
    $turul = post('turul', 15);
    $hariltsagch = post('hariltsagch', 100);
    $mungu_usuh = post('mungu_usuh', 10);
    $mungu_buurah = post('mungu_buurah', 10);
    $hurungu_usuh = post('hurungu_usuh', 10);
    $hurungu_buurah = post('hurungu_buurah', 10);
    $baraa_usuh = post('baraa_usuh', 10);
    $baraa_buurah = post('baraa_buurah', 10);
    $avlaga_usuh = post('avlaga_usuh', 10);
    $avlaga_buurah = post('avlaga_buurah', 10);
    $ur_usuh = post('ur_usuh', 10);
    $ur_buurah = post('ur_buurah', 10);
    $orlogo = post('orlogo', 10);
    $zardal = post('zardal', 10);

    $success = _exec(
        "insert into transaction set
        ognoo=?,
        utga=?,
        turul=?,
        hariltsagch=?,
        mungu_usuh=?,
        mungu_buurah=?,
        hurungu_usuh=?,
        hurungu_buurah=?,
        baraa_usuh=?,
        baraa_buurah=?,
        avlaga_usuh=?,
        avlaga_buurah=?,
        ur_usuh=?,
        ur_buurah=?,
        orlogo=?,
        zardal=?,
        create_user_id=?,
        create_time=now()
        ",
        'ssssiiiiiiiiiiiii',
        [$ognoo, $utga, $turul, $hariltsagch, $mungu_usuh, $mungu_buurah, $hurungu_usuh, $hurungu_usuh, $baraa_usuh, $baraa_buurah, $avlaga_usuh, $avlaga_buurah, $ur_usuh, $ur_buurah, $orlogo, $zardal, $_SESSION['id']],
        $count
    );
    die("$count : $success");
} catch (Exception $e) {
    echo "Алдаа : " . $e->getMessage();
    exit;
}

redirect('/user/home');