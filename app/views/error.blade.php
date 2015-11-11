@include('layouts.header')



	

<div class="container">
<div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-3">
            <div class="account-wall">
                <img class="error-logo" src="http://mosdb.bobbyholtzner.com/images/logo-sm.png"
                    alt="">
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <h3>Uh Oh!</h3>
                            <ul>
                                @foreach ($errors->all() as $error) 
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <h1>Whoops there was an error!</h1><br /><br />
                <a href="/"><button class="btn btn-primary">Go Back to the Dashboard</button></a>
           
        </div>
    </div>
</div>
