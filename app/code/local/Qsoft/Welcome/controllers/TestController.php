<?php
    class Qsoft_Welcome_TestController extends Mage_Core_Controller_Front_Action {
        public function indexAction(){
            echo "Hello Test!";
            //http://localhost/magento_exist/welcome/test
        }
        
        public function addAction(){
            echo "Test Add!";
            //http://localhost/magento_exist/welcome/test/add
        }
    }