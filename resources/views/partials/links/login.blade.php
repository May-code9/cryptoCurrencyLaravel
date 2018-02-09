<link href="templates/bitcoin/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/style.css" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/legacy.css" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/template.css" rel="stylesheet" type="text/css" />
<link href="templates/bitcoin/css/presets/preset1.css" rel="stylesheet" type="text/css" class="preset" />
<link href="templates/bitcoin/css/frontend-edit.css" rel="stylesheet" type="text/css" />
<link href="components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css" />
<link href="components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
<link href="modules/mod_j2store_cart/css/j2store_cart.css" rel="stylesheet" type="text/css" />
<link href="media/j2store/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{font-family:Open Sans, sans-serif; font-size:14px; font-weight:normal; }
h1{font-family:Open Sans, sans-serif; font-weight:800; }
h2{font-family:Open Sans, sans-serif; font-weight:600; }
h3{font-family:Open Sans, sans-serif; font-weight:normal; }
h4{font-family:Open Sans, sans-serif; font-weight:normal; }
h5{font-family:Open Sans, sans-serif; font-weight:600; }
h6{font-family:Open Sans, sans-serif; font-weight:600; }
.sp-megamenu-parent{font-family:Open Sans, sans-serif; font-size:13px; font-weight:600; }
#sp-top-bar{ background-color:#2e2e2e;color:#ffffff; }
#sp-top-bar a{color:#ffffff;}
#sp-top-bar a:hover{color:#ffb426;}
#sp-header{ color:#252525; }
#sp-bottom{ background-color:#333333;color:#fafafa;padding:100px 0px; }
#sp-bottom a{color:#fafafa;}
#sp-footer{ background-color:#2e2e2e;color:#fafafa; }
</style>
<script type="application/json" class="joomla-script-options new">{"csrf.token":"60b053c99030ed276ade90003f869626","system.paths":{"root":"","base":""},"system.keepalive":{"interval":840000,"uri":"\/index.php\/component\/ajax\/?format=json"}}</script>
<script src="media/system/js/core.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/polyfill.event.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script><![endif]-->
<script src="media/system/js/keepalive.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
<script src="media/jui/js/jquery.min.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflict.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
<script src="media/jui/js/jquery-migrate.min.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/html5fallback.js?386a1dd61df95d775e65aa2d5cff4150" type="text/javascript"></script><![endif]-->
<script src="templates/bitcoin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="templates/bitcoin/js/jquery.sticky.js" type="text/javascript"></script>
<script src="templates/bitcoin/js/main.js" type="text/javascript"></script>
<script src="templates/bitcoin/js/custom.js" type="text/javascript"></script>
<script src="templates/bitcoin/js/frontend-edit.js" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script type="text/javascript">

  var j2storeURL = '';

var sp_preloader = '0';

var sp_gotop = '0';

var sp_offanimation = 'default';

jQuery(function($){

    var addonId 				= $("#sppb-addon-1516034312136"),
        prentSectionId	= addonId.parent().closest("section");

    if($("#sppb-addon-1516034312136").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0){
        prentSectionId.hide();
    }

    if($("#sppb-addon-1516034312136").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0){
        //var parentSection 	= $("#sppb-addon-1516034312136").parent().closest("section"),
        var addonWidth 			= addonId.parent().outerWidth(),
            optin_timein		= 2000,
            optin_timeout		= 10000,
            prentSectionId	= ".com-sppagebuilder:not(.layout-edit) #" + addonId.attr("id");

          $(window).load(function () {
          setTimeout(function(){
            $.magnificPopup.open({
                items: {
                    src: "<div class=\"sppb-optin-form-popup-wrap\" \">"+$(addonId)[0].outerHTML + "</div>"
                    //src: "<div style=\"width:+"addonWidth"+\">" + $(addonId)[0].outerHTML + "</div>"
                },
                type: "inline",
                mainClass: "mfp-fade",
                disableOn: function() {
                  return true;
                },
                callbacks: {
                  open: function() {
                    if(optin_timeout){
                      setTimeout(function(){
                          $("#sppb-addon-1516034312136").magnificPopup("close");
                      }, optin_timeout);
                    }
                  }
                }
            });
          }, optin_timein);
          }); //window
    };
  })
jQuery(function($){ $(".hasTooltip").tooltip({"html": true,"container": "body"}); });

if(typeof(j2store) == 'undefined') {
var j2store = {};
}
if(typeof(j2store.jQuery) == 'undefined') {
j2store.jQuery = jQuery.noConflict();
}
(function($) {
$(document).bind('after_adding_to_cart', function(element,data, type){

  var murl = '/index.php/component/j2store/carts/ajaxmini';

  $.ajax({
    url : murl,
    type : 'get',
    cache : false,
    contentType : 'application/json; charset=utf-8',
    dataType : 'json',
    success : function(json) {
      if (json != null && json['response']) {
        $.each(json['response'], function(key, value) {
          if ($('.j2store_cart_module_' + key).length) {
            $('.j2store_cart_module_' + key).each(function() {
              $(this).html(value);
            });
          }
        });
      }
    }

  });

});
})(j2store.jQuery);

</script>
