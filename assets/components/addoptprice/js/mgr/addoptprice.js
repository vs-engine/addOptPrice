var addOptPrice = function (config) {
    config = config || {};
    addOptPrice.superclass.constructor.call(this, config);
};
Ext.extend(addOptPrice, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('addoptprice', addOptPrice);

addOptPrice = new addOptPrice();