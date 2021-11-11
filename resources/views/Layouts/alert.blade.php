@if(session('Insert_alert'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy Success!</strong> {{ session('Insert_alert') }}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif