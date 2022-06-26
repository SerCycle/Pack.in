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
            <th scope="col"> Aksi</th>
        </tr>
        </thead>
        <tbody>

{{--        item1--}}
        <tr>
            <th scope="row">012030055950119</th>
            <td>Ucup Gunawan</td>
            <td>01 - 11 - 2022</td>
            <td>Delivered</td>
            <td>
                <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
            </td>
        </tr>

{{--        item 2--}}
        <tr>
            <th scope="row">012030055950118</th>
            <td>Alif Triatmaja</td>
            <td>29 - 10 - 2022</td>
            <td>On Packaging</td>
            <td>
                <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
            </td>
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
                        <ul class="list-group">
                            <li name="payment_status" id="payment_status" class="list-group-item d-flex justify-content-between align-items-center">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Pilih Status Pembayaran</option>
                                    <option value="unpaid">Unpaid</option>
                                    <option value="paid">Paid</option>
                                </select>
                                <span class="badge"><a href="">buktipembayaran.png</a></span>
                            </li>
                        </ul>
                    </p>
                </div>
                <hr>
{{--                ----------------------------------------------------}}
                <h5>Shipping Info</h5>
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
                        <input name="delivdate"  id="delivdate" type="date" class="form-control" aria-describedby="deliveryDate">
                    </p>
                    <p>
                        Shipping Status<br>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Pilih Status</option>
                                <option value="received">Order Received</option>
                                <option value="packing">On Packing</option>
                                <option value="packing">Delivered</option>
                            </select>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNotifSuccess">Simpan</button>
            </div>
        </div>
        </div>
    </div>
</div>

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
@endsection
