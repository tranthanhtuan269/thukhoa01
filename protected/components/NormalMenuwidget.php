<?php
class NormalMenuwidget extends CWidget{
    public $message;
    public function init(){
        //var_dump(Yii::app()->user->name);
        //echo get_class(Yii::app()->user); die;
    }
    public function run(){
        $id=1;
        $this->render("displaymessage",array('id'=>$id));    
    }
}
?>
