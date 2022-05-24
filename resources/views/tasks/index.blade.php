<x-app-layout id="swup" class="transition-fade">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            Liste des tâches
          <a href="{{ route('tasks.create') }}" role="button" class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded float-right">Créer une tâche</a>
        </h2>
    </x-slot>
    <div class="loader"></div>
    <div class="w-full min-h-screen overflow-hidden flex justify-center items-center relative shadow-xl">
      <div class="lg:w-[70%] w-[95%] bg-white-soft min-h-[90vh]">
        @if (session()->has('message'))
          <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 ">
            {{ session('message') }}
          </div>
        @endif
          <div class="w-fit min-h-[90vh] h-fit flex flex-col justify-evenly mx-2 absolute">
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
              <div class="bg-white shadow-innerxl w-7 h-7 rounded-full"></div>
          </div>
          <div class="absolute top-[15%] left-[13%] hidden lg:block">
              <div class="relative">
                  <div class="gradiant-pince w-20 h-40 shadow"></div>
                  <div class="gradiant-pince2 w-5 h-10 absolute z-10 top-0 right-0"></div>
                  <div class="gradiant-pince2 w-5 h-10 absolute z-10 bottom-0 right-0"></div>
                  <div class="gradiant-pince-middle w-3 h-20 absolute top-[50%] -translate-y-[50%] -right-[3%] bg-white-soft"></div>
                  <div class="gradiant-pince-middle2 gradiant-pince3 w-5 h-10 absolute top-[50%] -translate-y-[50%] -right-[1%]"></div>
                  <div class="absolute pince-poignet w-40 h-3 top-[33%] -translate-y-[50%] right-0 bg-clifford -rotate-6 rounded-full shadow"></div>
                  <div class="absolute pince-poignet w-40 h-3 top-[68%] -translate-y-[50%] right-0 bg-clifford rotate-6 rounded-full shadow"></div>
                  <div class="absolute w-20 h-24 top-[50%] -translate-y-[50%] -left-[185%] pince-poignet-top rounded-full shadow"></div>
                  <div class="absolute w-16 h-20 top-[50%] -translate-y-[50%] -left-[175%] bg-white rounded-full shadow-innerxl2"></div>
              </div>
          </div>
          <div class="absolute top-[65%] left-[13%] hidden lg:block">
              <div class="relative">
                  <div class="gradiant-pince w-20 h-40 shadow"></div>
                  <div class="gradiant-pince2 w-5 h-10 absolute z-10 top-0 right-0"></div>
                  <div class="gradiant-pince2 w-5 h-10 absolute z-10 bottom-0 right-0"></div>
                  <div class="gradiant-pince-middle w-3 h-20 absolute top-[50%] -translate-y-[50%] -right-[3%] bg-white-soft"></div>
                  <div class="gradiant-pince-middle2 gradiant-pince3 w-5 h-10 absolute top-[50%] -translate-y-[50%] -right-[1%]"></div>
                  <div class="absolute pince-poignet w-40 h-3 top-[33%] -translate-y-[50%] right-0 bg-clifford -rotate-6 rounded-full shadow"></div>
                  <div class="absolute pince-poignet w-40 h-3 top-[68%] -translate-y-[50%] right-0 bg-clifford rotate-6 rounded-full shadow"></div>
                  <div class="absolute w-20 h-24 top-[50%] -translate-y-[50%] -left-[185%] pince-poignet-top rounded-full shadow"></div>
                  <div class="absolute w-16 h-20 top-[50%] -translate-y-[50%] -left-[175%] bg-white rounded-full shadow-innerxl2"></div>
              </div>
          </div>
          <div class="py-12 ml-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                  <table class="table-fixed min-w-full">
                    <thead>
                      <tr class="border border-dashed border-1 border-black flex justify-space-evenly mr-20 lg:mx-2">
                        <th class="lg:px-4 px-2 w-1/5 lg:w-1/5">Titre</th>
                        <th class="px-4 w-1/5 hidden lg:block">Détail</th>
                        <th class="lg:px-4 px-2 w-1/8 lg:w-1/5">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tasks as $task)
                        <tr class="flex justify-space-evenly">
                          <td class="px-1 lg:px-4 py-3 w-1/5 text-center truncate">{{ $task->title }}</td>
                          <td class="px-4 py-3 w-1/5 text-center max-w-md truncate hidden lg:block">{{ $task->detail }}</td>
                          <td class="px-1 lg:px-4 py-3 w-[40px] lg:w-1/5 flex justify-center">@if($task->state) <img src="{{URL::asset('/img/tick.svg')}}">  @else <img class="animate-spin select-none" src="{{URL::asset('/img/loading.svg')}}"> @endif</td>
                          <td class="px-1 lg:px-4 py-3 lg:w-fit text-xs lg:text-base"><a href="{{ route('tasks.show', $task->id) }}" role="button" class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Voir</a></td>
                          <td class="px-1 lg:px-4 py-3 lg:w-fit text-xs lg:text-base"><a href="{{ route('tasks.edit', $task->id) }}" role="button" class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Modifier</a></td>
                          <td class="px-1 lg:px-4 py-3 lg:w-fit text-xs lg:text-base">
                            <form id="destroy{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                              @csrf
                              @method('DELETE')                      
                              <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded lg:after:content-['Supprimer'] after:content-['X']"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                              </a>
                            </form>
                          </td class="px-4 py-3">
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>      
      </div>
    </div>    
      {{--  --}}
    {{--  --}}
</x-app-layout>