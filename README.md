# Terminal Command-Line Uploader
I used server side php code to upload/transfer files.<br><br>
Supported Command:
* Curl
* Wget
* Linux
* Any Terminal/Shell Command

Supported Request:
* POST
* PUT

Some `PUT` Curl Commands:
```
curl -T your-any-file.extension example.com
```
```
curl example.com -T your-any-file.extension
```
```
curl -T your-any-file.extension https://example.com/
```
```
curl https://example.com/ -T your-any-file.extension
```
```
curl --upload-file your-any-file.extension example.com
```
```
curl example.com --upload-file your-any-file.extension
```
```
curl --upload-file your-any-file.extension https://example.com/
```
```
curl https://example.com/ --upload-file your-any-file.extension
```
* You can use `http://` or `https://` prefix or without prefix and without `/`.
* I made this for transfer/upload file into my own server from terminal (NeoTerm/Termux/Any).

Add Below Code On `.htaccess`:
```
Options +MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /up/$1 [NC,L,QSA]
```
If you rename `up.php` file to another name then add that name by replacing `up` to that name here `RewriteRule ^(.*)$ /up/$1 [NC,L,QSA]`

If you want to contribute it then:
* Add more features and pull it on here.
* Help everyone to describe what you done (Documentations).

I will add more features if i get time, thanks.
