@extends('templates.layouts.main.index') 
@section('content')  
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>{{ $header }}
                    <small>{{ $sub }}</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 


	    <div class="chart" id="basic-example"></div>
	</section>   

    <style type="text/css">
        body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { margin:0; padding:0; }
        table { border-collapse:collapse; border-spacing:0; }
        fieldset,img { border:0; }
        address,caption,cite,code,dfn,em,strong,th,var { font-style:normal; font-weight:normal; }
        caption,th { text-align:left; }
        h1,h2,h3,h4,h5,h6 { font-size:100%; font-weight:normal; }
        q:before,q:after { content:''; }
        abbr,acronym { border:0; }  
        /* optional Container STYLES */
        .chart { height: 500px; margin: 5px; width: 79vw !important; }
        .Treant > .node { text-align: center; }
        .Treant > p { font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: bold; font-size: 12px; }
        .node-name { font-weight: bold;}

        #basic-example{
            margin-top:-10%;
            margin-left:0%;    
        }
        body {
            background-color: #ecebeb !important;
        }
        .nodeExample1 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: lightgray;
            border: 1px solid #000;
            width: 200px;
            font-family: Tahoma;
            font-size: 12px;
        }
 
        .Treant > .node img{
            width: 22px;  
            height: 2em;
        }
        .node-occupied .node-title{
            float : left !important; 
            color: #333;
            width: 70%;
            margin-left: 2%;
            text-align: left;
            font-size: 0.6em;
        }  
        .node-occupied .node-name{
            float : left !important; 
            color: #333;
            width: 70%;
            margin-left: 2%;
            text-align: left;
            font-size: 0.6em;
        }  

        .node-occupied{
            background-color: lightgreen;
            padding: 0.4%;
            width: 12% !important;
        }


        .node-unoccupied .node-title{
            float : left !important; 
            color: #333;
            width: 70%;
            margin-left: 2%;
            text-align: left;
            font-size: 0.6em;
        }  
        .node-unoccupied .node-name{
            float : left !important; 
            color: #333;
            width: 70%;
            margin-left: 2%;
            text-align: left;
            font-size: 0.6em;
        }  

        .node-unoccupied{
            background-color: lightgray;
            padding: 0.4%;
            width: 12% !important;
        }
        .main img{
            width: 5vw !important; 
            height: 5vw !important;
        }

    </style>
	<link rel="stylesheet" type="text/css" href="http://fperucic.github.io/treant-js/Treant.css">
	<link rel="stylesheet" type="text/css" href="http://fperucic.github.io/treant-js/examples/basic-example/basic-example.css">
	<script type="text/javascript" src="http://fperucic.github.io/treant-js/vendor/raphael.js"></script>
	<script type="text/javascript" src="http://fperucic.github.io/treant-js/Treant.js"></script> 
    <?php 
        if($info->photo != NULL){
            $path = URL::asset('').''.$info->photo;
        } else {
            $path = URL::asset('').'public/images/default.jpg';
        }
        
        $uid = Auth::id();
        $a = get_invites($uid,'1','1');
        $b = get_invites($uid,'2','1');
        
        $c = get_invites($uid,'1','2');
        $d = get_invites($uid,'2','2');
        $e = get_invites($uid,'3','2');
        $f = get_invites($uid,'4','2'); 
        
        $g = get_invites($uid,'1','3'); 
        $h = get_invites($uid,'2','3');
        $i = get_invites($uid,'3','3');
        $j = get_invites($uid,'4','3');
        $k = get_invites($uid,'5','3');
        $l = get_invites($uid,'6','3');
        $m = get_invites($uid,'7','3');
        $n = get_invites($uid,'8','3'); 
        
        
        function clean($arr){
            //return str_replace("{","",str_replace("}","",json_encode(json_decode(json_encode((object) $arr), FALSE))));
            
            $data  = " id    :          '". $arr['id']       ."'   ,";
            $data .= " image :          '". $arr['image']    ."'   ";

            if (isset($arr['link'] )) {
                $data .= ", link  : { href : '". $arr['link']     ."' }  ";
            } else {}

            if(isset($arr['text'])){
                $data .= ", text : {  name :  '".$arr['text']['name']."' , title :  '".$arr['text']['title']."' }";
                $data .= ", HTMLclass : 'node-occupied' " ;
            } else {
                $data .= ", text : {  name :  '' , title :  '' }";
                $data .= ", HTMLclass : 'node-unoccupied' " ;
            }
            
            return $data;
        }
        function get_invites($id,$position,$level){
            $default =  URL::asset('').'public/images/default.jpg';
            
            $conn = mysqli_connect("localhost","root","","techfocu_lml"); 
            $a = $conn->query("SELECT * FROM tables where parent = '".$id."' and position = '".$position."' and level = '".$level."' "); 
            $num  = $a->num_rows; 
            
            if($num != 0){ 
                while($s = $a->fetch_array()){
                     $info[] = $s;
                }
                
                $b = $conn->query("SELECT * FROM users where id = '".$info[0]['node']."'"); 
                while($t = $b->fetch_array()){
                     $data[] = $t;
                }
                
                if($data[0]['photo'] != NULL || $data[0]['photo'] != ''){
                    $img =  URL::asset('').''.$data[0]['photo'];
                } else {
                    $img = $default;
                }
                 
                 return array(
                    //"link"  => URL::route('member.invites.edit')."?id=".$id."&position=".$position."&level=".$level."&node=".$info[0]['node']."&node_id=".$data[0]['mem_id']."",
                    "id"    => $info[0]['node'],
                    "image" => $img,
                    "text"  => array( 
                        "name"  => $data[0]['first_name'].' '.$data[0]['last_name'],
                        "title" => $data[0]['mem_id']
                    )
                );
            } else {
                 return array(
                    "link" => URL::route('member.invites.edit')."?id=".$id."&position=".$position."&level=".$level."&node=none",
                    "id"    => 0,
                    "image" => $default
                );
            } 
        }
    ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> 

        var tree_structure = {
            chart: {
                container: "#basic-example", 
                levelSeparation:    100,
                siblingSeparation:  5,
                subTeeSeparation:   10,
                rootOrientation: "NORTH",
                nodeAlign : 'BOTTOM',
 
                connectors: {
                    type: 'step'
                } 
            },
            
            nodeStructure: {
                image : "<?php echo $path ?>", 
                HTMLclass : 'main',
                children: [ 
                    {
                        <?php echo clean($a); ?>, 
                        children: [
                            {
                                <?php echo clean($c); ?>, 
                                children: [
                                    {
                                        <?php echo clean($g); ?>, 
                                    }, 
                                    {
                                        <?php echo clean($h); ?>, 
                                    }, 
                                ]
                            }, 
                            {
                                <?php echo clean($d); ?>, 
                                children: [
                                    {
                                        <?php echo clean($i); ?>, 
                                    }, 
                                    {
                                        <?php echo clean($j); ?>,  
                                    }, 
                                ] 
                            }, 
                        ]
                    },
                    {
                        <?php echo clean($b); ?>, 
                        children: [
                            {
                                <?php echo clean($e); ?>, 
                                children: [
                                    {
                                        <?php echo clean($k); ?>, 
                                    }, 
                                    {
                                        <?php echo clean($l); ?>, 
                                    }, 
                                ]
                            }, 
                            {
                                <?php echo clean($f); ?>, 
                                children: [
                                    {
                                        <?php echo clean($m); ?>, 
                                    }, 
                                    {
                                        <?php echo clean($n); ?>, 
                                    }, 
                                ] 
                            }, 
                        ]
                    },
                ]
            }
        }; 
            new Treant( tree_structure );  
    </script> 
@endsection