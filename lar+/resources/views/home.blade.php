<h1>
    Welcome to the Home Page
</h1>
<p>
    Olá, {{ $name }}! Seja bem-vindo ao nosso site.
</p>
<p>
    Os teus habitos são:
</p>
<ul>
    @foreach($habits as $items)
        <li>
            {{ $items }}
        </li>
    @endforeach
</ul>

@auth
    <p>Tu estás logado</p>
@endauth

@guest
    <p>Tu não estás logado</p>
@endguest