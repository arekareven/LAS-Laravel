<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>

{{-- datatable --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

{{-- editor --}}
<script src="{{ asset('assets/assets/vendors/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/pages/form-editor.js') }}"></script>
<script>
    var quill = new Quill('#editor', {
    theme: 'snow'
  });
    quill.on('text-change', function(delta, oldDelta, source) {
      document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
  </script>
