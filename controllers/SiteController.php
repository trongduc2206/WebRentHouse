<?php
require_once '../core/Controller.php';
require_once '../core/Request.php';
require_once '../models/Good.php';
    class SiteController extends Controller {
        public function home(){
            $good = new Good();
            $data = $good->showListGood();
            $numOfGood = $good ->getGoodNumber();
            $numOfImport = $good ->getImportGoodNum();
            $numOfExport = $good -> getExportGoodNum();
            // var_dump($data);
            $params = [
                'good' => $data,
                'numOfGood' => $numOfGood,
                'numOfImport' => $numOfImport,
                'numOfExport' => $numOfExport
            ]; 
            if(Application::$app->isGuest()){
                return $this->render('greeting');
            } else {
            return $this->render('home', $params);
            }
        }
        public function handleHome(Request $request){
           $body = $request -> getBody();
        }
    }
?>