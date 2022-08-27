@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <vulnerability-form vid="{{ request()->route('id') }}"></vulnerability-form>
        </div>
    </div>
</div>
@endsection
