@extends('layouts.main')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Mã SP</th>   
            <th>Tên SP</th>   
            <th>Ảnh</th>
            <th>Giá</th>
            <th>
                <a href="{{getClientUrl('add-product')}}" class="btn btn-sm btn-danger">Thêm Mới</a>
            </th>  
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                <img src="{{getClientUrl($item->image)}}" width="100">
            </td>
            <td>{{$item->price}}</td>
            <td>
                <a href="{{getClientUrl('delete-product', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                <a href="{{getClientUrl('edit-product', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Sửa</a>
           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
