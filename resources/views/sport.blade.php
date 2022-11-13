@extends('template')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="h1">Sport Car List</h1>

                
            <div class="d-flex">

                @foreach($data as $d)
                @if($d->type == 'Sport')
                <div class="card" style="width: 18rem;">
                    <img src={{$d->image_path}} class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$d->name}}</h5>
                      <p class="card-text">{{$d->price}}</p>

                    <span class="badge bg-danger">{{$d->type}}</span> 

                    
                    </div>
                  </div>  
                  @endif
                 @endforeach
                 

            </div>
            
        </div>
    </div>

@endsection