<?php $active    = "affiliates" ?>
<?php $subactive = "listed" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>John Doe's Invites
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
	<style type="text/css">
		#basic-example{
			width: 100%;
			height: 100vw;
		}
	</style>
    <script>
    	var config = {
        container: "#basic-example",
        
	        connectors: {
	            type: 'step'
	        },
	        node: {
	            HTMLclass: 'nodeExample1'
	        }
	    },
	    ceo = {
	        text: {
	            name: "Mark Hill",
	            title: "Chief executive officer",
	            contact: "Tel: 01 213 123 134",
	        },
	        image: "../assets/images/profile_av.jpg"
	    },

	    cto = {
	        parent: ceo,
	        text:{
	            name: "Joe Linux",
	            title: "Chief Technology Officer",
	        },
	        stackChildren: true,
	        image: "../assets/images/profile_av.jpg"
	    },
	    cbo = {
	        parent: ceo,
	        stackChildren: true,
	        text:{
	            name: "Linda May",
	            title: "Chief Business Officer",
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    cdo = {
	        parent: ceo,
	        text:{
	            name: "John Green",
	            title: "Chief accounting officer",
	            contact: "Tel: 01 213 123 134",
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    cio = {
	        parent: cto,
	        text:{
	            name: "Ron Blomquist",
	            title: "Chief Information Security Officer"
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    ciso = {
	        parent: cto,
	        text:{
	            name: "Michael Rubin",
	            title: "Chief Innovation Officer",
	            contact: {val: "we@aregreat.com", href: "mailto:we@aregreat.com"}
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    cio2 = {
	        parent: cdo,
	        text:{
	            name: "Erica Reel",
	            title: "Chief Customer Officer"
	        },
	        link: {
	            href: "http://www.google.com"
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    ciso2 = {
	        parent: cbo,
	        text:{
	            name: "Alice Lopez",
	            title: "Chief Communications Officer"
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    ciso3 = {
	        parent: cbo,
	        text:{
	            name: "Mary Johnson",
	            title: "Chief Brand Officer"
	        },
	        image: "../assets/images/profile_av.jpg"
	    },
	    ciso4 = {
	        parent: cbo,
	        text:{
	            name: "Kirk Douglas",
	            title: "Chief Business Development Officer"
	        },
	        image: "../assets/images/profile_av.jpg"
	    }

	    chart_config = [
	        config,
	        ceo,
	        cto,
	        cbo,
	        cdo,
	        cio,
	        ciso,
	        cio2,
	        ciso2,
	        ciso3,
	        ciso4
	    ]; 
        new Treant( chart_config );
    </script> 
<?php include '_footer.php'; ?>