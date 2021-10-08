<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
@include('admin.css')
<style>
    .title{
        color:wheat ;
        padding-top: 25px;
        font-size:25px;
        font-weight: bold;
    }
    .input{
        padding: 15px;
    }
    .input label{
        font-weight: bold;
        color:rgb(177, 157, 120) ;
        display:inline-block;
        width: 200px;
    }
    .input input{
        border-radius: 25px;
        color: black;
        background-color: #c8d6e5;
    }
</style>
</head>

<body>
        <!-- Include -->
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="text-align: center;">
                <h1 class="title">Update Product</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="{{ url('/updateproduct') , $data->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input">
                        <label >Product Title</label>
                        <input type="text" name="title" value="{{ $data->title }}" required="">
                    </div>
                    <div class="input">
                        <label >Price</label>
                        <input type="number" name="price" value="{{ $data->price }}" required="">
                    </div>
                    <div class="input">
                        <label >Description</label>
                        <input type="text" name="desc" value="{{ $data->description }}" required="">
                    </div>
                    <div class="input">
                        <label >Quantity</label>
                        <input type="number" name="quantity" value="{{ $data->quantity }}" required="">
                    </div>
                    <div class="input">
                        <label >Old Image</label>
                        <img height="100" width="100" src="/productimage/{{ $data->image }}" >
                    </div>
                    <div class="input" style="padding: 25px">
                        <label >Change The Image</label>
                        <input type="file" name="file">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        @include('admin.js')
</body>

</html>
