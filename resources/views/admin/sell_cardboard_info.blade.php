@extends('admin.main_admin')

@section('admin_container')
@php
    use App\Models\User;
@endphp

@if (count($sells) === 0)
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
            <tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
            </tr>
            </tbody>
        </table>
    </div>
@else
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

            @foreach ($sells as $index => $sell)
                @php
                    $users = User::where('user_id', $sell->user_id)->first();
                @endphp
                <tr>
                    <td>{{ $users->user_fullname }}</td>
                    <td>{{ $sell->kondisi }}</td>
                    <td>{{ $sell->sell_date }}</td>
                    <td>{{ $sell->sell_status }}<td>
                        <a class="btn btn-info" href="#" role="button" data-bs-toggle="modal" data-bs-target="#Modal{{ $sell->sell_id }}">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($sells as $index => $sell)
        @php
            $users = User::where('user_id', $sell->user_id)->first();
        @endphp
        <div class="modal fade" id="Modal{{ $sell->sell_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="container modal-title">
                            <div class="row">
                                <div class="col">
                                    <h5>Picked Up</h5>
                                </div>
                                <div class="col">
                                    <h5 class="ms-5">[ {{ $sell->sell_id }} ]</h5>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('UpdateSellAdmin') }}" enctype="multipart/form-data" method="POST" style="margin: 35px;">
                        @csrf
                        <input type="hidden" value="{{ $sell->sell_id }}" name="sell_id">
                    <div class="modal-body">
                        <h5>Seller Info</h5>
                        <div class="container">
                            <p>
                                Nama Seller <br>
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
                                <th scope="col">Ketebalan kardus</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Kondisi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p>{{ $sell->ketebalan }}</p></td>
                                <td>{{ $sell->berat }} gram</td>
                                <td>{{ $sell->kondisi }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5>Pickup Info</h5>
                        <div class="container">
                            <p>
                                Delivery Date<br>
                                <input name="sell_date"  id="sell_date" value="{{ $sell->sell_date }}" type="date" class="form-control" aria-describedby="deliveryDate">
                            </p>
                            <p>
                                Pickup Status<br>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        @if ($sell->sell_status == "Info Submitted")
                                            <select  name="sell_status" id="sell_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="none">Pilih Status</option>
                                                <option selected value="Info Submitted">Info Submitted</option>
                                                <option value="Under Checking">Under Checking</option>
                                                <option value="Picked Up">Picked Up</option>
                                            </select>
                                        @elseif ($sell->sell_status == "Under Checking")
                                            <select  name="sell_status" id="sell_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="none">Pilih Status</option>
                                                <option value="Info Submitted">Info Submitted</option>
                                                <option selected value="Under Checking">Under Checking</option>
                                                <option value="Picked Up">Picked Up</option>
                                            </select>
                                        @elseif ($sell->sell_status == "Picked Up")
                                            <select  name="sell_status" id="sell_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option value="none">Pilih Status</option>
                                                <option value="Info Submitted">Info Submitted</option>
                                                <option value="Under Checking">Under Checking</option>
                                                <option selected value="Picked Up">Picked Up</option>
                                            </select>
                                        @elseif ($sell->sell_status == "none")
                                            <select  name="sell_status" id="sell_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected value="none">Pilih Status</option>
                                                <option value="Info Submitted">Info Submitted</option>
                                                <option value="Under Checking">Under Checking</option>
                                                <option value="Picked Up">Picked Up</option>
                                            </select>
                                        @else
                                            Your System need debuging
                                        @endif
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNotifSuccess">Simpan</button>
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
