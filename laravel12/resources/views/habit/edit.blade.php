<x-layout>
    <h1>
        Editar Hábito
    </h1>
    <main class='py-10'>
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">

            <form action="{{route('habit.update', $habit->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-2">
                    <label for="name">Nome do hábito:</label>
                    <input type="text" name="name" placeholder="{{$habit->name}}" class="bg-white border-2 p-2 rounded">
                    
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="bg-white border-2 p-2">Editar Hábito</button>
                </div>

            </form>
        </section>
    </main>
</x-layout>
