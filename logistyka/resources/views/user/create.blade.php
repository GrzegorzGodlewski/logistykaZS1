@extends('master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            	{!! Form::open(['url' => 'user', 'class'=>'form-horizontal']) !!}
            		<div class="form-group">
                        <div  class="col-md-4 control-label">
                        {!!Form::label('name', 'Imię: ')!!}
                    	</div>
                        <div class="col-md-6">
                            {!!Form::text('name', null,['class'=>'form-controll'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div  class="col-md-4 control-label">
                        {!!Form::label('email', 'E-mail: ')!!}
                    	</div>
                        <div class="col-md-6">
                            {!!Form::text('email', 'example@gmail.com')!!}
                        </div>
                    </div>

                     <div class="form-group">
                        <div  class="col-md-4 control-label">
                        {!!Form::label('password', 'Hasło: ')!!}
                    	</div>
                        <div class="col-md-6">
                            {!!Form::password('password', ['class' => 'awesome'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        
                        <div class="col-md-6 col-md-offset-4">
                            {!!Form::submit('Dodaj użytkownika', ['class' => 'btn btn-primary'])!!}
                        </div>
                    </div>
                    {!! Form::close() !!}

            	
            </div>
        </div>
    </div>
</div>
@stop