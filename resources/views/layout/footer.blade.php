<div class="footer mt-4">
        <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="">
                                <img class="logo-footer" src="{{ asset('images/logojetsada.svg')}}" >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-footer">บริการ ฝากถอน ผ่านธนาคารชั้นนำ</div>
                        <div class="des-footer">เราให้บริการ ฝากขถอน ผ่านธนาคารชั้นนำของประเทศ<br>
                            รวดเร็ว ทันใจ ทำรายการใช้เวลาไม่เกิน 15 นาที <br> เปิดให้บริการทุกวัน 24 ชม.
            
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="main-footer">บริการ Call Center โทร</div>
                            @foreach($contact as $con)
                            <div class="title-footer">  {{$con->type == 1 ? 'Phone' : ($con->type == 2 ? 'ID LINE' : ($con->type == 3 ? 'Email' : 'LINE @')) }} : {{$con->name}}</div>
                            @endforeach
                           
                    </div>
                    <div class="col-lg-12 text-center my-4">
                        <div class="font-allright">© 2020 Welovejetsadabet All rights reserved.</div>
                    </div>
                </div>
                
        </div>
</div>
