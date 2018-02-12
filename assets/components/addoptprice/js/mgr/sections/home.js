addOptPrice.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'addoptprice-panel-home',
            renderTo: 'addoptprice-panel-home-div'
        }]
    });
    addOptPrice.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(addOptPrice.page.Home, MODx.Component);
Ext.reg('addoptprice-page-home', addOptPrice.page.Home);