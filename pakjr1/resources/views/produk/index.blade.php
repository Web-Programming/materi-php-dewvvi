@extends('app.master')

@section('title', 'Produk Index')

@section('sidebar')
    @parent
@section('submenu-produk')
@endsection
@endsection

@section('content')
<div class = "container-fluid">
    <h1 class = "mb-4"> {($title)} </h1>

    <div class = "table-responsive">
        <table class = "table table-striped table-bordered table-hover">
            <thead class = "table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama produk</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>Rp {{ number_format($item[$i]['price'], 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ url('/produk/' . $item[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/produk/' . $item[$i]['id'] . '/edit') }}"
                                class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
