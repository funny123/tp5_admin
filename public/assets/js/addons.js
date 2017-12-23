define([], function () {
    require(['form', 'upload'], function (Form, Upload) {
    var _bindevent = Form.events.bindevent;
    Form.events.bindevent = function (form) {
        _bindevent.apply(this, [form]);
        try {
            //绑定自定义属性组件
            if ($("textarea[id$=Properties]", form).size() > 0) {
                require(['../addons/properties/Properties'], function (Properties){
                    var obj=$("textarea[id$=Properties]", form);

            　　　　var table=Properties.init(obj);

                    $(form).on("click",".property_add",function(event){
                        Properties.create(table);
                    })

                    $(form).on("click",".property_del",function(event){
                        Properties.remove(table,$(this).parents("tr").data("index"));
                    })

                    $(form).on("click",".property_drag",function(event){
                        Properties.sort(table,$(this).data("index"),$(this).data("direction"));
                    })

                    $(form).on("change","input",function(event){
                        Properties.set(table,$(this).parents("tr").data("index"));
                    })


                    
            　　});
            }
        } catch (e) {

        }

    };
});

require(['form', 'upload'], function (Form, Upload) {
    var _bindevent = Form.events.bindevent;
    Form.events.bindevent = function (form) {
        _bindevent.apply(this, [form]);
        try {
            //绑定summernote事件
            if ($(".summernote,.editor", form).size() > 0) {
                require(['summernote'], function () {
                    $(".summernote,.editor", form).summernote({
                        height: 250,
                        lang: 'zh-CN',
                        fontNames: [
                            'Arial', 'Arial Black', 'Serif', 'Sans', 'Courier',
                            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande',
                            "Open Sans", "Hiragino Sans GB", "Microsoft YaHei",
                            '微软雅黑', '宋体', '黑体', '仿宋', '楷体', '幼圆',
                        ],
                        fontNamesIgnoreCheck: [
                            "Open Sans", "Microsoft YaHei",
                            '微软雅黑', '宋体', '黑体', '仿宋', '楷体', '幼圆'
                        ],
                        dialogsInBody: true,
                        callbacks: {
                            onChange: function (contents) {
                                $(this).val(contents);
                                $(this).trigger('change');
                            },
                            onInit: function () {
                            },
                            onImageUpload: function (files) {
                                var that = this;
                                //依次上传图片
                                for (var i = 0; i < files.length; i++) {
                                    Upload.api.send(files[i], function (data) {
                                        var url = Fast.api.cdnurl(data.url);
                                        $(that).summernote("insertImage", url, 'filename');
                                    });
                                }
                            }
                        }
                    });
                });
            }
        } catch (e) {

        }

    };
});

});