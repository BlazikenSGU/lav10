@extends('admin.admin')

@section('main')
    <h1>Danh muc</h1>
    <a href="{{ route('category.create') }}" class="btn btn-success mb-2">Them</a>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($cates as $cate)
                <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{ $cate->status == 0 ? 'Tam an' : 'Hien thi' }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $cate->id) }}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{ route('category.edit', $cate->id) }}" class="btn btn-primary">Sua</a>
                            <button type="submit" class="btn btn-danger">Xoa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $cates->links() }}
@endsection
