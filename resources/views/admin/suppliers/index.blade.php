@extends('layouts.panel')
@section('title')
@section('content')
           
<div class="page-heading">
    
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Table Suppliers</h3>
                <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">

        <div class="card">
        @include('admin.suppliers.create')
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                  </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $supplier['code'] }}</td>
                            <td>{{ $supplier['name'] }}</td>
                            <td>{{ $supplier['address'] }}</td>
                            <td>{{ $supplier['phone'] }}</td>
                            <td>
                                @if($supplier['status'] === 'active')
                                    <span class="badge bg-success">{{ $supplier['status'] }}</span>
                                @else
                                    <span class="badge bg-danger">{{ $supplier['status'] }}</span>
                                @endif
                            </td>
                            <td class=" justify-content-center">
                                <a href="#" class="btn icon btn-primary" style="margin: 2px"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="btn icon btn-danger" style="margin: 2px"><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection