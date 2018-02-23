<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Portability\Connection;

class DefaultController extends Controller
{
    public $kindSelect;
    public $kindWhere;
    public $countySelect;
    public $countyWhere;
    public $corpsSelect;
    public $corpsWhere;
    public $countyMalopolskaWhere=null;
    public $countyGslaskWhere=null;
    public $countyDslaskWhere=null;
    public $countyOpolskieWhere=null;
    public $offerSelect=null;
    
    public function offertAction(Request $request)
    {

        if ($request->get("chose")=="oferty") {
           return $this->offerSelect="LEFT JOIN offer ON offer.regimentId=regiment.id ";
           
        } else {
           return $this->offerSelect=null;
        }
       
    }
    public function typeAction(Request $request)
    {
        switch ($request->get("kind")) {
            case "all":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='land' OR type='navy' OR type='air' OR type='special' ";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "land":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='land' ";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "navy":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='navy' ";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "air":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='air' ";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "special":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='special' ";
                return $this->kindSelect && $this->kindWhere;
                break;
        }
    }
    
    public function countyAction(Request $request)
    {
             
            if($request->get("all")=="deselect"){
                $this->countyWhere="regiment.county";
                $this->countyWhere="county='Małopolska' or county='GórnyŚląsk' or county='Dolny Śląsk' or county='Mazowieckie' or county='Lubuskie' ";
                return $this->countySelect && $this->countyWhere;
            }
            else{       
                $post = $request->get("approve");
      
                $zmienna=reset($post);
                  
                for ($i = 0; $i <(count($post)) ; $i++){
                  $or="OR ";

                if($post[$i] == $zmienna){
                    $or="";}  
                if ($post[$i]=='malopolska') {
                    $this->countySelect="regiment.county";
                    $this->countyMalopolskaWhere= $or."county='Małopolska' ";
                    $this->countySelect && $this->countyMalopolskaWhere;
                }
        
                if ($post[$i]=='gslask') {
                    $this->countySelect="regiment.county";
                    $this->countyGslaskWhere=$or."county='Górny Śląsk' ";
                    $this->countySelect && $this->countyWhere;
                }
        
                if ($post[$i]=='dslask') {
                    $this->countySelect="regiment.county";
                    $this->countyDslaskWhere=$or."county='Dolny Śląsk' ";
                    $this->countySelect && $this->countyWhere;
                }
            
                if ($post[$i]=='opolskie') {
                    $this->countySelect="regiment.county";
                    $this->countyOpolskieWhere=$or."county='Mazowieckie' ";
                    $this->countySelect && $this->countyWhere;
                }
                if ($post[$i]=='lubuskie') {
                    $this->countySelect="regiment.county";
                    $this->countyOpolskieWhere=$or."county='Lubuskie' ";
                    $this->countySelect && $this->countyWhere;
                }

//               
            }
                $this->countyWhere=$this->countyMalopolskaWhere.$this->countyGslaskWhere.$this->countyDslaskWhere.$this->countyOpolskieWhere;
                $this->countySelect && $this->countyWhere;
            
                }
    }

    public function corpsAction(Request $request)
    {
        if ($request->get("chose")=="regiment") {
            $this->corpsSelect=null;
            $this->corpsWhere=null;
            return $this->corpsSelect && $this->corpsWhere;
        } else {
            switch ($request->get("corps")) {
                case "allcorps":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="AND (corps='szeregowych' or corps='podoficerów' or corps='oficerów' or corps='cywilny') ";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
                case "private":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='szeregowych' ";
                break;
                case "ncoficer":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='podoficerów' ";
                break;
                case "oficer":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='oficerów' ";
                break;
                case "civil":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='cywilny' ";
                break;
            
               
            }
        }
          $this->corpsWhere="AND ".$this->corpsWhere;

          return $this->corpsSelect && $this->corpsWhere;
    }



    /**
     * @Route("/regiment/{id}", name="regiment")
     */
  

    
    public function regimentAction($id)
    {
        $conn = $this->getDoctrine()->getConnection();
        
            
            $queryRegimentPrepare= "SELECT * FROM regiment LEFT JOIN offer ON offer.regimentId=regiment.id WHERE regiment.id='$id'" ;
         
            
            $statement = $conn->prepare($queryRegimentPrepare);
            $statement->execute();
            $regiment = $statement->fetchAll();
            return $this->render('default/regiment/regimentProfile.html.twig',["vievRegimentPrepare"=>$regiment]);
          
    }
    

    /**
     * @Route("/", name="homepage")
     */
  
    
    public function indexAction(Request $request)
    {
        $conn = $this->getDoctrine()->getConnection();

        if ($request->getMethod()=="POST") {
            $this->offertAction($request);
            $this->countyAction($request);
            $this->corpsAction($request);
            $this->typeAction($request);
            $queryPrepare= "SELECT * FROM regiment  "." ".$this->offerSelect." WHERE (".$this->kindWhere .") AND (".$this->countyWhere.")".$this->corpsWhere;

            echo"<br>";
            $statement = $conn->prepare($queryPrepare);
            $statement->execute();
            $users = $statement->fetchAll();

            return $this->render('default/index.html.twig',["vievPrepare"=>$users]);
        }
        $users=null;
        return $this->render('default/index.html.twig',["vievPrepare"=>$users]);
    }
}

