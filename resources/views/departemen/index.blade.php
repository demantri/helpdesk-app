@extends('layouts.app')

@section('title')
    Departemen | Helpdesk
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <button class="btn btn-primary btn-sm mb-3 mt-3" id="btn_add">Tambah Data</button>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Departemen</h5>

                    <table class="table table-sm datatable" id="table" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Departemen</th>
                                <th>Tanggal Di buat</th>
                                <th>Tanggal Di update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at ?? '-'}}</td>
                                <td>
                                    <button class="btn btn-sm btn-light">Edit</button>
                                    <button class="btn btn-sm btn-light">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @include('departemen.add')
@endsection

@section('script')
    @include('departemen.script')
@endsection
