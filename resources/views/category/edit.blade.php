@extends('template.base')

@section('title', $title)

@section('main-content')
<div class="table col-xm-12 col-sm-12 col-md-12 col-lg-8">
    <div class="header">
        <h3>Category</h3>
    </div>
    <div class="table-overflow shadow" style="overflow-x: auto;">
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Custom</th>
            </tr>
            @php
            $num=0;
            @endphp

            @foreach($category as $category)
            @php
            $num++;
            @endphp
            <tr>
                <td>{{$num}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <form action="/category/{{$category->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <a href="{{ url('category', $category->id) }}/edit">
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
<div class="form col-xm-12 col-sm-12 col-md-12 col-lg-4">
    <div class="header">
        <h3>Edit Category</h3>
    </div>
    <form action="category/{{$editcategory->id}}" method="POST">
        @csrf
        @method("PUT")
        <div class="input shadow">
            <input type="text" name="name" value="{{$editcategory->name}}" placeholder=" Type name here ..">
        </div>
        <div class="input shadow">
            <input type="text" name="description" value="{{$editcategory->description}}" placeholder="Type description here ..">
        </div>
        <div class="button-control">
            <button type="submit" class="button shadow">Update</button>
        </div>
    </form>
</div>
@endsection