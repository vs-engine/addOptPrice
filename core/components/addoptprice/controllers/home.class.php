<?php

/**
 * The home manager controller for addOptPrice.
 *
 */
class addOptPriceHomeManagerController extends modExtraManagerController
{
    /** @var addOptPrice $addOptPrice */
    public $addOptPrice;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('addoptprice_core_path', null,
                $this->modx->getOption('core_path') . 'components/addoptprice/') . 'model/addoptprice/';
        $this->addOptPrice = $this->modx->getService('addoptprice', 'addOptPrice', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('addoptprice:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('addoptprice');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->addOptPrice->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->addOptPrice->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/addoptprice.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->addOptPrice->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        addOptPrice.config = ' . json_encode($this->addOptPrice->config) . ';
        addOptPrice.config.connector_url = "' . $this->addOptPrice->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "addoptprice-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->addOptPrice->config['templatesPath'] . 'home.tpl';
    }
}