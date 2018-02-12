addOptPrice.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'addoptprice-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('addoptprice_items'),
                layout: 'anchor',
                items: [{
                    html: _('addoptprice_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'addoptprice-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    addOptPrice.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(addOptPrice.panel.Home, MODx.Panel);
Ext.reg('addoptprice-panel-home', addOptPrice.panel.Home);
