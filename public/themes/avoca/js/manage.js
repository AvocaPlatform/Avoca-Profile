$(document).ready(function() {
    $('.editorWYSIWYG').summernote({
        height: 250
    });

    $('.modernSelect').select2({});

    $('.modernAjaxSelect').select2({
        url: $(this).attr('url'),
        data: function (params) {
            var query = {
                q: params.term
            };

            return query;
        }
    });
});