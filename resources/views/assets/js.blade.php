<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>

{{-- datatable --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

{{-- editor --}}
<script src="{{ asset('assets/assets/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/assets/vendors/tinymce/plugins/code/plugin.min.js') }}"></script>
<script>
    tinymce.init({ selector: '#default' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>


<script src="{{ asset('assets/assets/vendors/summernote/summernote-lite.min.js') }}"></script>
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 120,
    })
    $("#hint").summernote({
        height: 100,
        toolbar: false,
        placeholder: 'type with apple, orange, watermelon and lemon',
        hint: {
            words: ['apple', 'orange', 'watermelon', 'lemon'],
            match: /\b(\w{1,})$/,
            search: function (keyword, callback) {
                callback($.grep(this.words, function (item) {
                    return item.indexOf(keyword) === 0;
                }));
            }
        }
    });

</script>
