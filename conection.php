<?php
    class crud {
        public static function conect() {
            try {
                $con = new PDO('mysql:localhost=host; dbname=crudsystem', 'root', '');
                return $con;
            } catch (PDOException $error1) {
                echo 'Something went wrong, it was not possible to conect you to database! '.$error1->getMessage();
            } catch (Exception $error2) {
                echo 'Generic error!'.$error2->getMesssage();
            }           
        }

        public static function Selectdata()
        {
            $data = array();
            $p = crud::conect()->prepare('SELECT * FROM crudtable');
            $p->execute();
            $data = $p->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>