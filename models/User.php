<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 17.10.2015
 * Time: 20:35
 */
require_once __DIR__.'/../classes/Connection.php';
class User
{
    const TABLE = 'new_news';
    public $id;
    public $title;
    public $text;
    public $dbh;


    public static function findAll(){
        $dbh = new Connection();
        $sql = 'SELECT * FROM ' . self::TABLE . '';
        $sth = $dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function Delete($it){
        $dbh = new Connection();
        $sql = 'DELETE FROM ' . self::TABLE .' WHERE id=:id';
        $sth = $dbh->prepare($sql);
        $sth->execute([':id' => $it]);

    }
}