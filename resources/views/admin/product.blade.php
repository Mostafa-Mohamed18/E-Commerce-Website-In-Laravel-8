<!DOCTYPE html>
<html lang="en">

<head>
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
        color:wheat ;
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
                <h1 class="title">Add Product</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input">
                        <label >Product Title</label>
                        <input type="text" name="title" placeholder="Type A Product Title" required="">
                    </div>
                    <div class="input">
                        <label >Price</label>
                        <input type="number" name="price" placeholder="Product Price" required="">
                    </div>
                    <div class="input">
                        <label >Description</label>
                        <input type="text" name="desc" placeholder="Product Description" required="">
                    </div>
                    <div class="input">
                        <label >Quantity</label>
                        <input type="number" name="quantity" placeholder="Quantity" required="">
                    </div>
                    <div style="padding: 25px">
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
