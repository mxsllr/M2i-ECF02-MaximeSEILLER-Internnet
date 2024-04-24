
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Offres') }}
    </h2>
</x-slot>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
<div class="p-6 text-gray-900">

    @foreach($offres as $offre)

        {{$offre->domaine}}
        {{$offre->titre}}
        {{$offre->localisation}}
        <a
            href="{{ route('offre.show', ['id'=>$offre->id]) }}"
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
        >Details
        </a>
        <br/>
    @endforeach

</div>
        </div>
    </div>
</div>


