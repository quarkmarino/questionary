{{-- $question->instructions --}}

{{ $question->text }}


{!! Form::model($reply) !!}
	@foreach($question->answers as $answer)
		@include('answers._item', compact('anwser'))
	@endforeach
{!! Form::close(); !!}