require.config({
  baseUrl: "/bundles/comoformbuilder/assets/js/lib/"
  , shim: {
    'backbone': {
      deps: ['underscore', 'jquery'],
      exports: 'Backbone'
    },
    'underscore': {
      exports: '_'
    },
    'bootstrap': {
      deps: ['jquery'],
      exports: '$.fn.popover'
    }
  }
  , paths: {
    app         : "/bundles/comoformbuilder/assets/js"
    , collections : "/bundles/comoformbuilder/assets/js/collections"
    , data        : "/bundles/comoformbuilder/assets/js/data"
    , models      : "/bundles/comoformbuilder/assets/js/models"
    , helper      : "/bundles/comoformbuilder/assets/js/helper"
    , templates   : "/bundles/comoformbuilder/assets/js/templates"
    , views       : "/bundles/comoformbuilder/assets/js/views"
  }
});
require(['app/app'], function(app){
  app.initialize();
});
