@extends('template.base')

@section('title', $title)

@section('content')
<div class="table col-8 col-s-12">
    <div class="header-table">
        <h3>Category</h3>
    </div>
    <div class="table-overflow shadow">
        <table class="box-table">
            <tr class="tr-head">
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
            <tr class="tr-body">
                <td>{{$num}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="" class="edit-icon">
                        <img src="{{ asset('styles/img/icon/48px/edit-2.svg') }}" alt="">
                    </a>
                    <a href="" class="edit-icon">
                        <img src="{{ asset('styles/img/icon/48px/trash-2.svg') }}" alt="">
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="add-new col-4 col-s-12">
    <div class="header-add-new">
        <h3>Add New Category</h3>
    </div>
    <form>
        <div class="input">
            <input type="text" class="shadow" placeholder="Type name here ..">
        </div>
        <div class="input">
            <input type="text" class="shadow" placeholder="Type description here ..">
        </div>
    </form>
</div>

@endsection