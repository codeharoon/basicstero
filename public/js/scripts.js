// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {


    $(document).ready(function(){

        $('.news-block').jScrollPane({
            verticalDragMinHeight: 138,
            verticalDragMaxHeight: 138,
            horizontalDragMinWidth: 138,
            horizontalDragMaxWidth: 138
        });

        $('#tabs').tabs({
            // select: function(event, ui) {
            // 	console.log('tab-changed', event, ui);
            // }
            // select: function(event, ui) {
            //     alert("PRESSED TAB!");
            // }
        });

        $('#tabs').on('tabsactivate', function(event, ui) {
            // var newIndex = ui.newTab.index();
            // console.log('Switched to tab '+newIndex);

            //    $('.product-list').jScrollPane({
            // 	verticalDragMinHeight: 138,
            // 	verticalDragMaxHeight: 138,
            // 	horizontalDragMinWidth: 138,
            // 	horizontalDragMaxWidth: 138
            // });

        });

        $('.product-list').each(function(){

            var plist = $(this);

            plist.jScrollPane({
                verticalDragMinHeight: 138,
                verticalDragMaxHeight: 138,
                horizontalDragMinWidth: 122,
                horizontalDragMaxWidth: 122,
                autoReinitialise: true
            });

            var products = $('ul li', plist).length;

            $('ul', plist).css('width',products*248);
        })
    });

});