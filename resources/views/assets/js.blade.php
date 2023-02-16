<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>

{{-- datatable --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

<script>
    $('.li-modal').on('click', function(e) {
        e.preventDefault();
        $('#theModal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
</script>
