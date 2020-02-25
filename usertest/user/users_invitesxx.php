<?php $active    = "myinvites" ?>
<?php $subactive = "none" ?>
<?php include '_header.php'; ?>

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
        .chart { height: 500px; margin: 5px; width: 100%; }
        .Treant > .node {  }
        .Treant > p { font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: bold; font-size: 12px; }
        .node-name { font-weight: bold;}

		#basic-example{
		    margin-top:-10%;
		    margin-left:10%;
		}
        .nodeExample1 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: #ffffff;
            border: 1px solid #000;
            width: 200px;
            font-family: Tahoma;
            font-size: 12px;
        }
 
        .Treant > .node img{
            width: 50px;  
        }
    </style>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>My Invites
	                <small>Table tree</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 


	    <div class="chart" id="basic-example"></div>
	</section>  
	<link rel="stylesheet" type="text/css" href="http://fperucic.github.io/treant-js/Treant.css">
	<link rel="stylesheet" type="text/css" href="http://fperucic.github.io/treant-js/examples/basic-example/basic-example.css">
	<script type="text/javascript" src="http://fperucic.github.io/treant-js/vendor/raphael.js"></script>
	<script type="text/javascript" src="http://fperucic.github.io/treant-js/Treant.js"></script> 
    <?php 
        if($user['photo'] != NULL){
            $path = 'http://admin.ewallet.legendarywordpress.com/'.$user['photo'];
        } else {
            $path = 'http://admin.ewallet.legendarywordpress.com/public/images/default.jpg';
        }
        $tree = array(); 
        $level_1_a = get_invite($_SESSION['id'],'ASC');
        $level_1_b = get_invite($_SESSION['id'],'DESC'); 
        $level_2_a_a = get_invite($level_1_a['id'],'ASC');
        $level_2_a_b = get_invite($level_1_a['id'],'DESC'); 
        $level_2_b_a = get_invite($level_1_b['id'],'ASC');
        $level_2_b_b = get_invite($level_1_b['id'],'DESC');  
        $level_3_a_a_a = get_invite($level_2_a_a['id'],'ASC');
        $level_3_a_a_b = get_invite($level_2_a_a['id'],'DESC'); 
        $level_3_a_b_a = get_invite($level_2_a_b['id'],'ASC');
        $level_3_a_b_b = get_invite($level_2_a_b['id'],'DESC'); 
        $level_3_b_a_a = get_invite($level_2_b_a['id'],'ASC');
        $level_3_b_a_b = get_invite($level_2_b_a['id'],'DESC'); 
        $level_3_b_b_a = get_invite($level_2_b_b['id'],'ASC');
        $level_3_b_b_b = get_invite($level_2_b_b['id'],'DESC'); 
    ?> 
    <script>

        var tree_structure = {
            chart: {
                container: "#basic-example", 
                levelSeparation:    40,
                siblingSeparation:  100,
                subTeeSeparation:   10,
                rootOrientation: "NORTH",
                nodeAlign : 'BOTTOM',
 
                connectors: {
                    type: 'step'
                } 
            },
            
            nodeStructure: {
                image : "<?php echo $path ?>", 
                children: [ 
                    {
                        image : "<?php echo $level_1_a['image']; ?>", 
                        children: [
                            {
                                image : "<?php echo $level_2_a_a['image']; ?>", 
                                children: [
                                    {
                                        image : "<?php echo $level_3_a_a_a['image']; ?>", 
                                    }, 
                                    {
                                        image : "<?php echo $level_3_a_a_b['image']; ?>", 
                                    }, 
                                ]
                            }, 
                            {
                                image : "<?php echo $level_2_a_b['image']; ?>", 
                                children: [
                                    {
                                        image : "<?php echo $level_3_a_b_a['image']; ?>", 
                                    }, 
                                    {
                                        image : "<?php echo $level_3_a_b_b['image']; ?>",  
                                    }, 
                                ] 
                            }, 
                        ]
                    },
                    {
                        image : "<?php echo $level_1_b['image']; ?>", 
                        children: [
                            {
                                image : "<?php echo $level_2_b_a['image']; ?>", 
                                children: [
                                    {
                                        image : "<?php echo $level_3_b_a_a['image']; ?>", 
                                    }, 
                                    {
                                        image : "<?php echo $level_3_b_a_b['image']; ?>", 
                                    }, 
                                ]
                            }, 
                            {
                                image : "<?php echo $level_2_b_b['image']; ?>", 
                                children: [
                                    {
                                        image : "<?php echo $level_3_b_b_a['image']; ?>", 
                                    }, 
                                    {
                                        image : "<?php echo $level_3_b_b_b['image']; ?>", 
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
<?php include '_footer.php'; ?>