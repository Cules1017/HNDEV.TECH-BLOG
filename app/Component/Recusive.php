<?php
namespace App\Component;
class Recusive{
    private $html_selection;
    private $data;
    public function __construct($data)
    {
        $this->html_selection='';
        $this->data=$data;
    }
    public function find_child($idp,$id_parent=0,$text=''){

        foreach($this->data as $value){
            if($value['parent_id']==$id_parent)
            {
            if(!empty($idp) && $idp == $value['id'] ){
                   $this->html_selection.= '<option selected value="'.$value['id'].'">'.$text.$value['name'].'</option>';
            }
            else{
                  $this->html_selection.= '<option value="'.$value['id'].'">'.$text.$value['name'].'</option>';
            }
                
                 $this->find_child($idp,$value['id'],$text.'---');
            }
        }
        return $this->html_selection;
    } 
}