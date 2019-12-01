@extends('layouts.app')
@section('content')

<table class="table-auto w-full">
  <thead class="bg-gray-900 text-gray-400">
    <tr class="text-left">
      <th>Id</th>
      <th>Nombre</th>
      <th>Ponente</th>
    </tr>
  </thead>
  <tbody>
    @foreach($themes as $theme)
      <tr class="hover:bg-teal-300">
        <td> {{ $theme->id }} </td>
        <td> {{ $theme->name }} </td>
        <td> {{ $theme->ponent }} </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection