<?php
    class Net{
        private $pdo;

        const TABLE = 'nets';
        
        public $id;
        public $name;

        public function __CONSTRUCT()
        {
            try
            {
                $this->pdo = Database::StartUp();     
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
     
        public function findAlls()
        {
            try
            {
                $result = array();
     
                $stm = $this->pdo->prepare("SELECT * FROM ".self::TABLE);
                $stm->execute();
     
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
     
        public function getById($id)
        {
            try 
            {
                $stm = $this->pdo
                          ->prepare("SELECT * FROM ".self::TABLE." WHERE id = ?");
                          
     
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function delete($id)
        {
            try 
            {
                $stm = $this->pdo
                            ->prepare("DELETE FROM ".self::TABLE." WHERE id = ?");			          
     
                $stm->execute(array($id));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function update($data){
            try 
            {
                $sql = "UPDATE ".self::TABLE." SET 
                            name      		= ?
                        WHERE id = ?";
     
                $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $data->name, 
                            $data->id
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function create(User $data){
            try 
            {
            $sql = "INSERT INTO ".self::TABLE." (name) 
                    VALUES (?);
                    SELECT LAST_INSERT_ID();
                    ";
     
            $stm = $this->pdo->prepare($sql)
                 ->execute(
                    array(
                         $data->name
                    )
                );
            return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>