<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 */
class Entreprise
{

          /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id;

        /**
    * @ORM\Column(type="string")
    */
        private $nom;


         /**
    * @ORM\Column(type="string")
    */
    private $siege;

          /**
    * @ORM\Column(type="integer")
    */
    private $telephone;

          /**
    * @ORM\Column(type="date")
    */
    private $dateCreation;

          /**
    * @ORM\Column(type="string")
    */
    private $registre;

          /**
    * @ORM\Column(type="string")
    */
    private $ninea;

          /**
    * @ORM\Column(type="string")
    */
    private $siteWeb;

          /**
    * @ORM\Column(type="string")
    */
    private $dispositifFormation;

          /**
    * @ORM\Column(type="string")
    */
    private $organigramme;

          /**
    * @ORM\Column(type="string")
    */
    private $contrat;

          /**
    * @ORM\Column(type="integer")
    */
    private $quartier_id;





    public  function getId(){
        return $this->id;
    }
    public  function setId($id){
        $this->id=$id;
    }

    public  function getNom(){
        return $this->nom;
    }
    public  function setNom($nom){
        $this->nom=$nom;
    }

    public  function getSiege(){
        return $this->siege;
    }
    public  function setSiege($siege){
        $this->siege=$siege;
    }

    public  function getTelephone(){
        return $this->telephone;
    }
    public  function setTelephone($telephone){
        $this->telephone=$telephone;
    }

    public  function getDateCreation(){
        return $this->dateCreation;
    }
    public  function setDateCreation($dateCreation){
        $this->dateCreation=$dateCreation;
    }

    public  function getRegistre(){
        return $this->registre;
    }
    public  function setRegistre($registre){
        $this->registre=$registre;
    }

    public  function getNinea(){
        return $this->ninea;
    }
    public  function setNinea($ninea){
        $this->ninea=$ninea;
    }

    public  function getSiteWeb(){
        return $this->siteWeb;
    }
    public  function setSiteWeb($siteWeb){
        $this->siteWeb=$siteWeb;
    }

    public  function getDispositifFormation(){
        return $this->dispositifFormation;
    }
    public  function setDispositifFormation($dispositifFormation){
        $this->dispositifFormation=$dispositifFormation;
    }

    public  function getOrganigramme(){
        return $this->organigramme;
    }
    public  function setOrganigramme($organigramme){
        $this->organigramme=$organigramme;
    }

    public  function getContrat(){
        return $this->contrat;
    }
    public  function setcontrat($contrat){
        $this->Contrat=$contrat;
    }

    public  function getQuartier_id(){
        return $this->quartier_id;
    }
    public  function setQuartier_id($quartier_id){
        $this->quartier_id=$quartier_id;
    }
    



}