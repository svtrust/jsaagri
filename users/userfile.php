
<?php
include'../includes/config.php';
include'header.php';
$obj=new Billing();
$result=$obj->getPieChart();
$obj1=new Referral();
$result1=$obj->getMonth();
$res=$obj->getMonthlyBill();
?>
  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data1 = google.visualization.arrayToDataTable([  
                          ['Patient', 'Number'],  
                          <?php  
                          foreach($result as $row)  
                          { 
                          $name=$obj1->getName($row["referral_id"]); 
                               echo "['".$name['title']." ".$name['name']."', ".$row["count(patient_id)"]."],";  
                          }  
                          ?>  
                     ]);  
                var options1 = {  
                    chartArea: { left: 10, top: 10, width: "100%", height: "100%"},
                      title: 'Percentage of Doctor Referral',  
                      //is3D:true,  
                      pieHole: 1  
                     };  
                var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart1.draw(data1, options1);  
           }
       </script>

<style type="text/css">
 .menu{
    height: 80px;
    background-color: #33F6FF;
    border-radius: 2px;
    padding: 10px;
    width: 290px;
 }
 .info-box-text{
    font-size: 20px;
    font-weight: bolder;
    color: navy;
    text-align: center;

 }

    .tablesorter thead .disabled {display: none}
    .tablesorter thead .tablesorter-filter{
        width:60%;
    }

