﻿@extends('layouts.dashLayout')
@section('content')

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">

                    <div class="sidebar-brand-text mx-3"><img src={{asset('img/siteImg/logo.png')}} style="width:180px;height:60px;" ></div>
                </a>
                <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('admin.admins')}}"><i class="fas fa-user"></i><span>Admin</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.police')}}"><i class="fas fa-table"></i><span>Police</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.rda')}}"><i class="fas fa-window-maximize"></i><span>RDA</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.ins')}}"><i class="fas fa-window-maximize"></i><span>Insuarance</span></a></li>
                    </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="p-5 bg-white rounded shadow mb-5">


                        <!-- Bordered tabs-->
                        <ul id="myTab1" role="tablist" class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center">
                            <li class="nav-item flex-sm-fill">
                                <a id="contact1-tab" data-toggle="tab" href="#dprofile" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Add new admins</a>
                            </li>

                            <li class="nav-item flex-sm-fill">
                                <a id="contact1-tab" data-toggle="tab" href="#record" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0 border">Admins list</a>
                            </li>




                        </ul>
                        <div id="myTab1Content" class="tab-content">
                            <div id="dprofile" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                                <div class="container">
                                    <p>Add new admins</p>
                                    <form action="{{route('admin.admins.new')}}" method="post" class="was-validated">
                                        @csrf
                                        <div class="form-group">
                                            <label for="firstName">First Name:</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="fName" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName">Last Name:</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lName" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E mail:</label>
                                            <input type="text" class="form-control" id="email" placeholder="aaa@bbb.xxx" name="email" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone number:</label>
                                            <input type="text" class="form-control" id="address" placeholder="Enter Division" name="phone" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="identity">NIC / Passport ID:</label>
                                            <input type="text" class="form-control" id="identity" placeholder="Enter NIC/ Passport ID" name="nic" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pwd">Password:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password (Repeat):</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password (Repeat)" name="pswd" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>

                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms and conditions.
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>



                            </div>

                            <div id="record" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                                <div class="container">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search this table">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <table class="table table-light table-hover">

                                            <thead>
                                                <tr>
                                                    <th>NIC / Passport ID</th>
                                                    <th>Name</th>
                                                    <th>EMAIL</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        @foreach($admins as $admin)
                                            <tbody>
                                                <tr>
                                                    <td>{{$admin ->nic}}</td>
                                                    <td>{{$admin->fName}} {{$admin->lName}}</td>
                                                    <td>{{$admin->email}} </td>
                                                    <form action="{{route('admin.admins.delete')}}" method="post">
                                                        @csrf
                                                        <input type="text" name="id" hidden value="{{$admin->id}}">
                                                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                                    </form>

                                                </tr>

                                            </tbody>
                                            @endforeach()
                                    </table>
                                </div>







                            </div>

                            <!-- End bordered tabs -->
                        </div>



                    </div>

        </div>
            </div></div></div>
</body>
@endsection

