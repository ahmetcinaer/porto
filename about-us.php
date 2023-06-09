<?php
include 'header.php';
$hakkimizdasor=$db->prepare('SELECT * FROM hakkimizda WHERE hakkimizda_id = ?');
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_title'];?></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<?php echo $hakkimizdacek['hakkimizda_content']; ?>
						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Video Tanıtım </h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="embed-responsive embed-responsive-16by9 mb-xl">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>

							<h4 class="mt-xlg">Vizyonumuz</h4>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg">"<?php echo $hakkimizdacek['hakkimizda_vizyon'];?>"</p>
								<footer>Vizyonumuz</footer>
							</blockquote>

							<h4 class="mt-xlg">Misyonumuz</h4>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg">"<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>"</p>
								<footer>Misyonumuz</footer>
							</blockquote>

							<h4 class="mt-xlg">Our History</h4>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-unstyled list-primary list-borders">
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2016 - </strong> Moves its headquarters to a new building</li>
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2014 - </strong> Porto creates its new brand</li>
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2006 - </strong> Porto Office opens it doors in London</li>
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2003 - </strong> Inauguration of the new office</li>
								<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2001 - </strong> Porto goes into business</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
<?php include 'footer.php' ?>