@extends('main')

@section('title', '| About Us')

@section('content')
	<!-- row -->
<div class="row">
<!-- row -->
<div class="row">

	 <!-- col-md-5 -->
	 <div class="col-md-5">
	 	<center><h3>About Us</h3></center>

	 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod totam molestias, illo sit tempora magnam unde beatae. Repellat consequuntur laborum optio ab adipisci, architecto vitae ducimus iste fugit doloribus, voluptatibus iure totam et corporis inventore mollitia. Iusto fugiat qui commodi eum voluptatem, iste. Adipisci corporis, quod dolorum tempora repellat unde fugit doloribus perspiciatis maiores omnis. Unde excepturi, consectetur. Eum aperiam cupiditate in fugit commodi iure ipsam similique nostrum nisi amet impedit tenetur molestiae voluptatibus perferendis eveniet voluptate optio quidem unde, quisquam omnis recusandae labore. Tempore voluptate ea non distinctio, ipsam ut neque obcaecati ullam quibusdam doloremque eligendi unde! Excepturi quasi eos voluptas eveniet fugiat sit fugit, aperiam voluptatum voluptatem praesentium expedita, veniam quis facilis itaque, natus ad non commodi hic voluptate ratione dicta dolor ipsa rem aspernatur in. Quod suscipit, assumenda hic saepe, voluptas cumque sint sequi veritatis ipsam amet ad officiis ut possimus perspiciatis dolorem necessitatibus praesentium fuga molestias et nulla architecto deserunt, natus. Reiciendis iusto tempora, aspernatur, corporis voluptatum illo ipsa impedit accusamus, perferendis magni inventore. Aperiam facilis deserunt, laborum eveniet, vero blanditiis, rerum consequuntur commodi eius numquam tempore sapiente in voluptate excepturi non delectus maiores quisquam ad. Debitis itaque consectetur voluptatem neque delectus, porro quibusdam atque excepturi! </p>
	 </div>

	<!-- col-md-7 -->
	<div class="col-md-7">
	 	<center><div id="googleMap" style="width:500px;height:500px;"></div></center>
	</div><!-- /col-md-7 -->

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