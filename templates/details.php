<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            img {
                height: 500px;
                object-fit: cover;
            }
        </style>
    </head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="/">Portfolio</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link text-danger" href="/projects">Administration</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <div class="w-75 mx-auto">
            <img src="../../preview-projects/<?php echo $project->getPreview(); ?>" alt="<?php echo $project->getTitle(); ?>" class="w-100 rounded mt-5">
            <h1 class="fs-1 mt-5"><?php echo $project->getTitle(); ?></h1>
            <p class="mt-3 mb-5"><?php echo $project->getDescription(); ?></p>
        </div>

	</body>
</html>
