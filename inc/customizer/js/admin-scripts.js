jQuery(document).ready(function($) {	

  /**
     * Script for Customizer icons
     */ 
    $(document).on('click', '.insurance-hub-customize-icons li', function() {
        $(this).parents('.insurance-hub-customize-icons').find('li').removeClass();
        $(this).addClass('selected');
        var iconVal = $(this).parents('.insurance-hub-icons-list-wrapper').find('li.selected').children('i').attr('class');
        var inpiconVal = iconVal.split(' ');
        $(this).parents( '.insurance-hub-customize-icons' ).find('.insurance-hub-icon-value').val(inpiconVal[1]);
        $(this).parents( '.insurance-hub-customize-icons' ).find('.selected-icon-preview').html('<i class="' + iconVal + '"></i>');
        $('.insurance-hub-icon-value').trigger('change');
    });




   /**
     * Text editor on customizer
     */
    (function($) {
        wp.customizerCtrlEditor = {

            init: function() {

                $(window).load(function() {

                    $('textarea.wp-editor-area').each(function() {
                        var tArea = $(this),
                            id = tArea.attr('id'),
                            input = $('input[data-customize-setting-link="' + id + '"]'),
                            editor = tinyMCE.get(id),
                            setChange,
                            content;

                        if (editor) {
                            editor.on('change', function(e) {
                                editor.save();
                                content = editor.getContent();
                                clearTimeout(setChange);
                                setChange = setTimeout(function() {
                                    input.val(content).trigger('change');
                                }, 500);
                            });
                        }

                        tArea.css({
                            visibility: 'visible'
                        }).on('keyup', function() {
                            content = tArea.val();
                            clearTimeout(setChange);
                            setChange = setTimeout(function() {
                                input.val(content).trigger('change');
                            }, 500);
                        });
                    });
                });
            }
        };
        wp.customizerCtrlEditor.init();
    })(jQuery);
});