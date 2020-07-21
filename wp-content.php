Acesse a pasta wp-content.php e depois a pasta Uploads, crie um arquivo .htaccess e coloque o código abaixo.

Access the wp-content.php folder and then the Uploads folder, create a .htaccess file and place the code below.

# BLOQUEAR A PASTA UPLOADS #
# BLOCKING THE UPLOADS FOLDER #
<Files *.php>
 deny from all
</Files>
