var WidgetsView = Backbone.View.extend({
    template: _.template($("#compliance_list_tpl").html()),
    tagName: "tbody",
    events: {
        "click a[name=edit_compliant]" : "edit",
        "click a[name=delete_compliant]" : "deleteCompliant"
    },
    initialize: function(){
        var invView = this;
        this.collection = new Backbone.Collection;
        this.collection.model = Compliant;
        this.collection.url = root.baseUrl+"/compliance.json?"+complianceFilter;
        this.collection.fetch({
            success: function(){
                invView.render();
            }
        });
        _.bindAll(this);
    },
    render: function(){
        $(this.el).html(this.template({
            compliances: this.collection
        }));
        $("#compliance_list").find("tbody").remove();
        $("#compliance_list").append(this.el);
    }
});
