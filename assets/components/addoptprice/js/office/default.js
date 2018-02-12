Ext.onReady(function () {
    addOptPrice.config.connector_url = OfficeConfig.actionUrl;

    var grid = new addOptPrice.panel.Home();
    grid.render('office-addoptprice-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});