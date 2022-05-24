<x-app-layout id="swup" class="transition-fade">
  <div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modification d'une tâche
        </h2>
    </x-slot>    

    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg relative">
          <x-jet-validation-errors class="mb-4" />
          @if (session()->has('message'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
              {{ session('message') }}
            </div>
          @endif
          <form action="{{ route('tasks.update', $task->id) }}" method="post">
              @csrf
              @method('put')
              <div class="mt-4">
                  <x-jet-label value="Titre" />
                  <x-jet-input class="block mt-1 w-full mb-5 focus:border-black focus:border mt-2 text-gray-600 focus:outline-none font-normal w-full h-10 flex items-center pl-3 text-sm rounded border" type="text" id=title name="title" :value="old('title', $task->title)" placeholder="Titre de la tâche" required autofocus />
              </div>

              <div class="mt-4" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
                  <x-jet-label value="Détail" />
                  <textarea class="details h-20 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-gray-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" style="width: 100%" id="detail" name="detail" maxlength="500" placeholder="Détail de la tâche" x-ref="countme" x-on:keyup="count = $refs.countme.value.length">{{ old('detail', $task->detail) }}</textarea>
                  <span x-html="count" class="text-xs opacity-40"></span> <span class="text-xs opacity-40">/</span><span class="text-xs opacity-40" x-html="$refs.countme.maxLength"></span>
                </div>

              <div class="block mt-4">
                  <label class="flex items-center">
                      <input type="checkbox" class="form-checkbox text-gray-600 focus:outline-none focus:border-none font-normal flex items-center text-sm h-5 w-5 border-gray-300 rounded border" id="state" name="state" @if(old('state', $task->state)) checked @endif>
                      <span class="ml-2 text-sm text-gray-600">Tâche accomplie</span>
                  </label>
                  <div id="words">
                  </div>
              </div>

              <div class="flex items-center justify-end mt-4">
                  <x-jet-button class="ml-4 bg-black">
                      Envoyer
                  </x-jet-button>
              </div>
          </form>
          <div class="absolute -right-10 -bottom-5">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 -rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
          </div>
          <div class="absolute -left-10 -top-5">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 -rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>