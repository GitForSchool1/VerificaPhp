<?php
    include_once "GenericDao.php";
    class EventoDao extends GenericDao{
        public static function read(object $object):?object{
            try{
                GenericDao::connection();
                $sql = "SELECT * FROM evento WHERE id=:id";
                $prepare = GenericDao::$connection->query($sql);
                $stuff = $prepare->fetch();
                return new Evento();
            }catch(PDOException $ex){
                return $ex;
            }
        }
        public static function readAll():array{
            $array = [];
            try{
                GenericDao::connection();
                $sql = "SELECT * FROM evento";
                $ret = GenericDao::$connection->query($sql);
                $stuffes = $ret->fetchAll();
                foreach($stuffes as $info){
                    $array = new Evento($info['id'],$info['titolo'],$info['dataInizio'],$info['dataFine'],$info['tariffa']);
                }
                return $array;
            }catch(PDOException $ex){
                echo $ex->getMessage();
                return [];
            }


        }
        public static function update(object $object):bool{ return false;}
        public static function delete(object $object):bool{ return false;}
    }


?>