@extends('master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            		
            		<div class="form-group">
                        <label for="" class="col-md-4 control-label">Tytuł</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" />
                        </div>
                    </div>

            	</form>
            </div>
        </div>
    </div>
</div>
@stop










{!! Form::open(['url' => 'foo/bar']) !!}
    {!!Form::label('email', 'E-Mail Address: ')!!}
	{!!Form::text('email', 'example@gmail.com')!!}<br>
	{!!Form::label('password', 'Password: ')!!}
	{!!Form::password('password', ['class' => 'awesome'])!!}


{!! Form::close() !!}