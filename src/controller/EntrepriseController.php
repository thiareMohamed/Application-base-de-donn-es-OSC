<?php
use libs\system\Controller;
use src\model\Entreprise;

class EntrepriseController extends Controller
{
   private $partenaires;
   public function __construct() {
       parent::__construct();
       $this->partenaires = new Enreprise();
   }

   public function list(){
      
   $listes = $this->partenaires->finAll();
   
   return $this->view->load("Enreprise/list",$listes);
   }
   public function ajout(){

     $entreprise = new Entreprise();
     $entreprise->setNom($_POST['nom']);
     $entreprise->setPrenom($_POST['prenom']);
     $entreprise->setCivilite($_POST['civilite']);
     $entreprise->setDateNaissance($_POST['dateNaissance']);
     $entreprise->setLieuNaissance($_POST['lieuNaissance']);
     $entreprise->setCni($_POST['cni']);
     $entreprise->setAdresse($_POST['adresse']);
     $entreprise->setNationalite($_POST['nationalite']);
     $entreprise->setContact($_POST['contact']);
     $entreprise->setEmail($_POST['email']);
     $entreprise->setPassword($_POST['password']);
      
      $this->partenaires->insert($entreprise);
      return $this->list();
    }

   /**
    * http://localhost/PHP/Mini_projet_doctrine/Enreprise/formulaire
    */
    public function formulaire(){
      return $this->view->load("Enreprise/ajout");
    }


   /**
    * http://localhost/PHP/Mini_projet_doctrine/Enreprise/edit/3
    */
   public function edit($id) {
      $trouver = $this->partenaires->editBd($id);
      
      return $this->view->load("Enreprise/modification",$trouver);
   }

   public function details($id) {
      $trouver = $this->partenaires->editBd($id);
      
      return $this->view->load("Enreprise/details",$trouver);
   }

   public function modifier($id) {
      $data = $this->partenaires->editBd($id);
      $data->setNom($_POST['nom']);
      $data->setPrenom($_POST['prenom']);
      $data->setCivilite($_POST['civilite']);
      $data->setDateNaissance($_POST['dateNaissance']);
      $data->setLieuNaissance($_POST['lieuNaissance']);
      $data->setCni($_POST['cni']);
      $data->setAdresse($_POST['adresse']);
      $data->setNationalite($_POST['nationalite']);
      $data->setContact($_POST['contact']);
      $data->setEmail($_POST['email']);
      $data->setPassword($_POST['password']);
      $this->partenaires->modifierBd();
      return $this->list();
   }
   
   public function delete($id) {
      $this->entreprises->deleteBd($id);
      return $this->list();
   }

}

