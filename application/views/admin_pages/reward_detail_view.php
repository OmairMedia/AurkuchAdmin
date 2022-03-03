

<?php $this->load->view('admin_layout/header');  
?>
  <!-- BEGIN .app-container -->
      <div class="app-container">
    
        <!-- END: .app-side -->

        <!-- BEGIN .app-main -->
        <div class="app-main">
          <!-- BEGIN .main-heading -->
          <header class="main-heading"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                  <div class="page-icon">
                    <i class="icon-tabs-outline"></i>
                  </div>
                  <div class="page-title">
                    <h5>Reward Detail</h5>
                    <h6 class="sub-heading">Welcome Reward Detail</h6>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="right-actions">
                    <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
                      <i class="icon-download4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <!-- END: .main-heading -->
          <!-- BEGIN .main-content -->
          <div class="main-content">
           <div class="row gutters">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="plan-three">
                  <div class="pricing-header" style="display:flex;">
                    <img src='<?=base_url().'assets/cms_images/thumbnail/'.$detail['image']?>' style="width: 50px;margin-right: 10px;">
                    
                    <div class="plan-cost" style="padding-top: 10px;">
                        <h4 class="plan-title">
                      <?=$detail['reward_name']?>
                    </h4>
                      <p class="">Rs. <?=$detail['reward']?></p>
                    </div>
                  </div>
                  <ul class="plan-features">
                    <li><strong>Reward Description:</strong>  <?=$detail['reward_description']?></li>
                    <li><strong>Reward Category:</strong>  <?=$detail['reward_category_id']?></li>
                    <li><strong>QR:</strong>  <?=$detail['reward_qr']?></li>
                    <li><strong>Total number of scans:</strong>  <?=$wallet_count;?></li>
                    <li><strong>Total rewards given to user:</strong>  <?=($detail['reward'])*($wallet_count);?> </li>
                     <li><strong>Reward Left:</strong>  <?=$detail['rewards_left']?> </li>
                      <li><strong>Reward Divisions:</strong>  <?=$detail['reward_divisions']?> </li>
                    <li><strong>Date:</strong>  <?=$detail['reward_created_date']?></li>
                 
                  </ul>
           
                </div>
              </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">



             
               <!--  <div class="card" style="height: 390px;">
                  <div class="card-header">Chart</div>
                  <div class="card-body">
                    <div id="line-chart" class="chart-height" style="padding: 0px;">
                  
                      </div>
                  </div>
                </div>
              </div>
              -->

                <div class="card">
                  <div class="card-header">Line Chart</div>
                  <div class="card-body">
                    <div id="line-chart" class="chart-height" style="padding: 0px;"></div>
            
                </div>
              </div>
            </div>
     <div class="row gutters" style=" width: 100%;">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
             
                  <div class="card-body">
                
                    <br>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="1%">ID</th>
                        
                          <th>Name</th>
                          <th>status</th>
                          <th>email</th>
                          <th>Email Verified</th>
                          <th>Phone</th>
                          <th>Phone Verified</th>
                          <th>User Refferal Code</th>
                          <th>Created Date</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                 <?php foreach ($users as $row): extract($row);?>
                        <tr id="row<?=$user_id?>">
                        <td><?=$user_id?></td>
                        <td><?=$user_name?></td>
                        <td><?=$user_status?></td>
                        <td><?=$user_email?></td>
                        <td><?=$user_is_email_verified?></td>
                        <td><?=$user_phone?></td>
                        <td><?=$user_is_phone_verified?></td>
                        <td><?=$user_refferal_code?></td>
                        <td><?=$user_created_date?></td>
                        
                   
                      </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table>
                    <?php if (!empty($links)) {
                      ?>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <?php echo $links; ?>
                      </ul>
                    </nav>
                      <?php
                    } ?>
                  </div>
                </div>
              </div>
          </div>
            
          <!-- END: .main-content -->
        </div>
        <!-- END: .app-main -->
      </div>
      <!-- END: .app-container -->
			
				<!-- END: .app-main -->

</div>

</div>


<?php $this->load->view('admin_layout/footer');?>


