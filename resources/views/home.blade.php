@extends('layouts.app')
@section('content')
<div class="container">
     <div class="container">

          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif
          
          <h1  class="post" >Пост</h1>
          
          {{-- <form class="form-horizontal" role="form" action="{{ route('add') }}" method="POST"> --}}
               {!! Form::open(['url'=>route('add'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

               <div class="form-group">
                    {!! Form::label('title','Заголовок', ['class'=>'col-xs-2 control-label']) !!}
                    <div class="col-sm-4">
                         {!! Form::text('title', old('name'), ['class'=>'form-control inputstl', 'placeholder'=>'Введите текст']) !!}
                    </div>
               </div>
               
               {{-- <div class="form-group">
                    
                    <label for="name1" class="col-sm-2 control-label">Заголовок</label>
                    
                    <div class="col-sm-4">
                         
                         <input type="email" class="form-control inputstl" id="name1" >
                         
                    </div>


                    
               </div> --}}
               <div class="form-group">
                    {!! Form::label('content','Контент', ['class'=>'col-xs-2 control-label']) !!}
                    <div class="col-sm-5">
                         {!! Form::textarea('content', old('name'), [ 'class'=>'form-control inputstl', 'rows'=>'5']) !!}
                    </div>
               </div>
               
               {{-- <div class="form-group">
                    
                    <label for="Email1msg" class="col-sm-2 control-label">Контент</label>
                    
                    <div class="col-sm-5">
                         
                         <textarea class="form-control inputstl" rows="5"></textarea>
                         
                    </div>
                    
               </div> --}}
               <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                         {!! Form::button('Опубликовать', ['class'=>'btn btn-lg btn-block btn-danger', 'type'=>'submit']) !!}
                    </div>
               </div>
               
               {{-- <div class="form-group">
                    
                    <div class="col-sm-offset-2 col-sm-4">
                         
                         <button type="submit" class="btn btn-lg btn-block btn-danger">Опубликовать</button>
                         
                    </div>
                    
               </div> --}}
               
          {{-- </form> --}}
          {!! Form::close() !!}
          
     </div>
</div>
@endsection