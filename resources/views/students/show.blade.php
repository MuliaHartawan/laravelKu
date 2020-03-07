@extends('layout.main')

@section('title', 'Data Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Student</h1>

              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>


                    <button class="btn btn-primary" type="submit">Edit</button>
                    <button class="btn btn-danger" type="submit">Delete</button>  
                    <a href="/students" class="card-link">Kembali</a>                
                </div>
              </div>
            </div>

        </div>
    </div>
@endsection