<script type="text/javascript">
  $(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
<?php //print_r($wallet); ?>
<!--<script type="text/javascript">-->
<!--  $(function () {-->
  
<!--  var d1, data, chartOptions;-->

<!--  var d1 = [[1262304000000, <?=$wallet[0]['wallet_total_amount']?>], [1264982400000, <?=$wallet[1]['wallet_total_amount']?>], [1267401600000, <?=$wallet[2]['wallet_total_amount']?>], [1270080000000, <?=$wallet[3]['wallet_total_amount']?>], [1272672000000, <?=$wallet[4]['wallet_total_amount']?>], [1275350400000, <?=$wallet[5]['wallet_total_amount']?>], [1277942400000, <?=$wallet[6]['wallet_total_amount']?>], [], [], [], [], []];-->

<!--  data = [{ -->
<!--    label: "Facebook", -->
<!--    data: d1-->
<!--  }];-->

<!--  chartOptions = {-->
<!--    xaxis: {-->
<!--      min: (new Date(2009, 11)).getTime(),-->
<!--      max: (new Date(2010, 11)).getTime(),-->
<!--      mode: "time",-->
<!--      tickSize: [1, "month"],-->
<!--      monthNames: ["Sat", "Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "", "", "", "", ""],-->
<!--      tickLength: 0-->
<!--    },-->
<!--    yaxis: {-->

<!--    },-->
<!--    series: {-->
<!--      lines: {-->
<!--        show: true, -->
<!--        fill: false,-->
<!--        lineWidth: 2,-->
<!--      },-->
<!--      points: {-->
<!--        show: true,-->
<!--        radius: 4,-->
<!--        fill: true,-->
<!--        fillColor: "#ffffff",-->
<!--        lineWidth: 2-->
<!--      }-->
<!--    },-->
<!--     grid:{-->
<!--      hoverable: true,-->
<!--      clickable: true,-->
<!--      borderWidth: 1,-->
<!--      tickColor: '#f5f6fa',-->
<!--      borderColor: '#f5f6fa',-->
<!--    },-->
<!--    shadowSize: 0,-->
<!--    legend: {-->
<!--      show: true,-->
<!--      position: 'nw'-->
<!--    },-->
<!--    tooltip: true,-->
<!--    tooltipOpts: {-->
<!--      content: '%s: %y'-->
<!--    },-->
<!--    colors: ['#007ae1', '#e5e8f2', '#ff5661'],-->
<!--  };-->

<!--  var holder = $('#line-chart');-->

<!--  if (holder.length) {-->
<!--    $.plot(holder, data, chartOptions );-->
<!--  }-->
<!--});-->
<!--</script>-->


<!--Added by Ghulam Abbas on 11 Feb 2020 for line chart-->

<script src="<?=base_url()?>assets/cms_layout/canvasjs.min.js"></script>

<script type="text/javascript">

window.onload = function () {
    
    var d1 = new Date();
    d1.setDate(d1.getDate() - 0);
    var d2 = new Date();
    d2.setDate(d2.getDate() - 1);
    var d3 = new Date();
    d3.setDate(d3.getDate() - 2);
    var d4 = new Date();
    d4.setDate(d4.getDate() - 3);
    var d5 = new Date();
    d5.setDate(d5.getDate() - 4);
    var d6 = new Date();
    d6.setDate(d6.getDate() - 5);
    var d7 = new Date();
    d7.setDate(d7.getDate() - 6);

var chart = new CanvasJS.Chart("line-chart", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY:{
		includeZero: false
	},
	data: [{        
	    type: "line",
        lineDashType: "dot",
        lineThickness: 5,
        markerColor: "blue",
		dataPoints: [
			{ x: d1 , y: <?=$chart_data['1']; ?> },
			{ x: d2 , y: <?=$chart_data['2']; ?> },
			//{ y: <?=$chart_data['3']; ?>, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ x: d3 , y: <?=$chart_data['3']; ?> },
			{ x: d4 , y: <?=$chart_data['4']; ?> },
			{ x: d5 , y: <?=$chart_data['5']; ?> },
			{ x: d6 , y: <?=$chart_data['6']; ?> },
			{ x: d7 , y: <?=$chart_data['7']; ?> },
		]
	}]
});
chart.render();

}

</script>