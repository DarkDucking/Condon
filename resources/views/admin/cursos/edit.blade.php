@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar curso</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert bg-primary">
        <strong>{{session('info')}}</strong>

    </div>
    @endif
    <div class="card">
        <div class="card-body">
           
   </div>


@stop


@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
    });
</script>
@endsection