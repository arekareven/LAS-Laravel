<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>

{{-- datatable --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

{{-- Yajra datatable --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

{{-- <script>
    $('.li-modal').on('click', function(e) {
        e.preventDefault();
        $('#theModal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
</script> --}}

{{-- JS Yajra --}}
<script type="text/javascript">
    $(function () {
      
    //  Pass Header Token
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      
    // Render DataTable
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('customer.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'marital_status', name: 'marital_status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
    // Click to Button
    $('#createNewCustomer').click(function () {
        $('#saveBtn').val("create-product");
        $('#id').val('');
        $('#customerForm').trigger("reset");
        $('#modelHeading').html("Create New Customer");
        $('#ajaxModel').modal('show');
    });
      
    // Click to Edit Button
    $('body').on('click', '.editCustomer', function () {
      var id = $(this).data('id');
      $.get("{{ route('customer.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('#marital_status').val(data.marital_status);
      })
    });
      
    // Create Product Code
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#customerForm').serialize(),
          url: "{{ route('customer.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#customerForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
      
    // Delete Product Code
    $('body').on('click', '.deleteCustomer', function () {
     
        var id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ route('customer.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
       
  });
</script>