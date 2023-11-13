# php

[PHP: Hypertext Preprocessor](https://www.php.net/)

[PHP: Une introduction à PHP - Manual](https://www.php.net/manual/fr/tutorial.php)

[.gitignore - Manual](https://www.toptal.com/developers/gitignore)


Les fichier **php** se trouve dans le dossier ' c:/xampp/htdocs '


(https://developer.mozilla.org/en-US/)
(https://devdocs.io/)
(https://learnxinyminutes.com/)

[API Employees](https://dummy.restapiexample.com/api/v1/employees)


[Water.css](https://watercss.kognise.dev/)

[Your AI search engine and pair programmer](https://www.phind.com/)

[Snippets in Visual Studio Code](https://code.visualstudio.com/docs/editor/userdefinedsnippets)



-----------------------------------------------------------

# PHP

[Installation XAMMP](https://www.apachefriends.org/fr/download.html)

LEs fichiers **php** se trouvent dans le dossier `c:/xampp/htdocs`

[PHP documentation](https://www.php.net/manual/fr/)


[Cours PHP MySQL Pierre Giraud](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/)

---

Afin d'encapsuler notre application il faut :

Ajouter dans le fichier `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/php"
    ServerName phpnotes.com
</VirtualHost>
```

Et ajouter un fichier `.htaccess`:
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

---

# PDO

[Documentation PDO](https://www.php.net/manual/fr/pdo.connections.php)




-------
25.10.23:
Partage ecran : https://www.jitbit.com/screensharing/#5395446285007759210


Deleted from database:
$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]); 


   //if (isset($user_id) && ($user_id === $user['user_id']))  
     if ( isset($user_id) && ($user_id === $user['user_id']) ):

     if (isset($_POST['user']) && ($_POST['user'] == $user['user_id'])) :

--------------------
31.10.23:
[How to Insert Form Data into Database using PHP ?](https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/)

[PHP Registration Form](https://www.phptutorial.net/php-tutorial/php-registration-form/)

---------------------
13.11.23:
# delete several notes:
sql = SELECT * FROM `note` WHERE id in (43, 56); , instead of "delete" btn in dashboard put select box

---

[C.R.U.D](https://fr.wikipedia.org/wiki/CRUD#:~:text=selon%20les%20recommandations%20des%20projets,informations%20en%20base%20de%20donn%C3%A9es.)

---

## Ce qui faut savoir:
- Définition d'une route
- Définition d'un controller
- Définition d'une vue
- Passer et récuper un paramétre à une route
- Sécurité : SQL Injection (ex: bindValue)
- Sécurité : Faille XSS (Cross-Site Scripting) - ex:  $titre = trim(filter_var($_POST['titre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));