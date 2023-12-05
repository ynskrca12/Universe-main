@extends('layouts.master')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
 {{ Auth::user()->name }}   {{ Session::get('success') }}
</div>
@endif
@endsection

@section('css')
<style>

</style>
@endsection


@section('js')
<script>

</script>
@endsection
