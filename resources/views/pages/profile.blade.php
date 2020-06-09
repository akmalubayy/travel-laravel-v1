@extends('layouts.profile')

@section('title')
    Profile Pages
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
                               <li class="breadcrumb-item active">
                                Profile
                            </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt-3 pl-lg-0">
                        <div class="card card-details-profile">
                            <h2 style="text-align: center;">Profile</h2>
                            <div class="profile-details row justify-content-center">
                               <img src="{{asset('/frontend/images/testimonial-1.png')}}"
                                    alt=""
                                    class="mb-4 rounded-circle"/>
                            </div>
                                <table class="profile-informations">
                                    <tr>
                                        <th width="50%">Nama</th>
                                        <td width="50%" class="text-right">
                                            {{$item->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Email</th>
                                        <td width="50%" class="text-right">
                                            {{$item->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Nationality</th>
                                        <td width="50%" class="text-right">
                                            Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Date Of Birth</th>
                                        <td width="50%" class="text-right">
                                            14 June 1997
                                        </td>
                                    </tr>
                                </table>
                            <div class="text-center mt-3">
                                <a href="{{route('profile-edit')}}" class="text-muted text-cancel">
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-3">
                        <div class="card card-details-profile card-right">
                            <h2 class="text-center">Trip List</h2>
                            <table class="table trip-informations-lists" style="border-collapse: collapse;">
                                <thead style="border-bottom: 1px solid #E3E3E3">
                                    <tr>
                                        <td width="50%">
                                            <strong>
                                               Travel Packages
                                            </strong>
                                        </td>
                                        <td width="50%" class="text-right">
                                            <strong>
                                                Status
                                            </strong>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{$item->travel_package->title}}</td>
                                            <td class="text-right">{{$item->transaction_status}}</td>
                                        </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{route('home').'#popular'}}" class="btn btn-block btn-join-now mt-3 py-2">
                                See Another Travel Package
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

@endsection
