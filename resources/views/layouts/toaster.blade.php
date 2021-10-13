@if (Session::has('message'))
    @if(Session::get('type') == 'error')
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @else
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
@endif
