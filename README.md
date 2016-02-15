# opencvdemo
This project utilizes OpenCV to automatically detect and highlight bodies of water in satellite images.

### Image processing
The algorithm used for image processing is HSV. Following are the steps for the processing:
- Firstly the image is loaded through the website and accepted by the OpenCV code.
- Secondly blur function is used to remove the noise from the image.
- Thirdly the cvtColor function is used to convert the BGR image to HSV.
- Fourthly for the segmentation inRange function is used in which a set of range is defined to segment blue color from the image.
- As the image after inRange function is one channel thus we have used for loop to convert it into 3 channel.
- Now to get the final segmented image which represents water thus we used mul function to get dot product of input image and the image from previous step.
- If the mul function is successful then the openCV code gives a output as success.
- After this the segmented image is picked up by front end to display it on web page.

### Front-end
At the front-end of the project is a web page with a drag-and-drop image upload form. A JavaScript library called Dropzone was used for this feature. Once an image is dropped onto the form, it is uploaded to a folder on the Apache web server using a short PHP script. When the upload is completed a separate PHP script runs the image processing program, giving it the uploaded image as an input. Finally, when the processing is finished, the resulting image is displayed on the web page.

The following software packages and libraries were used for the web page:

- Apache 2 web server
- PHP
- Dropzone (for drag-and-drop)
- jQuery
- Bootstrap

Installing the web server (for Ubuntu):

1. Install the Apache 2 web server  
`sudo apt-get install apache2`

2. Restart it to make sure all the changes are applied  
`sudo service apache2 restart`

3. Create a new site configuration using the default as a template  
`cd /etc/apache2/sites-available/`  
`sudo cp 000-default.conf MySite.conf`

4. If necessary, edit _MySite.conf_ so that `DocumentRoot` points to the following folder: `/var/www/` instead of `/var/www/html/`

5. Deactivate the _000-default_ site and enable your new site (e.g. MySite)  
`sudo a2dissite 000-default` (disabling)  
`sudo a2ensite MySite` (enabling)

6. Restart Apache again  
`sudo service apache2 restart`

7. Create an `index.html` file in the `/var/www/` folder, and put a bit of HTML code in it, such as `<h1>Hey</h1>`

8. Open up your favorite web browser and go to `http://localhost`; you should see your HTML!

Installing PHP (for Ubuntu):

1. Install the PHP software  
`sudo apt-get install libapache2-mod-php5`

2. Enable the module so Apache recognizes it  
`sudo a2enmod php5`  
(It may say that it's already enabled)

3. Restart Apache again  
`sudo service apache2 restart`

4. Test out PHP by creating a `test.php` file in the `/var/www/` folder, and put the following text in the file: `<?php phpinfo(); ?>`

5. In your web browser, go to `http://localhost/test.php`. If everything is working, you will see the PHP logo and a lot of information about how it was installed, etc.
