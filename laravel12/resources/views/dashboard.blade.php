<x-layout>
    <main class="py-100">
        <h1>
            Dashboard
        </h1>
        <p>
            Bem-vindo/a, {{ auth()->user()->name }}!
        </p>
    </main>
</x-layout>