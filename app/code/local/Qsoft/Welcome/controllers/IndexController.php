<?php
    class Qsoft_Welcome_IndexController extends Mage_Core_Controller_Front_Action {
        public function indexAction(){
            //echo "Hello some kind redirect!";
            //http://localhost/magento_exist/welcome/
            
            $this->loadLayout();
            $this->renderLayout();
        }
    }