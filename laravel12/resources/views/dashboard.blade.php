<x-layout>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>
        <p>
            Bem-vindo/a, {{ auth()->user()->name }}!
        </p>

        <div>
            <h2 class="text-xl mt-4">Seus hábitos:</h2>
            <ul classa="flex flex-col gap-2">
                @forelse ($habits as $habit)
                    <li class="pl-4">
                        <div class="flex gap-2 items-center">
                            <p class="font-bold text-xl">- {{ $habit->name }}</p>
                            <p>[{{ $habit->habitLogs->count() }}]</p>
                        </div>
                    </li>
                @empty
                    <li class="pl-4"><p>Nenhum hábito criado.</p></li>

                    <a href="/habito/criar" class="bg-white p-2 border-2">Criar hábito</a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>