@extends('admin.main_admin')

@section('admin_container')
@php
    use App\Models\User;
    use App\Models\product;
    use App\Models\payment;
@endphp

@if (count($orders) === 0)
    <div class="container">
        <h2 style="padding-top: 5%">Product Order Information</h2>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Deliver Date</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"> Aksi</th>
            </tr>
            </thead>
            <tbody>
    {{--        item1--}}
            <tr>
                <th scope="row">-</th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td></td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </div>
@else
    <div class="container">
        <h2 style="padding-top: 5%">Product Order Information</h2>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Deliver Date</th>
                <th scope="col">Status</th>
                <th scope="col"> Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $index => $order)
                    <tr>
                        <th scope="row">{{ $order->order_id }}</th>
                        @php
                            $users = User::where('user_id', $order->user_id)->first();
                        @endphp
                        <td>{{ $users->user_fullname }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{  $order->order_status  }}</td>
                        <td>
                            <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#Modal{{ $order->order_id }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @foreach ($orders as $index => $order)
        @php
            $users = User::where('user_id', $order->user_id)->first();
            $products = product::where('product_id', $order->product_id)->first();
            $payments = payment::where('order_id', $order->order_id)->first();
        @endphp
        <div class="modal fade" id="Modal{{ $order->order_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="container modal-title">
                            <div class="row">
                                <div class="col">
                                    <h5>Order Information</h5>
                                </div>
                                <div class="col">
                                    <h5>[ {{ $order->order_id }} ]</h5>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('UpdateOrderAdmin') }}" enctype="multipart/form-data" method="POST" style="margin: 35px;">
                        @csrf
                        <input type="hidden" value="{{ $order->order_id }}" name="order_id">
                    <div class="modal-body">
                        <h5>Customer Info</h5>
                        <div class="container">
                            <p>
                                Nama Customer <br>
                                <b>{{ $users->user_fullname }}</b>
                            </p>
                            <p>
                                No HP <br>
                                <b>{{ $users->phone }}</b>
                            </p>
                            <p>
                                Alamat<br>
                                <b>{{ $users->address }}</b>
                            </p>
                        </div>
                        <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Jenis Product</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Harga</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <b>{{ $products->product_name }}</b><br>
                                        [26cm x 26cm, White] <br>
                                        @if ($order->design_user == "none")
                                            no design
                                        @else
                                            <a href="{{ URL::to('/StorageImage/' . $order->design_user )}}">design user</a>
                                        @endif
                                    </p>
                                </td>
                                <td>1</td>
                                <td>Rp {{ $products->harga }}</td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <td></td>
                                <td>Rp {{ $products->harga }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5>Payment Info</h5>
                        <div class="container">
                            <p>
                                Jenis Pembayaran <br>
                                <b>Transfer Bank</b>
                            </p>
                            <p>
                                No Referensi<br>
                                @if ($order->order_status == "Paid")
                                    <b>{{ $payments->payment_id }}</b>
                                @elseif ($order->order_status == "Order Received")
                                    <b>{{ $payments->payment_id }}</b>
                                @elseif ($order->order_status == "On Packing")
                                    <b>{{ $payments->payment_id }}</b>
                                @elseif ($order->order_status == "Delivered")
                                    <b>{{ $payments->payment_id }}</b>
                                @else
                                    <b> - </b>
                                @endif
                                
                            </p>
                            <p>
                                Status Pembayaran<br>
                                <ul class="list-group">
                                    <li name="payment_status" id="payment_status" class="list-group-item d-flex justify-content-between align-items-center">
                                        
                                        @if ($order->order_status == "Paid")
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="paid">Paid</option>
                                            </select>
                                            <span class="badge"><a href="{{ URL::to('/PaymentImage/' . $payments->payment_verification )}}">bukti pembayaran</a></span>
                                        @elseif ($order->order_status == "Order Received")
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="paid">Paid</option>
                                            </select>
                                            <span class="badge"><a href="{{ URL::to('/PaymentImage/' . $payments->payment_verification )}}">bukti pembayaran</a></span>
                                        @elseif ($order->order_status == "On Packing")
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="paid">Paid</option>
                                            </select>
                                            <span class="badge"><a href="{{ URL::to('/PaymentImage/' . $payments->payment_verification )}}">bukti pembayaran</a></span>
                                        @elseif ($order->order_status == "Delivered")
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="paid">Paid</option>
                                            </select>
                                            <span class="badge"><a href="{{ URL::to('/PaymentImage/' . $payments->payment_verification )}}">bukti pembayaran</a></span>
                                        @elseif ($order->order_status == "unpaid")
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="unpaid">Unpaid</option>
                                            </select>
                                        @else
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected>Have a problem</option>
                                            </select>
                                        @endif
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <hr>
                        @if ($order->order_status == "unpaid")
                            <h5>Shipping Info</h5>
                            <div class="container">
                                <p>
                                    Jasa Pengiriman <br>
                                    -
                                </p>
                                <p>
                                    No Resi<br>
                                    -
                                </p>
                                <p>
                                    Delivery Date<br>
                                    -
                                </p>
                                <p>
                                    Shipping Status<br>
                                <ul class="list-group">
                                    <p><b> - </b></p>
                                </ul>
                                </p>
                            </div>
                        @else
                            <div class="container">
                                <p>
                                    Jasa Pengiriman <br>
                                    <b>DXD Express</b>
                                </p>
                                <p>
                                    No Resi<br>
                                    <b>JF2345TY8</b>
                                </p>
                                <p>
                                    Delivery Date<br>
                                    <input name="order_date" id="order_date" value="{{ $order->order_date }}" type="date" class="form-control" aria-describedby="deliveryDate">
                                </p>
                                <p>
                                    Shipping Status<br>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        @if ($order->order_status == "Paid")
                                            <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="Paid">Pilih Status</option>
                                                <option value="Order Received">Order Received</option>
                                                <option value="On Packing">On Packing</option>
                                                <option value="Delivered">Delivered</option>
                                            </select>
                                        @elseif ($order->order_status == "Order Received")
                                            <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="Paid">Pilih Status</option>
                                                <option selected value="Order Received">Order Received</option>
                                                <option value="On Packing">On Packing</option>
                                                <option value="Delivered">Delivered</option>
                                            </select>
                                        @elseif ($order->order_status == "On Packing")
                                            <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="Paid">Pilih Status</option>
                                                <option value="Order Received">Order Received</option>
                                                <option selected value="On Packing">On Packing</option>
                                                <option value="Delivered">Delivered</option>
                                            </select>
                                        @elseif ($order->order_status == "Delivered")
                                            <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="Paid">Pilih Status</option>
                                                <option value="Order Received">Order Received</option>
                                                <option value="On Packing">On Packing</option>
                                                <option selected value="Delivered">Delivered</option>
                                            </select>
                                        @else
                                            Your System need debuging
                                        @endif
                                    </li>
                                </ul>
                                </p>
                            </div>
                        @endif
                        
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        @if ($order->order_status == "unpaid")
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNotifSuccess">Simpan</button>
                        @else
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNotifSuccess">Simpan</button>
                        @endif
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- MODAL SUCCESS BUTTON --}}
    <div class="modal fade" id="modalNotifSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Perubahan Berhasil Disimpan
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection