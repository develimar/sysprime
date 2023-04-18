@extends('admin.layouts.master')

@section('title')
    SysPrime - Dashboard
@endsection

@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" >

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}" >

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/plugins/toastr/toastr.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/adminlte.min.css?v=3.2.0')}}">

    <script nonce="cbf2a68e-bc58-443a-ab53-23c9947dd84f">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})))))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
@endsection

@section('title_page_ant')
    Home
@endsection

@section('title_page_atu')
    Dashboard
@endsection

@section('content')
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Excluir
    </button>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{$data->descricao}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Descricao: {{$data['descricao']}}</p>
                    <p>Link: {{$data->descricao}}</p>
                    <p>Usuario: {{$data->usuario}}</p>
                    <p>Senha: {{$data->senha}}</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{url('assets.admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets.admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets.admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('assets.admin/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{url('assets.admin/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
    <script src="{{url('assets.admin/dist/js/demo.js')}}"></script>
@endsection
