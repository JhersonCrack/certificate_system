@extends('layouts.app')
@section('content')

<table class="table-auto w-full">
  <thead class="bg-gray-900 text-gray-400">
    <tr class="text-left">
      <th>Id</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>DNI</th>
      <th>Código CIP</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($certificates as $certificate)
      <tr class="hover:bg-teal-300">
        <td> {{ $certificate->id }} </td>
        <td> {{ $certificate->name }} </td>
        <td> {{ $certificate->email }} </td>
        <td> {{ $certificate->dni }} </td>
        <td> {{ $certificate->cip }} </td>
        <td> Editar o eliminar </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection