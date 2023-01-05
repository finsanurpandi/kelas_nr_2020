@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <h1>{{ $lecture->nama }}</h1>
                    @if($students->isEmpty())
                        Tidak ada ada.
                    @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>KELAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->npm }}</td>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->class }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
