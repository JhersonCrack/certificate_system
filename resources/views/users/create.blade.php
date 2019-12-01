@extends('layouts.app')
@section('content')

<div class="max-w-md mx-auto">
  <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nombre
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="username" type="text" placeholder="Juan Mendez Beltran">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Correo Electrónico
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="mi_correo@gmail.com">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="dni">
        DNI
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dni" type="text" placeholder="24587820">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="cip">
        CIP
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cip" type="text" placeholder="24879">
    </div>

    <div class="flex items-center justify-between">
      <button class="mx-auto bg-elegantblack text-gray-100 border rounded border-black hover:border-gray-600 hover:bg-gray-400 hover:text-gray-900 font-bold py-3 px-4 focus:outline-none focus:border-gray-700 border-b-4 hover:border-gray-500" type="button">
        Crear Usuario
      </button>
    </div>

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2019 Acme Corp. All rights reserved.
  </p>
</div>

@endsection