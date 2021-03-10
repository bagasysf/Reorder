@extends('template.base')

@section('title', $title)

@section('main-content')
<div class="table col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-7">
    <div class="header">
        <h3>{{$title}}</h3>
    </div>
    <div class="table-overflow shadow" style="overflow-x: auto;">
        <table>
            <tr>
                <th>No</th>
                <th>Category</th>
                <th>Item Number</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            @php
            $num=0;
            @endphp

            @foreach($product as $product)
            @php
            $num++;
            @endphp
            <tr>
                <td>{{$num}}</td>
                <td>{{$product->$category->name}}</td>
                <td>{{$product->item_number}}</td>
                <td>{{$product->name}}</td>
                <td>{{$category->price}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <form action="/product/{{$product->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <a href="{{ url('product', $product->id) }}/edit">
                            <img src="{{ asset('styles/img/icon/48px/edit-2.svg') }}" alt="">
                        </a>
                        <button type="submit">
                            <img src="{{ asset('styles/img/icon/48px/trash-2.svg') }}" alt="">
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="form col-xm-12 col-sm-12 col-md-12 col-lg-4 col-xl-5">
    <div class="header">
        <h3>Add New Product</h3>
    </div>
    <form action="/product" method="POST">
        @csrf
        <div class="input select shadow">
            <select name="category_id" id="">
                <option value="">Please Select</option>
                @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="input shadow">
            <input type="text" name="description" placeholder="Type description here ..">
        </div>
        <div class="button-control">
            <button type="submit" class="button shadow">Submit</button>
        </div>
    </form>
</div>
@endsection