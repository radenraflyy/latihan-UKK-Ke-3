@extends('layout.app')

@section('title', 'Data Book')
@section('linkhead')
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css" />
@endsection

@section('content')
    @include('components.datatable-book')
@endsection

@section('script')
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/static/js/pages/simple-datatables.js"></script>
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="assets/static/js/pages/parsley.js"></script>
@endsection
