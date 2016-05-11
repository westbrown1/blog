@extends('main')

@section('title', '| About Us')

@section('content')
	<!-- row -->
<div class="row">
<!-- row -->
<div class="row">
	 <!-- col-md-12 -->
	 <div class="col-md-12">
	 	 <center><h3>About Us</h3></center>
	 	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam beatae, libero harum architecto ipsa consectetur ad dolores repellendus dicta culpa nisi nam reprehenderit, ut, velit totam aut obcaecati commodi. Omnis illo corporis, consequuntur deleniti fugit accusantium sunt voluptatum ullam saepe fugiat voluptatibus, vitae. Laborum fugit accusamus mollitia suscipit laudantium cum numquam hic tenetur eligendi dolorem sint totam fugiat dolore, nisi rem recusandae? Odit, asperiores! Accusantium quae expedita optio explicabo tempora quisquam autem, asperiores, provident delectus ad aspernatur. Doloremque aspernatur aliquam nulla alias, repellat laborum dolore eligendi harum, optio soluta assumenda beatae illum ad cumque pariatur amet voluptatum, blanditiis facilis dolores nihil libero voluptates deserunt ipsam architecto. Natus distinctio cupiditate, sed. Fugiat earum, magnam nihil natus commodi aspernatur accusamus. Ipsa distinctio libero id impedit sequi, assumenda cupiditate, dolores recusandae quibusdam necessitatibus porro maxime magnam, similique quos autem in modi. Non iure, deleniti sapiente placeat error fugiat quibusdam nobis consequuntur tempora inventore eum, ipsum molestias aliquam, vitae laborum porro impedit dicta ex unde! Veniam labore enim dignissimos, nulla dolorum minus voluptate, voluptatem non temporibus repellat tenetur! Nemo quam beatae sed debitis aliquam voluptatem, exercitationem quod quidem, dignissimos tempore odit dolorem odio iusto in necessitatibus maxime cupiditate impedit facere natus velit. Quisquam, facere. </p><hr>
	 </div><!-- /col-md-12 -->
</div><!-- /row -->
	<!-- col-md-2 -->
	<div class="col-md-4">
		 	<center><img src="images/photo.jpg" alt="Photo of West Brown"><br>
			<p>West Brown</p>

			<p>Phone/Text # <a href="tel: +19102001391"> (910) 200-1391</a></p>
			<p>Email: <a href="mailto:lawsonsdad@gmail.com">lawsonsdad@gmail.com</a></p>
			<p>Wilmington, NC  28480</p></center>			
	</div><!-- /col-md-4 -->
	<!-- col-md-8 -->
	<div class="col-md-8">
		 <center><div id="googleMap" style="width:500px;height:500px;"></div></center>
	</div><!-- /col-md-8 -->
</div><!-- /row -->	


<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(34.223333, -77.912222);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:11,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
@stop