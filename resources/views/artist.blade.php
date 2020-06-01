@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
<div class="container">
	<div class="row">
		<div class="col-12">
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <img alt="user" src="{{ asset('img/user.jpg') }}">
                </div>
                <div class="info">
                    <div class="title">
                        {{ $user->name }}
                    </div>
                    <div class="desc">
                        @php
                        if(!empty($user->aboutme)){
                            echo $user->aboutme;
                        } else {
                            echo "<i>Este usuário não tem nada a declarar.</i>";
                        }
                        @endphp
                    </div>
                </div>
                <div class="bottom">
                    <a  class="btn btn-danger btn-sm"
                        rel="publisher"
                        href="mailto:{{ $user->email }}">
                        <i class="fa fa-envelope"></i>
                    </a>
                    @php
                        if(!empty($user->site)){
                            echo
                                "<a class='btn btn-secondary btn-sm' rel='publisher' href='$user->site'>
                                    <i class='fa fa-globe'></i>
                                </a>";
                        }
                    @endphp
                </div>
            </div>

        </div>

	</div>
</div>

@endsection
