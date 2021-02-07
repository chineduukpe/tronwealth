@extends('dashboard')

@section('dashboard-content')
<div class="profile-container">
    <div class="row">
        <div class="header col s12 l5">
            <div class="name-section">
                <div class="left w-50">
                    <h6 class="white-text">Chinedu Ukpe > <span class=" badge">MainChain</span></h6>
                </div>
                <div class="right text-align-right ">
                    <i class="material-icons white-text">change_circle</i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="balance-section">
                <small class="grey-text text-lighten-1">Total Assets</small>
                <h5 class="white-text balance">0 TRX</h5>
                <h6 class="grey-text text-lighten-1">=$ 0</h6>
            </div>
            <div class="transact-section">
                <button class="btn white black-text btn-rounded btn-sm"> <i class="material-icons">send</i> Send</button>
                <button class="btn white black-text  btn-rounded btn-sm ml-4"> <i class="material-icons">equalizer</i> Receive</button>
            </div>
            <div class="activities-section">
                <a href="">
                    <i class="material-icons">access_time</i>
                    <span>Freeze/Unfreeze</span>
                </a>
                <a href="">
                    <i class="material-icons">rotate_left</i>
                    <span>Swap</span>
                </a>
                <a href="">
                    <i class="material-icons">style</i>
                    <span>vote</span>
                </a>
                <a href="" class="pulse waves-effect">
                    <i class="material-icons">data_saver_on</i>
                    <span>Add Asset</span>
                </a>
            </div>
        </div>
        
        <div class="body col s12 l7">
            <div class="level-section">
                <h6 class="title">Energy</h6>
                <div class="level">
                    <span class="fill " style="width: 47%;" ></span>
                </div>
                <div class="count">
                    <span class="fw-700 text-16">117</span>/195
                </div>
            </div>
            <div class="level-section">
                <h6 class="title">Bandwidth</h6>
                <div class="level">
                    <span class="fill" style="width: 70%"></span>
                </div>
                <div class="count">
                    <span class="fw-700 text-16">89,049,39KB</span>/108,003,489,284KB
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="row white p-4 p-lg-12">
        <ul class="collection cryptos row" >
            
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/bitcoin.svg')}}" alt="" class="circle">
                <span class="title">Bitcoin <i class="material-icons blue white-text">done</i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0.00349 <br> <span class="text-8 grey-text">=$ 1,034.84</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/ether.svg')}}" alt="" class="circle">
                <span class="title">Etherium <i class="material-icons blue white-text"> </i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0 <br> <span class="text-8 grey-text">=$ 0</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/litecoin.svg')}}" alt="" class="circle">
                <span class="title">Litecoin <i class="material-icons blue white-text"> </i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0 <br> <span class="text-8 grey-text">=$ 0</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/usdcoin.svg')}}" alt="" class="circle">
                <span class="title">USDCoin <i class="material-icons blue white-text">done</i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0.000348 <br> <span class="text-8 grey-text">=$ 893.00</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/xrp.svg')}}" alt="" class="circle">
                <span class="title">XRP <i class="material-icons blue white-text"> </i> </span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0 <br> <span class="text-8 grey-text">=$ 0</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/tether.svg')}}" alt="" class="circle">
                <span class="title">Tether <i class="material-icons blue white-text">done</i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">0 <br> <span class="text-8 grey-text">=$ 0</span></a>
            </li>
            <li class="collection-item avatar shadow">
                <img src="{{asset('assets/img/cryptos/eos.svg')}}" alt="" class="circle">
                <span class="title">EOS <i class="material-icons blue white-text">done</i></span>
                <span class="red-text darken-3"></span>
                <a href="#!" class="secondary-content center-text ">12.945 <br> <span class="text-8 grey-text">=$9,234 </span></a>
            </li>
            
            
        </ul>
        
    </div>
</div>
@endsection