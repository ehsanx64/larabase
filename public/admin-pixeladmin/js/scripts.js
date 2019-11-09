
$(function() {
    window.inkare = {
        baseUrl: undefined,
        setBaseUrl: function(baseUrl) {
            this.baseUrl = baseUrl;
        },
        getGridActions: function(id, action) {
            var res = '';
            var css = '';

            switch (action) {
            case 'edit':
                css = 'btn-primary ion-edit';
                break;
            case 'remove':
                css = 'btn-danger ion-trash-b';
                break;
            case 'view':
                css = 'btn-warning ion-eye';
                break;
            default:
                css = 'btn-primary';
                break;
            }

            res += '<a class="grid-action-button" href="' + this.baseUrl + '/' + id + '"><span class="btn ' + css + '"></span></a>';

            return res;
        }
    };

    // Enable sortable plugin
    // var elems = document.getElementById('foo');
    //console.log(foo);
    //var formBuilderQuestions = document.getElementById('form-builder-questions');
    //Sortable.create(formBuilderQuestions, {
    //    group: 'form-builder-questions'
    //});

     //var subs = document.getElementById('child');
     //Sortable.create(child, {
     //    group: 'child'
     //});
});


