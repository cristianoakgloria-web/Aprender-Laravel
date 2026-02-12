<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-3xl mb-4">Cadastrar-se</h1>
            <p>Preencha os dados para criar sua conta</p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf
                
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name" class="flex flex-col gap-2 mb-4">Nome</label>
                    <input type="text" name="name" placeholder="Seu nome" class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm"> {{$message}} </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email" class="flex flex-col gap-2 mb-4">Email</label>
                    <input type="email" name="email" placeholder="your@email.com" class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm"> {{$message}} </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password" class="flex flex-col gap-2 mb-4">Password</label>
                    <input type="password" name="password" placeholder="*********" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm"> {{$message}} </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation" class="flex flex-col gap-2 mb-4">Repete a Password</label>
                    <input type="password" name="password_confirmation" placeholder="*********" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm"> {{$message}} </p>
                    @enderror
                </div>                
                <button  type="submit" class="bg-white border-2 p-2">Cadastrar-se</button>
            </form>
            <p class="text-center mt-4">Já tem conta? <a href="{{ route('login.login') }}" class="text-blue-500 underline hover:opacity-50 transition">Faça Login</a></p>
        </section>
    </main>
</x-layout>