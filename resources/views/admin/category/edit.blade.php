@extends('admin.admin')

@section('main')
    <h1>Sua Danh muc</h1>

    <form action="{{ route('category.update', $category->id) }}" method="POST" role="form">
        @csrf 
        @method('PUT')
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input value="{{ $category->name }}" class="form-control" name="name" type="text">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <select class="custom-select" name="status">
                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>On</option>
                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>off</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
