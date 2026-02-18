<x-layout>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>
        <p>
            Bem-vindo/a, {{ auth()->user()->name }}!
        </p>

        <div>
            <h2>Seus hábitos:</h2>
            <ul>
                @foreach ($habits as $habit)
                    <li><p>{{ $habit->name }}</p></li>
                @endforeach
            </ul>
        </div>
    </main>
</x-layout>