@extends('admin.layout.app')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w-25">
                                        <img src="{{ asset('admin-assets/assets/img/card.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </td>
                                    <td>Head Office Image</td>
                                    <td>This is such an amazing opportunity to design a adymic website for Justice
                                        Livelihoods Health.</td>
                                    <td>2016-05-25</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-primary mx-2">Edit</a>
                                        <a href="#" class="btn btn-danger mx-2">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">
                                        <img src="{{ asset('admin-assets/assets/img/card.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </td>
                                    <td>Head Office Image</td>
                                    <td>This is such an amazing opportunity to design a adymic website for Justice
                                        Livelihoods Health.</td>
                                    <td>2016-05-25</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-primary mx-2">Edit</a>
                                        <a href="#" class="btn btn-danger mx-2">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">
                                        <img src="{{ asset('admin-assets/assets/img/card.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </td>
                                    <td>Head Office Image</td>
                                    <td>This is such an amazing opportunity to design a adymic website for Justice
                                        Livelihoods Health.</td>
                                    <td>2016-05-25</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-primary mx-2">Edit</a>
                                        <a href="#" class="btn btn-danger mx-2">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">
                                        <img src="{{ asset('admin-assets/assets/img/card.jpg') }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </td>
                                    <td>Head Office Image</td>
                                    <td>This is such an amazing opportunity to design a adymic website for Justice
                                        Livelihoods Health.</td>
                                    <td>2016-05-25</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-primary mx-2">Edit</a>
                                        <a href="#" class="btn btn-danger mx-2">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
