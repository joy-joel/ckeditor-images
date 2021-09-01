

### scripts.js

 #First, the user clicks on the "upload image" button. This triggers a click event on the file input whose display has been set to none. 
 
 ##Once the user selects an image from their local computer, an onChange event is triggered on the file input, and this is where we upload the image using Ajax.

###At this point, our image is already being sent to the server in an Ajax request. But so far in our server.php, we have only connected to the database. We haven't yet written the code to receive the image from the Ajax request and upload it to the images folder. 


### server.php

// From this part of the code ==> "if 'upload image' buttton is clicked"
if (isset($_POST['uploading_file'])) {
    ....
}

#This code accepts the Ajax request that comes with the image, uploads the image to the images folder and returns a fully qualified URL to the image. Remember that at this point the user is still busy writing their post on the post creation form and all this is happening in the background.

##The URL that has been returned from the server is then displayed on a pop-up modal which pops up for the user to copy the URL. 

###When the modal pops up and the user clicks on the displayed URL, it gets copied to the clipboard and the user can proceed to use this image URL in CKEditor by pasting this URL in the appropriate place.


