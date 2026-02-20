<x-layout>
    <main class="py-10">
        <h1 class="font-bold text-4xl text-center">
            Dashboard
        </h1>

        <a href="{{route('habit.create')}}" class="p-2 border-2 bg-white font-bold block hover:bg-gray-100">Criar um novo hábito</a>

        <div class="flex">
        @session('success')
            <p class="bg-green-100 border border-green-500 px-2 block mt-4 max-w-[150px]">{{ session('success') }}</p>
        @endsession
        </div>

        <div>
            <p class="mt-4">
                Bem-vindo/a, {{ auth()->user()->name }}!
            </p>

            <h2 class="text-xl mt-4">Seus hábitos:</h2>
            <ul classa="flex flex-col gap-2">
                @forelse ($habits as $habit)
                    <li class="pl-4">
                        <div class="flex gap-2 items-center">
                            <p class="font-bold text-xl">- {{ $habit->name }}</p>
                            <p>[{{ $habit->habitLogs->count() }}]</p>

                            <form action="{{ route('habit.destroy', $habit) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white p-2 hover:opacity-50">
                                    <x-icons.trash />
                                </button>
                            </form> 
                        </div>
                    </li>
                @empty
                    <li class="pl-4"><p>Nenhum hábito criado.</p></li>

                    <a href="{{ route('habit.create') }}" class="bg-white p-2 border-2">Criar hábito</a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>