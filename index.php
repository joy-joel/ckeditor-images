<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Uploading images in Ckeditor using PHP</title>
    <!-- Bootstra CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- Custom styling -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <div clas="container">
        <div class="post">

        	<!-- Display a list of posts from database -->

            <?php if (isset($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <h3>
                            <a href="details.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
                        </h3>
                        <p><?php echo $post['body']; ?></p>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <h2>No posts available</h2>
            <?php endif ?>


            <!-- Form to create posts -->
            <form action="index.php" method="post" enctype="multipart/form-data" class="post-form">
                <h1 class="text-center"> Add Blog Post</h1>
                <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" name="title" class="form-control" id="">
                </div>
                
                <div class="form-group" style="position: relative;">
                    <label for="post"> Body </label>

                    <!-- Upload image button -->
					<a href="#" class="btn btn-xs btn-default pull-right upload-img-btn" data-toggle="modal" data-target="#myModal"> Upload image </a>

                    <!-- Input to browse your machine and select image to upload -->
                    <input type="file" id="image-input" style="display: none;">

                    <textarea name="body" id="body" class="form-control" cols="30" rows="5"></textarea>

                </div>
                <div class="form-group">
					<button type="submit" name="save-post" class="btn btn-success pull-right">Save Post</button>
				</div>
            </form>

            <!-- Pop-up Modal to display image URL -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel"> Click below to copy Image url</h4>
			      </div>
			      <div class="modal-body">
					<!-- returned image url will be displayed here -->
					<input 
						type="text" 
						id="post_image_url" 
						onclick="return copyUrl()" 
						class="form-control"
						>
					<p id="feedback_msg" style="color: green; display: none;"><b>Image url copied to clipboard</b></p>
			      </div>
			    </div>
			  </div>
			</div>

        </div>
    </div>

    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CKEditor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

    <!-- custom scripts -->
    <script src="scripts.js"></script>

</body>
</html>

