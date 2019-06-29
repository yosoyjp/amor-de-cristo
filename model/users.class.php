<?php
    class User{
        private $pdo;
        
        public $id;
        public $name;
        public $surname;
        public $email;  
        public $phone;
        public $password;
     
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
     
                $stm = $this->pdo->prepare("SELECT * FROM users");
                $stm->execute();
     
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function getByGroup($id, $type){
            try{
                $stm = $this->pdo
                          ->prepare("SELECT * FROM groups_has_users WHERE groupId = ? AND type = ?");
                          
                $stm->execute(array($id, $type));
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch (Exception $e){
                die($e->getMessage());
            }
        }
     
        public function getById($id){
            try 
            {
                $stm = $this->pdo
                          ->prepare("SELECT * FROM users WHERE id = ?");
                          
     
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function delete($id){
            try 
            {
                $stm = $this->pdo
                            ->prepare("DELETE FROM users WHERE id = ?");			          
     
                $stm->execute(array($id));
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function update($data)
        {
            try 
            {
                $sql = "UPDATE users SET 
                            name      		= ?,
                            surname          = ?, 
                            phone        = ?,
                            email        = ?,
                            password        = ?
                        WHERE id = ?";
     
                $this->pdo->prepare($sql)
                     ->execute(
                        array(
                            $data->name, 
                            $data->surname,                        
                            $data->phone,
                             $data->email,
                            $data->password, 
                            $data->id
                        )
                    );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
     
        public function create(User $data)
        {
            try 
            {
            $sql = "INSERT INTO users (name, surname, phone, email, password) 
                    VALUES (?, ?, ?, ?, ?)";
     
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                         $data->name, 
                        $data->surname,
                        $data->phone, 
                        $data->email, 
                         $data->password 
                       
                    )
                );
            } catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
    }
?>