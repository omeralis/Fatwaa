@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="d-flex justify-content-between mt-4 pt-4">
        <h5>إضافة فتوي</h5>
    </div>
    <form action="{{ route('fatwa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <input type="text" class="form-control mb-2" id="inputPhone" name="fatwa_name" placeholder="name" required>
            <input type="text" class="form-control mb-2" id="inputPhone" name="murabaha_formula" placeholder="murabaha_formula" required>
            <input type="text" class="form-control mb-2" id="inputPhone" name="side" placeholder="side" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>

</div>
@endsection
