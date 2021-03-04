@extends('template.base')

@section('title', $title)

@section('content')
<div class="row mt-5">
    <div class="col-2">
        <button class="btn btn-transparent btn-lg shadow fw-bold fs-6" style="width: auto; height: 48px;">Category</button>
    </div>
    <div class="col-4 ms-4">
        <div class="input-group" style="width: 100%; height: 48px;">
            <input type="text" class="form-control rounded-pill ps-4 text-secondary" style="font-size: 14px;" placeholder="Search something here .." aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="col-1 d-flex justify-content-end" style="width: auto;">
        <button class="btn btn-transparent shadow rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px;"><img src="{{ asset('styles/img/icon/search.svg') }}" alt=""></button>
    </div>
    <div class="col-5">
        <button class="btn btn-transparent btn-lg shadow ms-2 fw-bold fs-6 text-primary" style="width: auto; height: 48px;">Edit Category</button>
    </div>
</div>
<div class="row">
    <div class="col-7 mt-4">
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
                                <!-- <a href="category/{{$category->id}}/edit" class="text-decoration-none">
                                    <img src="{{ asset('styles/img/icon/edit-2.svg') }}" class="pe-3" alt="">
                                </a> -->
                                <a href="{{ url('category', $category->id) }}/edit " class="text-decoration-none">
                                    <img src="{{ asset('styles/img/icon/edit-2.svg') }}" class="pe-3" alt="">
                                </a>
                                <button type="submit" class="btn btn-transparent p-0 mb-1">
                                    <img src="{{ asset('styles/img/icon/trash-2.svg') }}" alt="">
                                </button>
                            </form>
                            <!-- <a href="" class="text-decoration-none">
                                <img src="{{ asset('styles/img/icon/trash-2.svg') }}" alt="">
                            </a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-5 mt-4">
        <form action="/category/{{$editcategory->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-4 fs-6">
                <input type="text" value="{{$editcategory->name}}" name="name" class="fw-normal form-control ps-3 text-primary shadow border-0" style="font-size: 14px; width: 100%; height: 48px;" id="exampleFormControlInput1" placeholder="Type name here ..">
            </div>
            <div class="mb-4">
                <textarea name="description" class="form-control ps-3 pt-3 text-primary shadow fw-normal border-0" style="font-size: 14px;" id="description" rows="3">{{$editcategory->description}}
                </textarea>
            </div>
            <div class="d-flex justify-content-end" style="height: 48px;">
                <button type="submit" class="btn btn-primary rounded fw-bold shadow" style="width: 130px;">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection