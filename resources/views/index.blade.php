<!-- /folder/template.blade.php (kalo ada sub folder) -->
@extends('template')

{{-- Untuk akses yield yang ingin diganti --}}
@section('tittle', 'RH AUTO')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="h1">Car List</h1>

                
            <div class="d-flex">

                @foreach($data as $d)
                <div class="card" style="width: 18rem;">
                    <img src={{$d->image_path}} class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$d->name}}</h5>
                      <p class="card-text">{{$d->price}}</p>


                    @if($d->type == 'Sport')
                        <span class="badge bg-danger">{{$d->type}}</span> 
                    @elseif($d->type == 'Suv')
                      <span class="badge bg-success">{{$d->type}}</span>
                    @else
                    <span class="badge bg-primary">{{$d->type}}</span>
                    @endif

                    </div>
                  </div>  
                 @endforeach

            </div>
            
        </div>
    </div>

@endsection