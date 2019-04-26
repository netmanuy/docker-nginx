# Build the image
docker build -t php-nginx .

# Run the image
docker run -d -p 80:80 php-nginx

Now you can test your image using: http://localhost/test.php
