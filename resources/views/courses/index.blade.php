<h3>Liste des cours de Mr {{ $teacher }}</h3>

@forelse ($courses as $course)
    <article>
        <h2> {{ $course['title'] }} </h2>
    </article>
@empty
    <h6>Pas de cours!</h6>
@endforelse


