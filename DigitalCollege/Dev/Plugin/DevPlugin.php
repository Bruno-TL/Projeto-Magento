<?php

namespace DigitalCollege\Dev\Plugin;

class DevPlugin{
    public function beforeExecute(\DigitalCollege\Dev\Controller\Index\Index $subject) {
        $this->log('Passando Plugin');
    }

    private function log($text){
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/plugin.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info($text);
    }
}
