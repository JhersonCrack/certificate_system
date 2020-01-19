@extends('layouts.app')
@section('content')

<table class="w-full">
  <thead>
    <tr class="text-gray-400 text-left">
      <th class="border border-transparent rounded-tl-lg flex justify-center py-1 bg-elegantblack">Id</th>
      <th class="pl-1 py-1 bg-elegantblack ">Certificación</th>
      <th class="pl-1 py-1 bg-elegantblack ">Fecha</th>
      <th class="pl-1 py-1 bg-elegantblack ">Organizadores</th>
      <th class="border border-transparent rounded-tr-lg flex justify-center py-1 bg-elegantblack">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($certificates as $certificate)
      @if($certificate->id % 2 == 0)
        <tr class="text-gray-800 border border-gray-300 bg-gray-100 hover:bg-gray-200">
      @else
        <tr class="bg-gray-300 text-gray-800 border border-gray-300 bg-gray-100 hover:bg-gray-400">
      @endif
          <td class="flex justify-center py-1"> {{ $certificate->id }} </td>
          <td class="py-1"> {{ $certificate->name }} </td>
          <td class="py-1"> {{ $certificate->date }} </td>
          <td class="py-1"> {{ $certificate->organizedBy }} </td>
          <td class="py-1">
            <div class="flex justify-around">
              <a href="#" style="" class="text-blue-500 hover:text-blue-800">
                <svg class="fill-current" width="22" height="22" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path d="M12.2928932,3.70710678 L0,16 L0,20 L4,20 L16.2928932,7.70710678 L12.2928932,3.70710678 Z M13.7071068,2.29289322 L16,0 L20,4 L17.7071068,6.29289322 L13.7071068,2.29289322 Z" id="Combined-Shape"></path>
                </svg>
              </a>

              <a href="#" style="" class="text-red-500 hover:text-red-600">
                <svg class="fill-current" width="22" height="22" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path d="M2,2 L18,2 L18,4 L2,4 L2,2 Z M8,0 L12,0 L14,2 L6,2 L8,0 Z M3,6 L17,6 L16,20 L4,20 L3,6 Z M8,8 L9,8 L9,18 L8,18 L8,8 Z M11,8 L12,8 L12,18 L11,18 L11,8 Z" id="Combined-Shape"></path>
                </svg>
              </a>
            </div>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

  
    <div class="pt-2 flex justify-end pr-10">
      <a href="{{ route('certificates.create') }}">  
        <img class="h-16" src="{{ asset('images/add.png') }}" alt="">
      </a>
    </div>

    {{ $certificates->links() }}

@endsection