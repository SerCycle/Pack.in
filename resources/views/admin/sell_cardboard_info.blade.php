@extends('admin.main_admin')

@section('admin_container')
    <div class="container">
        <h2 style="padding-top: 5%">Product Order Information</h2>
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
                <td>
                    <select class="form-control" id="status" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                        <option value="" disabled selected hidden> - status - </option>
                        <option value="Under Checking">Under Checking</option>
                        <option value="Ready to pick up">Ready to pick up</option>
                        <option value="Picked Up">Picked Up</option>
                    </select>
                </td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal"><u>detail</u></a></td>
            </tr>

            {{--        item 2--}}
            <tr>
                <td>Alif Triatmaja</td>
                <td>Baru</td>
                <td>29 - 10 - 2022</td>
                <td>
                    <select class="form-control" id="status" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                        <option value="" disabled selected hidden> - status - </option>
                        <option value="Under Checking">Under Checking</option>
                        <option value="Ready to pick up">Ready to pick up</option>
                        <option value="Picked Up">Picked Up</option>
                    </select>
                </td>
                <td><a href=""><u>detail</u></a></td>
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
                            <select class="form-control" id="status" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                                <option value="Paid"><b>Paid</b></option>
                                <option value="Unpaid"><b>Unpaid</b></option>
                            </select>
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
