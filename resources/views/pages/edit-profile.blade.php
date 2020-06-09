@extends('layouts.edit-profile')

@section('title')
    Edit Profile
@endsection

@section('content')

<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                               <li class="breadcrumb-item">
                                Home
                               </li>
                               <li class="breadcrumb-item">
                                Profile
                               </li>
                               <li class="breadcrumb-item active">
                               Edit Profile
                            </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pl-lg-0">
                        <div class="card card-edit-profile">
                            <div class="profile-section row">
                                <div class="col-md-6">
                                    <div class="profile-header text-center">
                                        <h2>Profile</h2>
                                    </div>
                                    <div class="section-foto text-center">
                                        <img src="https://ui-avatars.com/api/?name={{$item->name}}"
                                            alt=""
                                            class="rounded-circle"
                                            style="width:100px"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 border-left">
                                    <div class="profile-header">
                                       <h2>Edit Profile</h2>
                                    </div>
                                    <form action="{{route('profile-update')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text"
                                            class="form-control"
                                            id="name"
                                            name="name"
                                            value="{{$item->name}}"
                                            />
                                        </div>
                                        <div class="form-group" disabled="disabled">
                                            <label for="email">Email</label>
                                            <input type="text"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            aria-describedby="emailHelp"
                                            value="{{$item->email}}"
                                            disabled="disabled"
                                            />
                                        </div>
                                        <br/>
                                        <div class="col-12 text-center">
                                            <button
                                                type="submit"
                                                class="btn btn-update-profile px-4 mt-2 mx-1">
                                                    Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</main>

@endsection
