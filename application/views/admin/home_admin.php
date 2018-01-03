<head>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
 
    <script type="text/javascript">
    //2)script untuk membuat grafik, perhatikan setiap komentar agar paham
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', //letakan grafik di div id container
        //Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line',

            },
            title: {
                text: 'Grafik Keuangan Rental Motor Al-Jawi',
                x: -20 //center
            },
            
            xAxis: { //X axis menampilkan data tahun 
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Jumlah'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
      //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
      //akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
      //series adalah data yang akan dibuatkan grafiknya,
      //saat ini mungkin anda heran, buat apa label indonesia dikanan 
      //grafik, namun fungsi label ini sangat bermanfaat jika
      //kita menggambarkan dua atau lebih grafik dalam satu chart,
      //hah, emang bisa? ya jelas bisa dong, lihat tutorial selanjutnya 
            series: [{  
                name: 'Al-Jawi',  
        //data yang akan ditampilkan 
                data: <?php echo json_encode($grafik); ?>
            }]
        });
    });
     
});
    </script>
</head>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
			<div class="col-lg-12" >
				<div class="panel panel-default">
					<div class="panel-body" id="grafik">
						
                        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
                        </div>
					
						
					</div>
				</div>
			</div>

		</div><!--/.row-->
</div>
