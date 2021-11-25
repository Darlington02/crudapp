<?php

    require_once('dbconfig.php');

    class Operations extends Dbconfig{

        public function signup($email, $role, $status, $password){

            $sql = "INSERT INTO users(email, role, status, password) VALUES(?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $role, $status, $password]);
        }

        public function show(){
            
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            echo'
            <ul class="list-group">';
                while($row = $stmt->fetch()){
                    echo '
                    <li class="list-group-item"><h6 class="">'; echo $row['email']; echo '</h6>
                        <span class="mt-2 d-flex">
                            <a href="update.php?user='; echo $row['id']; echo '"><button class="btn btn-warning btn-sm mr-3">Edit</button></a> 
                            <form method="post">
                                <input type="hidden" name="id" value="'; echo $row['id']; echo '">
                                <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </span>
                    </li>';
                }
            echo '</ul>';
            
        }

        public function update($email, $role, $status, $password, $id){
            $sql = "UPDATE `users` SET `email`=?,`role`=?,`status`=?,`password`=? WHERE `id`=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $role, $status, $password, $id]);
        }

        public function delete($id){
            $sql = "DELETE FROM users WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }

 