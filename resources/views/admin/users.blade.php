@extends('dashboard')

@section('dashboard-content')
<div class="container py-12">
    <div class="row white p-lg-5 p-sm-2 ">
        <div class="col s12">
            <h6 class="red-text underlined">Users</h6>
        </div>
        <div class="col s12 mt-2 mb-2 shadow">
            <ul class="collection admin-users">
                @if(!empty($users))
                @foreach($users as $user)
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300?img=7" alt="" class="circle">
                    <span class="{{$user->status == 'unapproved' ? 'red-text' : 'green-text'}}">{{$user->status}}</span>
                    <p>{{$user->name}}
                    <span class="block text-10">{{$user->plan->plan}}</span>
                    </p>
                    <a href="{{route('admin.referral.approve',$user->id)}}" class="secondary-content btn waves-effect"><span class="hide-on-small-only">Profile</span> <i class="material-icons">done</i></a>
                    
                </li>
                @endforeach
                @endif
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300" alt="" class="circle">
                    <span class="title green-text">Approved </span> | <span class="text-8"> 21/01/2021</span>
                    <p>Chinedu Fynix
                        <span class="block text-10">$789</span>
                    </p>
                    <a href="#!" class="secondary-content btn red waves-effect"><span class="hide-on-small-only">Cancel</span> <i class="material-icons">clear</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300?img=2" alt="" class="circle">
                    <span class="title red-text">Cancelled</span> | <span class="text-8"> 12/01/2021</span>
                    <p>Baker Jacobs 
                        <span class="block text-8 red-text">
                            <del>N 367</del>
                        </span>
                    </p>
                    <a href="#!" class="secondary-content btn blue lighten-3 waves-effect"><span class="hide-on-small-only">Restore</span> <i class="material-icons">loop</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300?img=3" alt="" class="circle">
                    <span class="title green-text">Approved </span> | <span class="text-8"> 04/02/2021</span>
                    <p>Chinedu Fynix
                        <span class="block text-10">$789</span>
                    </p>
                    <a href="#modal" class="secondary-content btn red waves-effect modal-trigger"><span class="hide-on-small-only">Cancel</span> <i class="material-icons">clear</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300" alt="" class="circle">
                    <span>Unapproved</span>
                    <p>Jonathan Campbell
                    </p>
                    <a href="#modal" class="secondary-content btn blue lighten-3 waves-effect modal-trigger"><span class="hide-on-small-only">Cancel</span> <i class="material-icons">loop</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300" alt="" class="circle">
                    <span class="title green-text">Approved </span> | <span class="text-8"> 21/01/2021</span>
                    <p>Chinedu Fynix
                        <span class="block text-10">$789</span>
                    </p>
                    <a href="#!" class="secondary-content btn red waves-effect"> <span class="hide-on-small-only">Cancel</span> <i class="material-icons">clear</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300" alt="" class="circle">
                    <span class="title red-text">Cancelled</span> | <span class="text-8"> 12/01/2021</span>
                    <p>Baker Jacobs 
                        <span class="block text-8 red-text">
                            <del>N 367</del>
                        </span>
                    </p>
                    <a href="#!" class="secondary-content btn blue lighten-3 waves-effect"><span class="hide-on-small-only">Restore</span> <i class="material-icons">loop</i></a>
                </li>
                <li class="collection-item avatar">
                    <img src="https://i.pravatar.cc/300" alt="" class="circle">
                    <span class="title green-text">Approved </span> | <span class="text-8"> 04/02/2021</span>
                    <p>Chinedu Michael
                        <span class="block text-10">$789</span>
                    </p>
                    <a href="#!" class="secondary-content btn red waves-effect"><span class="hide-on-small-only">Cancel</span> <i class="material-icons">clear</i></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal">
    <div class="modal-header">
        You are about to change the status of this user
    </div>
</div>
@endsection

@section('page-scripts')
$(document).ready(function(){
    $('.modal').modal();
  });
@endsection