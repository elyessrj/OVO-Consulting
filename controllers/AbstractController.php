<?php

abstract class AbstractController{
    /**
     * @return array
     * @throws Exception
     */
    public function checkData(){
        foreach ($_POST as $key=>$value){
            $valid=(isset($value) && !empty($value))?
                htmlspecialchars($value) : null;
            if ($valid==null){
                throw new Exception("Données non validées");
            }
            $tab[$key]=$valid;
        }
        return $tab;
    }
}