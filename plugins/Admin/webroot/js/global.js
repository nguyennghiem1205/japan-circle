var Global =
{
    tab: function() {
        if($('.company').length) {
            $('.company a[href="#com_vie]').tab('show') // Select tab by name
            $('.company a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        }
    },

    getListPrefecture: function() {
        var selected = $('.select-parent');
        selected.each(function () {
            if(this.value) {
                var url = BASE_URL+'admin'+$(this).data('url'),
                    childClass = $(this).data('child');
                var child = $('.'+childClass);
                var data = this.value;
                var child_value = $(this).data('value');
                Global.requestAjax(url, data, child, child_value)
            }

        })
    },

    changeListSelect: function() {
        var selected = $('.select-parent');
        selected.change(function() {
            var url = BASE_URL+'admin'+$(this).data('url'),
                childClass = $(this).data('child');
            var child = $('.'+childClass);
            var data = this.value;
            Global.requestAjax(url, data, child)
        })
    },
    requestAjax: function(url,data,child, child_value) {
        $.ajax({
            url: url,
            data: {
                data: data
            },
            dataType: 'JSON',
            type: 'GET',
            success: function(data) {
                $('option', child).remove();
                var option = new Option(data.message,'');
                child.append($(option));
                $.each(data.list, function(text, key) {
                    var option = new Option(key, text);
                    child.append($(option));
                });
                if(child_value) {
                    child.val(child_value);
                }
            }
        });
    },

    addMoreImage: function() {
        var add = $('.add-more'),
            image_3 = $('.image-3'),
            image_4 = $('.image-4'),
            image_5 = $('.image-5');
        add.click(function() {
            if(!image_3.is(':visible')) {
                image_3.show();
            } else if (!image_4.is(':visible')) {
                image_4.show();
            } else {
                image_5.show();
                $(this).hide();
            }
            return false;
        })
    },

    rateStart: function() {
        if ($('.rateStart').length) {
            var score = $('.rateStart').data('rate-start');
            $('.rateStart').raty({
                score: score,
                readOnly: true
            });
        }
    },

    init:function() {
        $(".chosen-select").chosen();
    }
}



$(document).ready(function() {
    Global.init();
    Global.tab();
    Global.getListPrefecture();
    Global.changeListSelect();
    Global.addMoreImage();
    Global.rateStart();
})