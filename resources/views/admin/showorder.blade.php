<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body>
        <!-- Include -->
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="text-align: center;">
                <table style="margin-left: 1%; margin-top:2%">
                    <tr style="background-color:rgba(53, 59, 72,0.4);">
                        <td style="padding: 30px;">
                            Customer Name
                        </td>
                        <td style="padding: 30px;">
                            Phone
                        </td>
                        <td style="padding: 30px;">
                            Address
                        </td>
                        <td style="padding: 30px;">
                            Product Title
                        </td >
                        <td style="padding: 30px;">
                            Price
                        </td>
                        <td style="padding: 30px;">
                            Quantity
                        </td>
                        <td style="padding: 30px;">
                            Status
                        </td>
                        <td style="padding: 30px;">
                            Action
                        </td>
                    </tr>
                    @foreach ($order as $orders)
                        <tr style="background-color:rgba(53, 59, 72,0.2); align-items:center;">
                            <td style="padding: 20px;">{{ $orders->name }}</td>
                            <td style="padding: 20px;">{{ $orders->phone }}</td>
                            <td style="padding: 20px;">{{ $orders->address }}</td>
                            <td style="padding: 20px;">{{ $orders->product_name }}</td>
                            <td style="padding: 20px;">{{ $orders->price }}</td>
                            <td style="padding: 20px;">{{ $orders->quantity }}</td>
                            <td style="padding: 20px;">{{ $orders->status }}</td>
                            <td style="padding: 20px;">
                                <a class="btn btn-secondary" style="padding: 10px;" href="{{ url('updatestatus') ,$orders->id}}">Delivered</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @include('admin.js')
</body>

</html>
