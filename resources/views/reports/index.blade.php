@include('header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <h4>Reportes por semana, mes, año.</h4>

        <div class="col-6 py-1">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>  

@include('footer')