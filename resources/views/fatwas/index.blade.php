@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="d-flex justify-content-between mt-4 pt-4">
        <h5>الفتاوي</h5>
            <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add Mune
        </button> --}}
    </div>
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>الفتوي</th>
                <th>صيغة المرابحة</th>
                <th>الجهة</th>
                <th>التاريخ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fatwa as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->fatwa_name}}</td>
                <td>{{$data->murabaha_formula}}</td>
                <td>{{$data->side}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection