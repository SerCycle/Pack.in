@extends('admin.main_admin')

@section('admin_container')
    <div class="container">
        <h2 style="padding-top: 5%">Sell Cardboard Information</h2>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Seller</th>
                <th scope="col">Item Condition</th>
                <th scope="col">PickDate</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            {{--        item1--}}
            <tr>
                <td>Ucup Gunawan</td>
                <td>Bekas</td>
                <td>01 - 11 - 2022</td>
                <td>Under Checking<td>
                    <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                </td>
            </tr>

            {{--        item 2--}}
            <tr>
                <td>Alif Triatmaja</td>
                <td>Baru</td>
                <td>29 - 10 - 2022</td>
                <td>Picked Up</td>
                <td>
                    <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

    <!------------------------------------ Modal ------------------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container modal-title">
                        <div class="row">
                            <div class="col">
                                <h5>Picked Up</h5>
                            </div>
                            <div class="col">
                                <h5>[ 012030055950119 ]</h5>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Seller Info</h5>
                    <div class="container">
                        <p>
                            Nama Seller <br>
                            <b>Alif Triatmaja</b>
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
                                    <b>Kardus Sedang</b><br>
                                    [6mm x 7mm, Baru] <br>
                                </p>
                            </td>
                            <td>2</td>
                            <td>Rp 100000</td>
                        </tr>
                        {{---------------------------------------------------------------------------------------------}}
                        <tr>
                            <td>
                                <p>
                                    <b>Kardus Besar</b><br>
                                    [8 mm x 10 mm, Baru] <br>
                                </p>
                            </td>
                            <td>1</td>
                            <td>Rp 80000</td>
                        </tr>
                        {{---------------------------------------------------------------------------------------------}}
                        <tr>
                            <th>Total Harga</th>
                            <td></td>
                            <td>Rp 280000</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5>Pickup Info</h5>
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
                            Pickup Status<br>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <select  name="order_status" id="order_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Pilih Status</option>
                                    <option value="received">Info Submitted</option>
                                    <option value="packing">Under Checking</option>
                                    <option value="packing">Picked Up</option>
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
