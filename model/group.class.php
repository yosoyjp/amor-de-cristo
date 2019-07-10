<?php

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
     
                return $stm->execute(array($id));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function update($id, $name, $netId){
            try 
            {
                $sql = "UPDATE ".self::TABLE." SET 
                            name      		= ?,
                            netId          = ?
                        WHERE id = ?";
     
                return $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $name, 
                            $netId,
                            $id
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function create($name, $netId){
            try 
            {
            $sql = "INSERT INTO ".self::TABLE." (name, netId) 
                    VALUES (?, ?)";
     
            return $this->pdo->prepare($sql)
                 ->execute(
                    array(
                         $name, 
                        $netId
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>