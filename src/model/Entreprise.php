<?php
 namespace src\model;
 use libs\system\Model;

 class Entreprise extends Model
 {
    
    public function finAll(){
       
        return $this->entityManager->createQuery("SELECT p FROM entreprises p")->getResult();

    }

    public function insert($entreprise){

        
        $this->entityManager->persist($entreprise);
        $this->entityManager->flush();
    }
    public function editBd($id) {

        return $entreprise = $this->entityManager->find("entreprise",$id);
     }

     public function modifierBd(){

        $this->entityManager->flush();
     }

     public function deleteBd($id){
        $entreprise = $this->entityManager->find("entreprise",$id);
        $this->entityManager->remove($entreprise);
        $this->entityManager->flush();
     }
 }
 ?>