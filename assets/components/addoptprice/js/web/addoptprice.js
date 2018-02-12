$(document).ready(initAddOP);
function initAddOP(){
    objModel.initFunction();

}

var objModel= {
    config: {
        ajaxURL: '/connectormg',
        containerBack: ".containerBack",
        sender_id_key: "sender_id",
        action_push_key: "action_push",
        dop_price: ".price2"
    },
    initFunction: function (){

    },
    ajax:function(jsonstr,containerBack,thisEl){
        jQuery.ajax({
            url: this.config.ajaxURL,
            type: "POST",
            async: false,
            cache: false,
            data: jsonstr,
            //processData: false,
            dataType: 'json',
            success: function(response) {
                //response['query']
                console.log(response['query'],response['query1']);
            },
            error: function(jqXHR,textStatus,errorThrown){
                if(typeof(console)!='undefined') console.log(jqXHR,textStatus,errorThrown);
            }
        });
    },
}