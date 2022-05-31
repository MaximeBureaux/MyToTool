<x-app-layout id="swup" class="transition-fade">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Création d'une tâche
        </h2>
    </x-slot>    

    <div class="py-12 overflow-hidden">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg relative">
          <x-jet-validation-errors class="mb-4" />
          <form method="POST" action="{{ route('tasks.store') }}">
              @csrf

              <div class="mt-4">
                  <x-jet-label value="Titre" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=title name="title" :value="old('title')" placeholder="Titre de la tâche" required autofocus />
              </div>

              <div class="mt-4" x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
                  <x-jet-label value="Détail" />
                  <textarea class="form-input rounded-md shadow-sm mt-1" style="width: 100%" id="detail" name="detail" maxlength="500" placeholder="Détail de la tâche" x-ref="countme" x-on:keyup="count = $refs.countme.value.length">{{ old('detail') }}</textarea>
                  <span x-html="count" class="text-xs opacity-40"></span> <span class="text-xs opacity-40">/</span><span class="text-xs opacity-40" x-html="$refs.countme.maxLength"></span>
              </div>

              <div class="flex items-center justify-end mt-4">
                  <x-jet-button class="ml-4">
                      Envoyer
                  </x-jet-button>
              </div>
          </form>
          <div class="absolute -right-10 -top-5">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
          </div>
          <div class="absolute -bottom-3 -left-3">
            <div class="relative w-fit">
                <div class="gradiant-thumbtack-dot w-4 h-[3px] -rotate-45 absolute -right-1 top-2"></div>
                  <div class="gradiant-thumbtack-base w-10 h-10 rounded-full relative">
                    <div class="bg-white w-[2px] h-[7px] rounded-lg absolute top-2 right-2 -rotate-[35deg] opacity-70 z-10"></div>
                    <div class="gradiant-thumbtack-middle w-6 h-6 rounded-full absolute top-3 right-3">
                        <div class="gradiant-thumbtack-top w-7 h-7 rounded-full absolute top-2 right-2">
                            <div class="bg-white w-[2px] h-[4px] rounded-lg absolute top-2 right-2 -rotate-[35deg] opacity-70"></div>
                        </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>