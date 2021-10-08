<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body>
        <!-- Include -->
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper" style="padding-bottom: 30px">
            <div class="container" style="text-align: center;">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <table style="margin-left: 8%; margin-top:2%">
                    <tr style="background-color:rgba(53, 59, 72,0.4);">
                        <td style="padding: 30px;">Title</td>
                        <td style="padding: 30px;">Description</td>
                        <td style="padding: 30px;">Quantity</td>
                        <td style="padding: 30px;">Price</td>
                        <td style="padding: 30px;">Image</td>
                        <td style="padding: 30px;">Update</td>
                        <td style="padding: 30px;">Delete</td>
                    </tr>
                    @foreach ($data as $product)
                        <tr style="background-color:rgba(53, 59, 72,0.2); align-items:center;">
                            <td style="padding: 20px;">{{ $product->title }}</td>
                            <td style="padding: 20px;">{{ $product->description }}</td>
                            <td style="padding: 20px;">{{ $product->quantity}}</td>
                            <td style="padding: 20px;">{{ $product->price }}</td>
                            <td style="padding: 20px;"><img height="100" width="100" src="/productimage/{{ $product->image }}"></td>
                            <td><a class="btn btn-primary" href="{{ url('updateview',$product->id) }}">Updata</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{ url('deleteproduct',$product->id) }}">Delete</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        @include('admin.js')
</body>

</html>
