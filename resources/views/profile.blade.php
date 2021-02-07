@extends('dashboard')

@section('dashboard-content')
<div class="row">
    <div class="col s12 m2 shadow-lg dashboard-side">
        <div class="card shadow account-detail">
            <small class="status red ">Unapproved</small>
            <button href="#" class="btn btn-sm green pulse right">Approve</button>
            <h4>User ID: {{Auth::user()->referral_code}}</h4>
            <h6 class='right-text'>Current Earning: </h6>
            <span class="block text-12 yellow-text text-darken-2">$ <span id="dollar-earning">0</span>    </span>
            <span class="btn yellow darken-2 round center-text mt-5 block trx-earning mb-5">TRX: <span id="trx">{{Auth::user()->earnings}}</span></span>
            <span class=" block center-text">1 trx = <span id="trx-price">0.00343</span> USD</span>
        </div>
        <div class="card shadow">
            <h5 class="package-title center-text">Tronwealth <span class="red-text">X1</span></h5>
            <h6 class="center-text earning">$822</h6>
        </div>
        <div class="card shadow">
            <h5 class="package-title center-text">Tronwealth <span class="red-text">X2</span></h5>
            <h6 class="center-text earning">$536</h6>
        </div>
        <div class="card shadow">
            <h5 class="package-title center-text">Tronwealth <span class="red-text">X3</span></h5>
            <h6 class="center-text earning">$732</h6>
        </div>
        <div class="card shadow">
            <h6 class=" center-text fw-700"><i class="material-icons">wc</i> UPLINER</h6>
            <h6 class="center-text earning">#3495848</h6>
        </div>
    </div>
    <div class="col s12 m10 mt-2 dashboard-main">
        <!-- START PROFILE HEAD -->
        <div class="head">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="earnings">
                        <h6 class="green-text">$34000</h6>
                        <span class="block grey-text small-text">All earnings (USD)</span>
                    </div>
                    <div class="icon-wrapper">
                        <i class="material-icons">money
                            
                            </i>
                    </div>
                    <div class="footer green block">
                        <span class="white-text">stats</span>
                        <i class="material-icons">compare_arrows</i>
                    </div>
                </div>
                
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="earnings">
                        <h6 class="orange-text">$34000</h6>
                        <span class="block grey-text small-text">All earnings (TRX)</span>
                    </div>
                    <div class="icon-wrapper">
                        <i class="material-icons">monetization_on</i>
                    </div>
                    <div class="footer orange block">
                        <span class="white-text">stats</span>
                        <i class="material-icons">import_export</i>
                    </div>
                </div>
                
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="earnings">
                        <h6 class="red-text">$34000</h6>
                        <span class="block grey-text small-text">System Users</span>
                    </div>
                    <div class="icon-wrapper">
                        <i class="material-icons">mood</i>
                    </div>
                    <div class="footer red block">
                        <span class="white-text">stats</span>
                        <i class="material-icons">compare_arrows</i>
                    </div>
                </div>
                
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="earnings">
                        <h6 class="blue-text">$34000</h6>
                        <span class="block grey-text small-text">Total Withdrawal</span>
                    </div>
                    <div class="icon-wrapper">
                        <i class="material-icons">loop</i>
                    </div>
                    <div class="footer blue block">
                        <span class="white-text">stats</span>
                        <i class="material-icons">import_export</i>
                    </div>
                </div>
                
            </div>
            
        </div>

    <!-- END PROFILE HEAD -->
    <!-- START PACKAGES SECTION -->
        <div class="packages mt-5 white shadow p-3">
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">100</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head center-text">
                    <span class="fw-700">200</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">300</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">400</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">500</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">600</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">700</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">800</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">900</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1000</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1100</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1200</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1300</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1400</span>
                </div>
                <div class="package-body">.</div>
            </div>
            <div class="package">
                <div class="package-head">
                    <span class="fw-700">1500</span>
                </div>
                <div class="package-body">.</div>
            </div>
        </div>
    <!-- END PACKAGES SECTION -->
    </div>
</div>

<script>
    (function(){
        let trx = document.getElementById('trx');
        let dollar_earning = document.getElementById('dollar-earning');
        let trx_price = document.getElementById('trx-price')
        
        fetch("https://api.nomics.com/v1/currencies/ticker?key=5908985a783d219821b0999083278dbb&ids=TRX&interval=1d,30d&convert=EUR&per-page=100&page=1")
        .then(res =>res.json())
        .then(data => console.log(data[0] ))
    })()
</script>
@endsection
