@extends('layouts.amaze')

@section('content')
<embed src="{{ url('/storage/' .$file->path) }}" type="application/pdf" width="100%" height="100%">
@endsection
