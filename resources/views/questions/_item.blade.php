{{-- $question->instructions --}}

{{ $question->text }}

{!! Form::model($reply, ['route' => ['questions.replies.store', $question->id ] ]) !!}
	@foreach($question->answers as $answer)
		@include('answers._item', compact('anwser'))
	@endforeach
	
	{!! Form::submit('responder') !!}
{!! Form::close(); !!}