<?php
namespace DigitalCollege\Dev\Block;

use DigitalCollege\Dev\Model\DigitalFactory;

class  Index extends \Magento\Framework\View\Element\Template
{
    protected $digitalFactory;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context,DigitalFactory $digitalFactory) {
        $this->digitalFactory = $digitalFactory;
        return parent::__construct($context);
    }

    public function getDados()
    {
        $dc = $this->digitalFactory->create()->getCollection();
        return $dc->getData();
    }

    public function saveData()
    {
        $dc = $this->digitalFactory->create();
        $dc->setData([
            'author_name' => 'Eu',
            'email' => 'email@eu.com.tu',
            'description' => 'Agora Vai Sem erro?!'
        ]);
        $dc->save();
    }
}
