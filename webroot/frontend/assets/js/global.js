
var chosen = {
    init:function() {
        $(".chosen-select").chosen();
    },

    validate: function() {
        var btn = $('.btn-form-required');
        btn.each(function() {
            $(this).click(function() {
                var check = true;
                $(this).parents('.panel-body').find('.form-required').each(function(){
                    if($(this).find('.input-required').val()) {
                        $(this).find('.errorMessage').hide();
                    } else {
                        check = false;
                        $(this).find('.errorMessage').show();
                    }
                })
                if(!check) return false;
            })
        })
    }
}

$(document).ready(function() {
    chosen.init();
    chosen.validate();
    $('.delete').each(function() {
        $(this).click(function() {
            if (!confirm($(this).data('confirm'))) {
                return false;
            }
        })
    })
});