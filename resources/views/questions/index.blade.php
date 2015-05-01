<h1>Preguntas</h1>
<ul>
	@foreach($questions as $question)
		<li>
			@include('questions._item', compact('question'))
		</li>
	@endforeach
</ul>