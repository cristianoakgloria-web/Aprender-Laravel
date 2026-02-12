<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-3xl mb-4">Faça Login</h1>
            <p>Insira os teus dados para acessar</p>

            <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col">
                @csrf
                
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
                <button  type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>
            <p class="text-center mt-4">Não tem conta? <a href="{{ route('site.register') }}" class="text-blue-500 underline hover:opacity-50 transition">Cadastre-se</a></p>
        </section>
    </main>
</x-layout>