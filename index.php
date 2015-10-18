<?php

require_once __DIR__.'/models/User.php';

try {
    $data = User::findAll();
    User::Delete('57');
    //$data = User::findOne();

    //Подстановка
    //$sth= $dbh->prepare('SELECT * FROM new_news WHERE id=:id');
    //$sth->execute([':id' => 2]);

    //$sth= $dbh->prepare('SELECT count(*) FROM new_news ');
    //$sth->execute();
    //$res = $sth->fetchOne();
    //$res = $sth->fetchAll(PDO::FETCH_OBJ);
    //var_dump($res['0']['title']);
    //$res = $sth->fetchALL(PDO::FETCH_CLASS, User::class);
    //var_dump($data);

}   catch (PDOException $e){
    echo $e->getMessage();
}

echo $data['0']->avtor;