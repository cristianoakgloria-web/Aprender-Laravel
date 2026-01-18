<p>
    Olá, {{ $name }}!
</p>
<p>
    Seus hábitos são:
    <ul>
        @foreach($habits as $habit)
            <li>{{ $habit }}</li>
        @endforeach
    </ul>
</p>

@auth
    <p>Tu estás logado!</p>
@endauth

@guest
    <p>Tu não estás logado!</p>
@endguest