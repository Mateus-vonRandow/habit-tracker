<h1>
    Welcome to the Habit Tracker
</h1>

<p>
    Olá, {{ $name }}! Bem-vindo ao Habit Tracker, onde você pode acompanhar seus hábitos diários e alcançar seus objetivos de forma mais eficiente.
</p>
<p>
    Seus hábitos atuais são:
</p>
<ul>
    @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>