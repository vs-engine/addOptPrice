<?php

class addOptPriceOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'addOptPriceItem';
    public $classKey = 'addOptPriceItem';
    public $languageTopics = array('addoptprice');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('addoptprice_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('addoptprice_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'addOptPriceOfficeItemCreateProcessor';