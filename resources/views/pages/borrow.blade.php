@extends('layout.app')

@section('title', 'Data Borrow')
@section('linkhead')
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css" />
@endsection

@section('content')
    @include('components.datatable-borrow')
    @include('sweetalert::alert')
@endsection

@section('script')
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/static/js/pages/simple-datatables.js"></script>
@endsection
