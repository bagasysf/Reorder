@extends('template.base')

@section('title', $title)

@section('main-content')
<div class="row">
    <div class="col-7">
        <div class="row pt-5 ps-5">
            <div class="col-5">
                <button class="btn btn-transparent btn-lg shadow fw-bold fs-6" style="width: auto; height: 48px;">Category</button>
            </div>
            <div class="col-7">
                <div class="input-group" style="height: 48px;">
                    <input type="text" class="form-control rounded-pill ps-4" style="font-size: 14px;" placeholder="Search something here .." aria-label="Username" aria-describedby="basic-addon1">
                    <button class="btn btn-transparent shadow rounded-circle ms-4" style="width: 48px; height: 48px;"><img src="{{ asset('styles/img/icon/search.svg') }}" alt=""></button>
                </div>
            </div>
        </div>
        <div class="row ps-5">
            <div class="col mt-4">
                <div class="shadow px-3 py-1 rounded" style="width: 100%;">
                    <table class="table table-borderless lh-lg">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Desription</th>
                                <th>Customize</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                        <a href="{{ url('category', $category->id) }}/edit " class="text-decoration-none">
                                            <img src="{{ asset('styles/img/icon/edit-2.svg') }}" class="pe-3" alt="">
                                        </a>
                                        <button type="submit" class="btn btn-transparent p-0 mb-1">
                                            <img src="{{ asset('styles/img/icon/trash-2.svg') }}" alt="">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="row ps-5 pt-5">
            <div class="col-5">
                <button class="btn btn-transparent btn-lg shadow fw-bold fs-6" style="width: auto; height: 48px;">Add New Category</button>
            </div>
        </div>
        <div class="row ps-5 pe-5">
            <div class="col mt-4">
                <form action="/category/{{$editcategory->id}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-4 fs-6">
                        <input type="text" value="{{$editcategory->name}}" name="name" class="form-control ps-3 shadow border-0" style="font-size: 14px; width: 100%; height: 48px;" id="exampleFormControlInput1" placeholder="Type name here ..">
                    </div>
                    <div class="mb-4">
                        <textarea name="description" class="form-control ps-3 pt-3 shadow border-0" style="font-size: 14px;" placeholder="Type description here .." id="exampleFormControlTextarea1" rows="3">{{$editcategory->description}}</textarea>
                    </div>
                    <div class="d-flex justify-content-end" style="height: 48px;">
                        <button type="submit" class="btn btn-secondary rounded fw-bold shadow" style="width: 130px;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-5">
    </div>
</div>

@endsection