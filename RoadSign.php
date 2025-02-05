<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="roadsign.css">
    <title>Road Signs</title>
</head>
<body>

    <style>


    </style>
<!-- NAVIGATION BAR -->
<div class="navigation">
	<div class="navbar">
	
		<nav>
			
		<img src="logo.png" id="logo">
			<div class="dropdown">
			<a href="#" class="dropbtn"><img src="pics/dp.png" id="dp"> </a>
				<div class="dropdown-content">
					<a href="display.php">HOME</a>
					<a href="log_out.php" action="log_out.php">LOG OUT</a>
					<a href="scoreboard(automatic).php">SCOREBOARD</a>
				</div>
			</div>

		</nav>

	</div>
	<hr>
</div>

<!-- IMAGES -->
<div class="images"> 
    <h1>road signs</h1>
    
    
    <div class="container">
            <div class="sideName">
                <label id="sideNamelbl"></label>
            </div>
        
            <!-- --------------------------------------------------------- -->
            <!-- -----------------regulatory signs--------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="regSign">
                
                <div class="containerSign">
                    <h3>regulatory signs</h3>
                    <p>Priority signs</p>
                        <div class="gallery">
                                <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/stop.png">
                                <label>Stop</label>
                                </div>
                
                                <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/give_way.png" alt="Image 2">
                                <label>Give way</label>
                                </div>
                
                                <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/left_turn_must_giveway.png" alt="Image 3">
                                <label>Left turner must give way</label>
                                </div>
                        <!-- end of first div -->
                        </div>
                
                    <p>Direction signs</p>
                        <div class="gallery">
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/no_turn.png" alt="Image 1">
                                <label>No turns</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/one_way_right.png" alt="Image 1">
                                <label>One way (right)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/one_way_left.png" alt="Image 1">
                                <label>One way (left)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/keep_right.png" alt="Image 1">
                                <label>Keep right</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/keep_left.png" alt="Image 1">
                                <label>Keep left</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/pass_either_side.png" alt="Image 1">
                                <label>Pass either side</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up" data-aos="fade-up">
                                <img src="image/all_traffic_right.png" alt="Image 1">
                                <label>All traffic (right)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/all_traffic_left.png" alt="Image 1">
                                <label>All traffic (left)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/merge_traffic.png" alt="Image 1">
                                <label>Merging traffic</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/two_way_traffic.png" alt="Image 1">
                                <label>Two-way traffic</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no_turn_plate.png" alt="Image 1">
                                <label>No turns (plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/one_way_plate_right.png" alt="Image 1">
                                <label>One-way<br>(right, plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/one_way_plate_left.png" alt="Image 1">
                                <label>One-way<br>(left, plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/keep_right_plate.png" alt="Image 1">
                                <label>Keep right (plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/keep_left_plate.png" alt="Image 1">
                                <label>Keep left (plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/all_traffic_right_plate.png" alt="Image 1">
                                <label>All traffic<br>(right, plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/all_traffic_left_plate.png" alt="Image 1">
                                <label>All traffic<br>(left, plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/merge_traffic_plate.png" alt="Image 1">
                                <label>Merging traffic<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/two_way_traffic_plate.png" alt="Image 1">
                                <label>Two-way traffic<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/right_lane_must_turn_right.png" alt="Image 1">
                                <label>Right lane must<br>turn right</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/left_lane_must_turn_left.png" alt="Image 1">
                                <label>Left lane must<br>turn left</label>
                            </div>
                        </div>
                        <!-- END -->
                
                    <p>Restrictive signs</p>
                        <div class="gallery">
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry.png" alt="Image 1">
                                <label>No entry</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no right turn.png" alt="Image 1">
                                <label>No right turn</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry cars.png" alt="Image 1">
                                <label>No entry for cars</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry tricycle.png" alt="Image 1">
                                <label>No entry for tricycles</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry bus.png" alt="Image 1">
                                <label>No entry for buses</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry truck.png" alt="Image 1">
                                <label>No entry for trucks</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no uturn.png" alt="Image 1">
                                <label>No U-turn</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no left turn.png" alt="Image 1">
                                <label>No left turn</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no overtaking.png" alt="Image 1">
                                <label>No overtaking</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry jeep.png" alt="Image 1">
                                <label>No entry for jeepneys</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry pushcart.png" alt="Image 1">
                                <label>No entry for pushcarts</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry motor.png" alt="Image 1">
                                <label>No entry for motorcycles</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry bike.png" alt="Image 1">
                                <label>No entry for bicycles</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no peds cross.png" alt="Image 1">
                                <label>No pedestrian crossing</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry trailer.png" alt="Image 1">
                                <label>No entry for vehicles<br>with trailer</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry animals.png" alt="Image 1">
                                <label>No entry for animal<br>drawn vehicles</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/use overpass plate.png" alt="Image 1">
                                <label>No crossing, use overpass<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no peds cross plate.png" alt="Image 1">
                                <label>No pedestrian crossing<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/bawal tumawid plate.png" alt="Image 1">
                                <label>No crossing, use overpass<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no entry plate.png" alt="Image 1">
                                <label>No entry (plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no right turn plate.png" alt="Image 1">
                                <label>No right turn<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no left turn plate.png" alt="Image 1">
                                <label>No left turn<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no overtaking plate.png" alt="Image 1">
                                <label>No overtaking<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no uturn plate.png" alt="Image 1">
                                <label>No U-turn (plate type)</label>
                            </div>
                
                        </div>
                
                    <p>Speed signs</p>
                        <div class="gallery">
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/speed max.png" alt="Image 1">
                                <label>Speed restriction<br>(maximum)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/speed limit plate.png" alt="Image 1">
                                <label>Speed limit de-restriction<br>(plate type)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/speed min.png" alt="Image 1">
                                <label>Speed restriction (minimum)</label>
                            </div>
                        </div>
                
                    <p>Parking signs</p>
                        <div class="gallery">
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park.png" alt="Image 1">
                                <label>No parking</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park plate.png" alt="Image 1">
                                <label>Bawal pumarada (No parking)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park load only.png" alt="Image 1">
                                <label>No parking, loading only</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park anytime.png" alt="Image 1">
                                <label>No parking anytime</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/tow away zone.png" alt="Image 1">
                                <label>No parking,<br>tow-away zone</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/time restrict.png" alt="Image 1">
                                <label>Time restricted parking</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/loading zone.png" alt="Image 1">
                                <label>Loading zone</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/load and unload.png" alt="Image 1">
                                <label>Loading and unloading zone</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no wait.png" alt="Image 1">
                                <label>No waiting anytime</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no waiting.png" alt="Image 1">
                                <label>No waiting</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no load and unload.png" alt="Image 1">
                                <label>No loading and<br>unloading anytime</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no load unload anytime.png" alt="Image 1">
                                <label>No loading unloading anytime</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no stopping.png" alt="Image 1">
                                <label>No stopping anytime</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park bus stop.png" alt="Image 1">
                                <label>No parking, public<br>utility bus stop</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no park jeep stop.png" alt="Image 1">
                                <label>No parking, public<br>utility jeepney stop</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/do not block.png" alt="Image 1">
                                <label>Do not block intersection</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/right turners cross at broken lines.png" alt="Image 1">
                                <label>Right turners cross<br>at broken white lines</label>
                            </div>
                        </div>
                
                    <p>Miscellaneous signs</p>
                        <div class="gallery">
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/no blowing horn.png" alt="Image 1">
                                <label>No blowing of horns</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/width restrict.png" alt="Image 1">
                                <label>Width restriction</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/height restrict.png" alt="Image 1">
                                <label>Height restriction</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/weight restrict.png" alt="Image 1">
                                <label>Weight restriction<br>(by tonnes)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/weight per axle.png" alt="Image 1">
                                <label>Weight restriction<br>(per axle)</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/length restrict.png" alt="Image 1">
                                <label>Length restriction</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/end.png" alt="Image 1">
                                <label>End of all restrictions</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/fasten.png" alt="Image 1">
                                <label>Fasten seatbelt</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/peds cross.png" alt="Image 1">
                                <label>Pedestrian crossing</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/child cross ahead.png" alt="Image 1">
                                <label>Children crossing</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/bike lane.png" alt="Image 1">
                                <label>Bicycles lane</label>
                            </div>
                            <div class="gallery-item" data-aos="fade-up">
                                <img src="image/pwd cross.png" alt="Image 1">
                                <label>Persons with disabilities crossing</label>
                            </div>
                            
                        </div>
                </div>
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------warning signs----------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="warnSign">
                <!-- <div id="warn-sideName" class="sideName">
                    <span>W</span>
                    <span>A</span>
                    <span>R</span>
                    <span>N</span>
                    <span>I</span>
                    <span>N</span>
                    <span>G</span>&nbsp;
                    <span>S</span>
                    <span>I</span>
                    <span>G</span>
                    <span>N</span>
                    <span>S</span>
                </div> -->
                <div class="containerSign">
                    <h3>warning signs</h3>
                    <p>Horizontal alignment signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/s turn right.png" alt="Image 1">
                            <label>Sharp turn (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/s turn left.png" alt="Image 1">
                            <label>Sharp turn (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse turn right.png" alt="Image 1">
                            <label>Reverse turn (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse turn left.png" alt="Image 1">
                            <label>Reverse turn (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/curve right.png" alt="Image 1">
                            <label>Curve (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/curve left.png" alt="Image 1">
                            <label>Curve (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse curve right.png" alt="Image 1">
                            <label>Reverse curve (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse curve left.png" alt="Image 1">
                            <label>Reverse curve (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/winding right.png" alt="Image 1">
                            <label>Winding road (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/winding left.png" alt="Image 1">
                            <label>Winding road (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hairpin right.png" alt="Image 1">
                            <label>Hairpin bend (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hairpin left.png" alt="Image 1">
                            <label>Hairpin bend (left)</label>
                        </div>
                    </div>

                    <p>Intersection and junction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/intersection.png" alt="Image 1">
                            <label>Intersection</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/staggered right.png" alt="Image 1">
                            <label>Staggered intersection (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/staggered left.png" alt="Image 1">
                            <label>Staggered<br>intersection (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/skewed right.png" alt="Image 1">
                            <label>Skewed<br>intersection (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/skewed left.png" alt="Image 1">
                            <label>Skewed<br>intersection (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/tjunction.png" alt="Image 1">
                            <label>T-junction</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/yjunction.png" alt="Image 1">
                            <label>Y-junction</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/half yjunction right.png" alt="Image 1">
                            <label>Half Y-junction (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/half yjunction left.png" alt="Image 1">
                            <label>Half Y-junction (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse half right.png" alt="Image 1">
                            <label>Reverse half<br>Y-junction (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reverse half left.png" alt="Image 1">
                            <label>Reverse half<br>Y-junction (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/side junction right.png" alt="Image 1">
                            <label>Side junction (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/side junction left.png" alt="Image 1">
                            <label>Side junction (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/roundabout.png" alt="Image 1">
                            <label>Roundabout</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/priority side right.png" alt="Image 1">
                            <label>Priority, side<br>junction (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/priority side left.png" alt="Image 1">
                            <label>Priority, side<br>junction (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/priority merge right.png" alt="Image 1">
                            <label>Priority, merging<br>traffic (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/priority merge left.png" alt="Image 1">
                            <label>Priority, merging<br>traffic (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/priority intersection.png" alt="Image 1">
                            <label>Priority, intersection</label>
                        </div>
                    </div>

                    <p>Advance warning of traffic control devices signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/traffic lights.png" alt="Image 1">
                            <label>Traffic lights ahead</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/stop ahead.png" alt="Image 1">
                            <label>Stop sign ahead</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/give way ahead.png" alt="Image 1">
                            <label>Give way sign ahead</label>
                        </div>
                    </div>

                    <p>Road width signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/narrow.png" alt="Image 1">
                            <label>Narrow bridge</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/divided traffic.png" alt="Image 1">
                            <label>Start of divided traffic</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/end divided traffic.png" alt="Image 1">
                            <label>End of divided traffic</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/road narrow.png" alt="Image 1">
                            <label>Road narrows</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/road narrow plate.png" alt="Image 1">
                            <label>Road narrows (plate type)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/narrow plate.png" alt="Image 1">
                            <label>Narrow bridge (plate type)</label>
                        </div>
                    </div>

                    <p>Road obstacle signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/open bridge.png" alt="Image 1">
                            <label>Opening bridge</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/uneven road.png" alt="Image 1">
                            <label>Uneven road</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hump.png" alt="Image 1">
                            <label>Hump</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/steep right.png" alt="Image 1">
                            <label>Steep descent (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/steep left.png" alt="Image 1">
                            <label>Steep descent (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/climb right.png" alt="Image 1">
                            <label>Steep climb (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/climb left.png" alt="Image 1">
                            <label>Steep climb (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/spill way.png" alt="Image 1">
                            <label>Spill way</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/flood.png" alt="Image 1">
                            <label>Flood</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/debris right.png" alt="Image 1">
                            <label>Falling debris (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/debris left.png" alt="Image 1">
                            <label>Falling debris (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/slippery.png" alt="Image 1">
                            <label>Slippery road</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/slippery plate.png" alt="Image 1">
                            <label>Slippery road (plate type)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/cattle crossing.png" alt="Image 1">
                            <label>Cattle crossing</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/aircraft.png" alt="Image 1">
                            <label>Low flying aircraft</label>
                        </div>
                    </div>

                    <p>Pedestrian signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/peds cross ahead.png" alt="Image 1">
                            <label>Pedestrian crossing ahead</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/peds cross ahead plate.png" alt="Image 1">
                            <label>Slow down, pedestrian<br>crossing ahead (plate type)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/child cross ahead.png" alt="Image 1">
                            <label>Children crossing ahead</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/cross only.png" alt="Image 1">
                            <label>Cross only at<br>pedestrian crossing</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/handicapped.png" alt="Image 1">
                            <label>Handicapped crossing</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/bike ahead.png" alt="Image 1">
                            <label>Bike lane ahead</label>
                        </div>
                    </div>

                    <p>Railroad crossing signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/railroad cross.png" alt="Image 1">
                            <label>Railroad crossing position</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/railroad unsignalled.png" alt="Image 1">
                            <label>Railroad crossing advance<br>warning (unsignalled)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/railroad signalledd.png" alt="Image 1">
                            <label>Railroad crossing advance<br>warning (signalled)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/railroad alternativve.png" alt="Image 1">
                            <label>Railroad crossing<br>position (alternative)</label>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- --------------------------------------------------------- -->
            <!-- --------------Guide or information signs----------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="guideSign">
                <!-- <div id="guide-sideName" class="sideName">
                    <span>G</span>
                    <span>U</span>
                    <span>I</span>
                    <span>D</span>
                    <span>E</span>&nbsp;
                    <span>O</span>
                    <span>R</span>&nbsp;
                    <span>I</span>
                    <span>N</span>
                    <span>F</span>
                    <span>O</span>
                    <span>R</span>
                    <span>M</span>
                    <span>A</span>
                    <span>T</span>
                    <span>I</span>
                    <span>O</span>
                    <span>N</span>&nbsp;
                    <span>S</span>
                    <span>I</span>
                    <span>G</span>
                    <span>N</span>
                    <span>S</span>
                </div> -->
                <div class="containerSign">
                    <h3>Guide or information signs</h3>
                    <p>Advance direction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/stack.png" alt="Image 1">
                            <label>Stack direction (multiple)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/stack single.png" alt="Image 1">
                            <label>Stack direction (single)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/stack with name.png" alt="Image 1">
                            <label>Stack direction (with road name)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/diagrammatic.png" alt="Image 1">
                            <label>Diagrammatic direction</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/diagrammatic roundabout.png" alt="Image 1">
                            <label>Diagrammatic direction (roundabout)</label>
                        </div>
                    </div>

                    <p>Intersection direction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/intersect right.png" alt="Image 1">
                            <label>Intersection<br>direction (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/intersect left.png" alt="Image 1">
                            <label>Intersection<br>direction (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/intersect both.png" alt="Image 1">
                            <label>Intersection<br>direction (both sides)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/intersect with name.png" alt="Image 1">
                            <label>Intersection<br>direction (with road name)</label>
                        </div>
                    </div>

                    <p>Reassurance direction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/reassurance.png" alt="Image 1">
                            <label>Reassurance direction</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reassurance with name.png" alt="Image 1">
                            <label>Reassurance direction (with road name)</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------------------------------------------- -->
            <!-- --------------Expressway signs----------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="expresswaySign">
                <!-- <div id="expressway-sideName" class="sideName">
                    <span>E</span>
                    <span>X</span>
                    <span>P</span>
                    <span>R</span>
                    <span>E</span>
                    <span>S</span>
                    <span>S</span>
                    <span>W</span>
                    <span>A</span>
                    <span>Y</span>&nbsp;
                    <span>S</span>
                    <span>I</span>
                    <span>G</span>
                    <span>N</span>
                    <span>S</span>
                </div> -->
                <div class="containerSign">
                    <h3>Expressway signs</h3>
                    <p>Expressway approach signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/expressway.png" alt="Image 1">
                            <label>Expressway approach sign</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/express approach.png" alt="Image 1">
                            <label>Expressway approach sign</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/expressway smal.png" alt="Image 1">
                            <label>Expressway approach sign (small)</label>
                        </div>
                    </div>

                    <p>Expressway information signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/prohibited.png" alt="Image 1">
                            <label>Prohibited on expressway</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/without tail light.png" alt="Image 1">
                            <label>No entry for vehicles<br>without tail light</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/no bikes.png" alt="Image 1">
                            <label>No bicycles or motorcycles<br>allowed in expressway</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/toll.png" alt="Image 1">
                            <label>Toll charges</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/lane direction.png" alt="Image 1">
                            <label>Lane direction</label>
                        </div>
                    </div>

                    <p>Advance exit signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/advance exit.png" alt="Image 1">
                            <label>Advance exit<br>with distance</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/advance exit2.png" alt="Image 1">
                            <label>Advance exit with<br>distance and lane</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/supplementary exit.png" alt="Image 1">
                            <label>Supplementary<br>advance exit</label>
                        </div>
                    </div>

                    <p>Exit direction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/exit w destination.png" alt="Image 1">
                            <label>Exit with destination</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/next exit.png" alt="Image 1">
                            <label>Next exit</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/exit.png" alt="Image 1">
                            <label>Exit</label>
                        </div>
                    </div>

                    <p>End of expressway signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/end expressway.png" alt="Image 1">
                            <label>Expressway ends<br>after 1 km</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/end expressway2.png" alt="Image 1">
                            <label>Expressway ends<br>after 2 km</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/start expressway.png" alt="Image 1">
                            <label>Start<br>of Expressway</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/end of expressway.png" alt="Image 1">
                            <label>End of Expressway</label>
                        </div>
                    </div>

                    <p>Toll signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/toll w distance.png" alt="Image 1">
                            <label>Toll Plaza Ahead (with distance)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/stop at toll gate.png" alt="Image 1">
                            <label>Stop at Toll Gates</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/pay.png" alt="Image 1">
                            <label>Pay Toll Ahead</label>
                        </div>
                    </div>

                    <p>Expressway traffic instruction and regulatory signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/wrong way.png" alt="Image 1">
                            <label>Wrong way, go back</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/reduce.png" alt="Image 1">
                            <label>Reduce speed now</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/right lane ends.png" alt="Image 1">
                            <label>Right lane ends, merge left</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/lane ends.png" alt="Image 1">
                            <label>Lane ends, merge left</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------------------------------------------- -->
            <!-- --------------Traffic instruction signs----------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="instructionSign">
                <!-- <div id="instruction-sideName" class="sideName">
                    <span>T</span>
                    <span>R</span>
                    <span>A</span>
                    <span>F</span>
                    <span>F</span>
                    <span>I</span>
                    <span>C</span>
                    <span>I</span>
                    <span>N</span>
                    <span>S</span>
                    <span>T</span>
                    <span>R</span>
                    <span>U</span>
                    <span>C</span>
                    <span>T</span>
                    <span>I</span>
                    <span>O</span>
                    <span>N</span>&nbsp;
                    <span>S</span>
                    <span>I</span>
                    <span>G</span>
                    <span>N</span>
                    <span>S</span>
                </div> -->
                <div class="containerSign">
                    <h3>Traffic instruction signs</h3>
                    <p>Supplementary signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/use overpass1.png" alt="Image 1">
                            <label>Use overpass</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/use peds cross.png" alt="Image 1">
                            <label>Use pedestrian crossing</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/trucks.png" alt="Image 1">
                            <label>Trucks use low gear</label>
                        </div>
                    </div>

                    <p>Movement instruction signs</p>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/reduce speed.png" alt="Image 1">
                            <label>Reduce speed</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/stop on red.png" alt="Image 1">
                            <label>Stop here on red signal</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/clearance.png" alt="Image 1">
                            <label>Low clearance ahead,<br>high vehicles detour</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/no right on red.png" alt="Image 1">
                            <label>No right turn on red signal</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/slow vehicles.png" alt="Image 1">
                            <label>Slow vehicles use right lane</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/no through road.png" alt="Image 1">
                            <label>No through road</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/road closed.png" alt="Image 1">
                            <label>Road closed</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/form1.png" alt="Image 1">
                            <label>Form 1 lane</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/form2.png" alt="Image 1">
                            <label>Form 2 lanes</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------------------------------------------- -->
            <!-- --------------Hazard markers----------------------- -->
            <!-- --------------------------------------------------------- -->
            <div id="hazardSign">
                <!-- <div id="hazard-sideName" class="sideName">
                    <span>H</span>
                    <span>A</span>
                    <span>Z</span>
                    <span>A</span>
                    <span>R</span>
                    <span>D</span>&nbsp;
                    <span>S</span>
                    <span>I</span>
                    <span>G</span>
                    <span>N</span>
                    <span>S</span>
                </div> -->
                <div class="containerSign">
                    <h3>Hazard markers</h3>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="image/BW right.png" alt="Image 1">
                            <label>Black and white chevron (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/BW left.png" alt="Image 1">
                            <label>Black and white chevron (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/WR right.png" alt="Image 1">
                            <label>White and red chevron (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/WR left.png" alt="Image 1">
                            <label>White and red chevron (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hazard right.png" alt="Image 1">
                            <label>One way hazard<br>marker (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hazard left.png" alt="Image 1">
                            <label>One way hazard<br>marker (left)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/obstruction.png" alt="Image 1">
                            <label>Obstruction marker</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hazard large.png" alt="Image 1">
                            <label>Two way hazard<br>marker (large)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/hazard small.png" alt="Image 1">
                            <label>Two way hazard<br>marker (small)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/2way hazard.png" alt="Image 1">
                            <label>Two-way hazard marker</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/width right.png" alt="Image 1">
                            <label>Width marker (right)</label>
                        </div>
                        <div class="gallery-item">
                            <img src="image/width left.png" alt="Image 1">
                            <label>Width marker (left)</label>
                        </div>
                </div>
            </div>
            
        <!-- ---------------------------------------------------- --> 
    
    </div>
       <!-- ---------------------------------- -->
				<!-- HOME BUTTON -->
				<!-- ---------------------------------- -->
				<div class="btn_preview">
					<a href="display.php">
						<div class="btn-next">
							<button>HOME</button>
						</div>
					</a>
				</div>
</div>  

<!-- ---------------------------------------------------- --> 
<!-- SCRIPTS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
<script src="road.js"></script>
</body>
</html>