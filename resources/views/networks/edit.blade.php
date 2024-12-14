@extends('template.app')
@section('main')

    @section('breadcrumb')
    {{ Breadcrumbs::render('network.show', $network) }}
    @endsection
@endsection
