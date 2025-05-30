$(function () {
    "use strict";
    $("#wizard1").steps({ headerTag: "h3", bodyTag: "section", autoFocus: !0, titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>' }),
        $("#wizard2").steps({
            headerTag: "h3",
            bodyTag: "section",
            autoFocus: !0,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            onStepChanging: function (a, e, s) {
                if (!(e < s)) return !0;
                if (0 === e) {
                    var t = $("#firstname").parsley(),
                        i = $("#lastname").parsley();
                    if (t.isValid() && i.isValid()) return !0;
                    t.validate(), i.validate();
                }
                if (1 === e) {
                    var n = $("#email").parsley();
                    if (n.isValid()) return !0;
                    n.validate();
                }
            },
        }),
        $("#wizard3").steps({ headerTag: "h3", bodyTag: "section", autoFocus: !0, titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>', stepsOrientation: 1 });
});
