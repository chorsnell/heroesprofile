@extends ('layouts.app')

@section ('searchform')

@endsection

@section('datatable')
 <search-form :rawfields='@json($rawfields)'></search-form>
  <data-table :dataurl="'{{ $dataurl }}'"></data-table>
@endsection