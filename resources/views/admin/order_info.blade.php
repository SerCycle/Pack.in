@extends('admin.main_admin')

@section('admin_container')
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
        </tr>
        </thead>
        <tbody>

{{--        item1--}}
        <tr>
            <th scope="row">012030055950119</th>
            <td>Ucup Gunawan</td>
            <td>01 - 11 - 2022</td>
            <td>
                <select class="form-control" id="statusorder" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                    <option value="" disabled selected hidden> - status - </option>
                    <option value="Order Received ">Order Received </option>
                    <option value="On Packing">On Packing</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </td>
            <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><u>detail</u></a></td>
        </tr>

{{--        item 2--}}
        <tr>
            <th scope="row">012030055950118</th>
            <td>Alif Triatmaja</td>
            <td>29 - 10 - 2022</td>
            <td>
                <select class="form-control" id="statusorder" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                    <option value="" disabled selected hidden> - status - </option>
                    <option value="Order Received ">Order Received </option>
                    <option value="On Packing">On Packing</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </td>
            <td><a href=""><u>detail</u></a></td>
        </tr>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container modal-title">
                    <div class="row">
                        <div class="col">
                            <h5>Order Information</h5>
                        </div>
                        <div class="col">
                            <h5>[ 012030055950119 ]</h5>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Customer Info</h5>
                <div class="container">
                    <p>
                        Nama Customer <br>
                        <b>Ucup Gunawan</b>
                    </p>
                    <p>
                        No HP <br>
                        <b>081234567890</b>
                    </p>
                    <p>
                        Alamat<br>
                        <b>Jl. Telekomunikasi No. 1, Bojongsoang</b>
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
{{---------------------------------------------------------------------------------------------}}
                    <tr>
                        <td>
                            <p>
                                <b>Product #1</b><br>
                                [26cm x 26cm, White] <br>
                                <a href="">design.png</a>
                            </p>
                        </td>
                        <td>1</td>
                        <td>Rp 150000</td>
                    </tr>
{{---------------------------------------------------------------------------------------------}}
                    <tr>
                        <td>
                            <p>
                                <b>Product #2</b><br>
                                [26cm x 26cm, Maroon] <br>
                                <a href="">design.png</a>
                            </p>
                        </td>
                        <td>1</td>
                        <td>Rp 100000</td>
                    </tr>
{{---------------------------------------------------------------------------------------------}}
                    <tr>
                        <th>Total Harga</th>
                        <td></td>
                        <td>Rp 250000</td>
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
                        <b>1234567890</b>
                    </p>
                    <p>
                        Status Pembayaran<br>
                        <b>Paid</b>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endsection