</style>

 <div id="layoutSidenav_content">
                <main> 
                    <div class="container">
                        <div class="row"><div class="col-lg-12 text-center"><br>
                            <h5>Monthly Report</h5></div></div> <div class="form-row"><div class='col-lg-6'><div id="piechart" style="width: 400px; height: 300px;" ></div></div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6">
                            <select name="year" class="form-control" id="year">
                                <option value="">Select Doctor</option>
                            <?php
                            foreach($result as $row)
                            {
                                $name=$obj1->getName($row["referral_id"]);
                                echo '<option value="'.$row["referral_id"].'">'.$name['name'].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="chart_area" style="width: 500px; height: 200px;"  ></div>
                </div>
            </div></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">



        <table id="myTable" class="table table-striped table-bordered table-sm" >
        <thead>
            <tr>
            <th colspan="7" class="ts-pager">
                <div class="form-inline">
                    <div class="btn-group btn-group-sm mx-1" role="group">
                        <button type="button" class="btn btn-secondary first" title="first">&#8676;</button>
                        <button type="button" class="btn btn-secondary prev" title="previous">&larr;</button>
                    </div>
                    <span class="pagedisplay"></span>
                    <div class="btn-group btn-group-sm mx-1" role="group">
                        <button type="button" class="btn btn-secondary next" title="next">&rarr;</button>
                        <button type="button" class="btn btn-secondary last" title="last">&#8677;</button>
                    </div>
                    <select class="form-control-sm custom-select px-1 pagesize" title="Select page size">
                        <option selected="selected" value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="all">All Rows</option>
                    </select>
                    <select class="form-control-sm custom-select px-4 mx-1 pagenum" title="Select page number"></select>
                </div>
            </th>
        </tr>
            <tr>
                <th>S.No</th>
                <th>Referral</th>
                <th>Organization</th>
                <th>Date</th>
                <th>Count</th>
                <th>Business ₹</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($res as $bill_row) {
                $i++;
                $name1=$obj1->getName($bill_row["referral_id"]);
                echo"<tr><td>$i</td><td>".$name1['name']."</td><td>".$name1['organization']."</td><td>".date('d-M-Y',strtotime($bill_row['bill_date']))."</td><td>".$bill_row['count(patient_id)']."</td><td>";
                $business=$bill_row['sum(total)']-$bill_row['sum(extra_discount)'];
                echo $business;
                echo"</td></tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                 <th>S.No</th>
                 <th>Rererral</th>
                <th>Organization</th>
                <th>Date</th>
                <th>Count</th>
                <th>Business &#8377; </th>
            </tr>
        </tfoot>
    </table>
                        </div>
                    </div>
                  
                </main>
            </div>


    <?php
    include'footer.php';
    ?>
    <script src="../assets/demo/datatables-demo.js"></script> 
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback();

function load_monthwise_data(year, title)
{
    
    $.ajax({
        url:"ajaxCalls/fetch.php",
        method:"POST",
        data:{year:year},
        dataType:"JSON",
        success:function(data)
        {
            var temp_title = title + ' '+data.name+'';
            console.log(temp_title)
            drawMonthwiseChart(data.output, temp_title);
        }
    });
}

function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Patient');
    $.each(jsonData, function(i, jsonData){
        var month = jsonData.month;
        var Patient = parseFloat($.trim(jsonData.Patient));
        data.addRows([[month, Patient]]);
    });
    var options = { 
        width: 500,
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        hAxis: {
            title: "Date"
        },
        vAxis: {
            title: 'Patient'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script type="text/javascript">
    
$(document).ready(function(){
    $('#year').val('1');       
    $('#year').on('change', function(){
        //alert('hi');
        var year = $(this).val();
        console.log(year);
        if(year != '')
        {
            load_monthwise_data(year, 'Month Wise Dr Referral Data For');
        }
    }).change();

});

</script> 


<!-- <script id="js">$(function() {

    var $table = $('table'),
    //  pager options
    pagerOptions = {
       
        container: $(".pager"),
       
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
       
        fixedHeight: true,
       
        removeRows: false,
       
        cssGoto: '.gotoPage'
    };

    // Initialize tablesorter
    // ***********************
    $table
        .tablesorter({
            theme: 'blue',
            headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!
            widthFixed: true,
            widgets: ['zebra', 'filter'],
            headers: { 
        0: { sorter: true, filter: false }, 
        
    }
        
        
    
            
         
    
        })

        // initialize the pager plugin
        // ****************************
        .tablesorterPager(pagerOptions);      
});</script> -->
<script id="js">$(function() {

    $("table").tablesorter({
       theme : "bootstrap",

        widthFixed: true,

        // widget code contained in the jquery.tablesorter.widgets.js file
        // use the zebra stripe widget if you plan on hiding any rows (filter widget)
        // the uitheme widget is NOT REQUIRED!
        widgets : [ "filter"],
        headers: { 
        0: { sorter: false, filter: false }, 
        1: { sorter: false, filter: false } 
         
    },
        widgetOptions : {
            // using the default zebra striping class name, so it actually isn't included in the theme variable above
            // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
            zebra : ["even", "odd"],

            // class names added to columns when sorted
            // columns: [ "primary", "secondary", "tertiary" ],

            // reset filters button
            filter_reset : ".reset",

            // extra css class name (string or array) added to the filter element (input or select)
            filter_cssFilter: [
                'form-control',
                'form-control',
                'form-control', // select needs custom class names :(
                'form-control',
                'form-control',
                'form-control',
                'form-control'
            ]

        }
        
        
    })
    .tablesorterPager({

        // target the pager markup - see the HTML block below
        container: $(".ts-pager"),

        // target the pager page select dropdown - choose a page
        cssGoto  : ".pagenum",

        // remove rows from the table to speed up the sort of large tables.
        // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
        removeRows: false,

        // output string - default is '{page}/{totalPages}';
        // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

    });

});</script>

    <!-- <script>
    $(function() {

        // filter button demo code
        $('button.filter').click(function() {
            var col = $(this).data('column'),
                txt = $(this).data('filter');
            $('table').find('.tablesorter-filter').val('').eq(col).val(txt);
            $('table').trigger('search', false);
            return false;
        });

        // toggle zebra widget
        $('button.zebra').click(function() {
            var t = $(this).hasClass('btn-success');
            $('table')
                .toggleClass('table-striped')[0]
                .config.widgets = (t) ? ["filter"] : ["filter", "zebra"];
            $(this)
                .toggleClass('btn-danger btn-success')
                .find('span')
                .text(t ? 'disabled' : 'enabled');
            $('table').trigger('refreshWidgets', [false]);
            return false;
        });
    });
    </script> -->
