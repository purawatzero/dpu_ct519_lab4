<?php 
//Piyawat Loawthong
?>

<html>
<head>
    <link href="https://unpkg.com/tabulator-tables@5.2.3/dist/css/tabulator_simple.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.2.3/dist/js/tabulator.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <h3>DPU_CT519_Lab04</h3>
    <?php 
        $sql = "SELECT * FROM View_Movie;";
        $db = u_mysqli_connect();
        $res = $db->query($sql);
        $dataset = array();
        $count=0;
        while ($row = $res->fetch_assoc()) {
            $count++;
            $row['id'] = $count;
            $dataset[] = $row;
        }
    ?>
    <div id="example-table"></div>
    <script>
        var tableData = <?php
         echo json_encode($dataset);
        ?>;
        var linkIcon = function(cell, formatterParams, onRendered){
            return "<i class='fa fa-camera-retro'></i>";
        }
        var table = new Tabulator("#example-table", {
            height:"75%",
            layout:"fitColumns",
            data:tableData,
            progressiveLoad:"scroll",
            paginationSize:20,
            placeholder:"No Data Set",
            columns:[
                {field:"id", hozAlign:"center", width:40},
                {formatter:linkIcon, width:40, hozAlign:"center", cellClick:function(e, cell){
                    url = "https://video.internetvideoarchive.net/video.mp4?fmt=4&cmd=6&videokbrate=450&sub=AllMovie&customerId=198732&PublishedId=" + cell.getRow().getData().Tailer
                    window.open(url, '_blank').focus()
                }},
                {title:"Title", field:"Title"},
                {title:"Director", field:"Director"},
                {title:"Type", field:"Type"},
            ],
        });
    </script>
</body>
</html>


<?php //function
    function u_mysqli_connect(){
        $host     = 'sv_database';
        $db       = 'lab4';
        $user     = 'root';
        $password = 'dbpassw0rd';
        $port     = 3306;
        $charset  = 'utf8mb4';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $db = new mysqli($host, $user, $password, $db, $port);
        $db->set_charset($charset);
        $db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
        return $db;
    }
    function n_print($ar){
        echo "<pre>";
        print_r($ar);
        echo "</pre>";
    }
?>