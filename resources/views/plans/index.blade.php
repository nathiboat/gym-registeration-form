@extends('layouts.app')

@section('content')
    <plans stripe_product_id="{{ $stripe_product_id }}"/>
@endsection
