<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del post', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    @error('categorty_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas:</p>
        @foreach ($tags as $tag)
            <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
            </label>
        @endforeach
        @error('tags')
        <small class="text-danger">{{$message}}</small>
        @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado:</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrado
    </label>
    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    @error('status')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="row mb-3">
    <div class="col-md-6">
        @isset ($post->image)
        <img id="picture" class="img-fluid" src="{{Storage::url($post->image->url)}}" alt="">
        @else
            <img id="picture" class="img-fluid" src="https://cdn.pixabay.com/photo/2021/01/24/20/47/tabby-5946499__340.jpg" alt="">
        @endisset
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
        </div>
        @error('file')
        <small class="text-danger">{{$message}}</small>
        @enderror
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptas sunt deserunt numquam sit natus nemo quasi, quaerat maxime eaque delectus, unde porro molestiae magnam, itaque repellendus vero et voluptatum!</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control','rows'=>'3']) !!}
    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>