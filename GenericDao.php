<?php
    abstract class GenericDao{
        protected static ?PDO $connection = null;
        protected static string $URL = "sqlite:database.db";

        public static function connection(){
            try {
                GenericDao::$connection = new PDO(GenericDao::$URL);
                GenericDao::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                return $ex;
            }
        }


        public abstract static function read(object $object):?object;
        public abstract static function readAll():array;
        public abstract static function update(object $object):bool;
        public abstract static function delete(object $object):bool;
    }


?>