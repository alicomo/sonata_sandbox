var baseUrl = '/app_dev.php/admin/';
var Widget = Backbone.Model.extend({
    url: function () {
        return this.isNew() ? baseUrl+"/como/formbuilder/api/widget/list" : baseUrl+"/como/formbuilder/api/widget/"+this.id;
    }
});

var WidgetCollection = Backbone.Collection.extend({
    model: Widget,
    url: baseUrl+"/como/formbuilder/api/widget/list"
});


var WidgetsView = Backbone.View.extend({
    template: _.template($("#compliance_list_tpl").html())

});