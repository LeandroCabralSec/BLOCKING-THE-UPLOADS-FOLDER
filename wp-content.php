A pasta de uploads é o local em que todas as suas imagens e outras mídias são armazenadas. No entanto, por ser gravável, também pode ser usados por hackers, 
que podem usá-lo para fazer upload e executar malware.

The uploads folder is the place where all your images and other media are stored. However, because it is writable, it can also be used by hackers, who can 
use it to upload and run malware.

Acesse a pasta wp-content.php e depois a pasta Uploads, crie um arquivo .htaccess e coloque o código abaixo.

Access the wp-content.php folder and then the Uploads folder, create a .htaccess file and place the code below.

# BLOQUEAR A PASTA UPLOADS #
# BLOCKING THE UPLOADS FOLDER #
<Files *.php>
 deny from all
</Files>
