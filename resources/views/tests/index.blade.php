<h1>Tests</h1>

<ul>
	@foreach($tests as $test)
		<li>
			@include('tests._item', compact('test'))
		</li>
	@endforeach
</ul>