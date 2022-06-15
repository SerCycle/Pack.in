@extends('main')

@section('container')
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
                <select class="form-control" id="themecolor" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                    <option value="" disabled selected hidden>- status -</option>
                    <option value="blue">Order Received</option>
                    <option value="red">On Packing</option>
                    <option value="green">Delivered</option>
                </select>
            </td>
            <td><u>detail</u></td>
        </tr>

{{--        item 2--}}
        <tr>
            <th scope="row">012030055950118</th>
            <td>Alif Triatmaja</td>
            <td>29 - 10 - 2022</td>
            <td>
                <select class="form-control" id="themecolor" name="theme" style="border: 0px; outline: 0px; max-width: 50%">
                    <option value="" disabled selected hidden> - status - </option>
                    <option value="blue">Order Received </option>
                    <option value="red">On Packing</option>
                    <option value="green">Delivered</option>
                </select>
            </td>
            <td><u>detail</u></td>
        </tr>
        </tbody>
    </table>

</div>
@endsection
