@extends('layouts.amaze')

@section('content')
<div class="admin-content">
    <embed src="{{ url('/storage/' .$file->path) }}" type="application/pdf" width="100%" height="100%">
</div>
@section('jsgroup')
@include('layouts.pdfobject')
@endsection
@endsection
