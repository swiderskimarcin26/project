<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public $kindSelect;
    public $kindWhere;
    public $countySelect;
    public $countyWhere;
    public $corpsSelect;
    public $corpsWhere;
    
    public function offertAction(Request $request)
    {
        if ($request->get("chose")=="oferty") {
            $offerSelect="offer.corps";
        } else {
            $offerSelect=null;
        }
        return $this->render('default/index.html.twig');
    }
    public function typeAction(Request $request)
    {
        switch ($request->get("kind")) {
            case "all":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='*'";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "land":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='land'";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "navy":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='navy'";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "air":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='air'";
                return $this->kindSelect && $this->kindWhere;
                break;
            case "special":
                $this->kindSelect="regiment.type";
                $this->kindWhere="type='special'";
                return $this->kindSelect && $this->kindWhere;
                break;
        }
    }
    
    public function countyAction(Request $request)
    {
        var_dump($request->get("all"));
        
            if($request->get("all")=="deselect"){
                echo "1";
            }
            else{
            foreach ($request->get("approve") as $value){
                echo $value;
                
            if ($value=='malopolska') {
                $this->countySelect="regiment.county";
                $this->countyMalopolskaWhere="county='malopolska'";
                echo "1";
                $this->countySelect && $this->countyMalopolskaWhere;
            }
        
            if ($value=='gslask') {
                $this->countySelect="regiment.county";
                $this->countyGslaskWhere="OR county='gslask'";
                $this->countySelect && $this->countyWhere;
            }
        
            if ($value=='dslask') {
                $this->countySelect="regiment.county";
                $this->countyDslaskWhere="county='dslask'";
                $this->countySelect && $this->countyWhere;
            }
            
            if ($value=='opolskie') {
                $this->countySelect="regiment.county";
                $this->countyOpolskieWhere="county='opolskie'";
                $this->countySelect && $this->countyWhere;
            }
//            var_dump($this->countyMalopolskaWhere);
//                $this->countyWhere=$this->countyMalopolskaWhere.$this->countyGslaskWhere.$this->countyDslaskWhere.$this->countyOpolskieWhere;
//                $this->countySelect && $this->countyWhere;
            }}
    }

    public function corpsAction(Request $request)
    {
        if ($request->get("chose")=="oferty") {
            $this->corpsSelect=null;
            $this->corpsWhere=null;
        } else {
            switch ($request->get("corps")) {
                case "allcorps":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='*'";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
                case "private":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='private'";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
                case "ncoficer":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='ncoficer'";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
                case "oficer":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='oficer'";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
                case "civil":
                    $this->corpsSelect="offer.corps";
                    $this->corpsWhere="corps='civil'";
                    return $this->corpsSelect && $this->corpsWhere;
                break;
            }
        }
    }



    /**
     * @Route("/", name="homepage")
     */
  

    
    public function indexAction(Request $request)
    {
        if ($request->getMethod()=="POST") {
//            $request->typeAction(Request $request);
            $this->typeAction($request);
            $this->countyAction($request);
            $this->corpsAction($request);
            $this->typeAction($request);
            $query="SELECT * FROM ".$this->kindSelect. " " .$this->countySelect. " ".$this->corpsSelect. " "."WHERE ".$this->kindWhere ."AND ".$this->countyWhere. "AND ".$this->corpsWhere ;
            var_dump($query);
        }
        return $this->render('default/index.html.twig');
    }
    
//    private function prepareKindsData($data){
//        return typeAction($data);
//    }
//    private function prepareCountyData($data){
//        return countyAction($data);
//    }
//    private function prepareCorpsData($data){
//          return corpsAction($data);
//    }
//
}
