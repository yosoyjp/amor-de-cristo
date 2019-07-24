<?php

    class Departament{
        private $pdo;
        
        const TABLE = 'departaments';

        public $id;
        public $name;
        public $description;
        public $slogan;
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

        public function getByName($name)
        {
            try 
            {
                $stm = $this->pdo
                          ->prepare("SELECT * FROM ".self::TABLE." WHERE name = ?");
                          
                $stm->execute(array($name));
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
     
        public function update($id, $name, $description, $slogan){
            try 
            {
                $sql = "UPDATE ".self::TABLE." SET 
                            name      		= ?,
                            description     = ?,
                            slogan          = ?
                        WHERE id = ?";
     
                return $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $name,
                            $description,
                            $slogan,
                            $id
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function create($name, $description, $slogan){
            try 
            {
            $sql = "INSERT INTO ".self::TABLE." (name, description, slogan) 
                    VALUES (?, ?, ?)";
     
            return $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $name, 
                        $description,
                        $slogan
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>