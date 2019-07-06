<?php
    require 'model/database.class.php';

    class Group{
        private $pdo;
        
        const TABLE = 'groups';

        public $id;
        public $name;
        public $netId;
        public $members;
     
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
                            name      		= ?,
                            netId          = ?,
                        WHERE id = ?";
     
                $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $data->name, 
                            $data->netId,
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
            $sql = "INSERT INTO ".self::TABLE." (name, netId) 
                    VALUES (?, ?,)";
     
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                         $data->name, 
                        $data->netId
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>