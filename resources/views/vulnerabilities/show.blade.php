@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <shown-vulnerability vid="{{ request()->route('id') }}"></shown-vulnerability>
        </div>
    </div>
</div>
@endsection
