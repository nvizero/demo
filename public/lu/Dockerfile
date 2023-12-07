# Use an official PHP runtime as a parent image
FROM 19840112/firstphp:0.0.1

# Set the working directory in the container
WORKDIR /var/www/public

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/public

# Grant write permissions to the web root
RUN chown -R www-data:www-data /var/www/public

# Expose port 80
EXPOSE 80

