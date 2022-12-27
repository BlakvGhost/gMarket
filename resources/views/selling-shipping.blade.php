<!DOCTYPE html>
<html lang="fr">
<head>
    @include('base.meta')
    <title>Payement et Livraison | Market </title>
</head>
<body>
    <div class="container-js">
        <div class="row row-cols-2">
            <div class="border-end p-2">
                <div class="" style="height: 50px;width:200px">
                    <a href="javascript:void(0)" class="link">
                        <img src="/logo.png" alt="logo de market" class="full">
                    </a>
                </div>
                <div class="my-2">
                    <a href="{{ url('/') }}" class="link mx-1"><i class="mdi mdi-home-outline"></i></a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="javascript:void(0)" class="link mx-1">Cart</a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="javascript:void(0)" class="link mx-1">Information</a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="javascript:void(0)" class="link mx-1">Shipping</a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="javascript:void(0)" class="link mx-1">Payement</a>
                </div>
                <div class="my-3 link">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-muted align-self-center">Contact Information</h6>
                        <h6>Already have an account ? <a href="{{ route('login') }}" class="btn btn-link">Log In</a></h6>
                    </div>
                    <form action="" method="post">
                        <div class="" id="information">
                            <div class="form-group my-2">
                                <input type="text" name="callInfo" class="form-control" placeholder="Email or Mobile Phone Number: ">
                                <span><input type="checkbox" name="keptnew" id="news_id" class="mx-1 my-2">Kept me up to date on news and offers</span>
                            </div>
                            <div>
                                 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>