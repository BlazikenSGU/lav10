@extends('admin.admin')

@section('main')
    <h1>Them Danh muc</h1>

    <form action="{{ route('category.store') }}" method="POST" role="form">
        @csrf
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control" name="name" type="text">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <select class="custom-select" name="status">
                    <option value="1" selected>On</option>
                    <option value="0">off</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
