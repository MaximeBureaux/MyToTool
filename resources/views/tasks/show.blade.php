<x-app-layout id="swup" class="transition-fade">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fiche d'une tâche
        </h2>
    </x-slot>    

    <div class="py-12 overflow-x-hidden min-h-[80vh]">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
        <div class="w-full flex flex-col gap-5 sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg relative">
          <div>
            <p class="text-2xl">Titre</p>
            <p>{{ $task->title }}</p>
          </div>
          <div>
            <p class="text-2xl">Détail</p>
            <p>{{ $task->detail }}</p>
          </div>
          <div>
            <p class="text-2xl">Etat</p>
            <p>
              @if($task->state)
                La tâche a été accomplie !
              @else
                La tâche n'a pas encore été accomplie.
              @endif
            </p>
          </div>
          <div>
            <p class="text-2xl">Date de création</p>
            <p>{{ $task->created_at->format('d/m/Y') }}</p>
          </div>
          @if($task->created_at != $task->updated_at)
          <div>
              <p class="text-2xl">Dernière mise à jour</p>
              <p>{{ $task->updated_at->format('d/m/Y') }}</p>
          </div>
          @endif
          <div class="absolute -right-10 -top-5">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
          </div>
          <div class="absolute -left-10 -bottom-10">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>