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

Et ajouter un fichier `.htaccess`

---

# PDO

[Documentation PDO](https://www.php.net/manual/fr/pdo.connections.php)




-------
25.10.23:
Partage ecran : https://www.jitbit.com/screensharing/#5395446285007759210


Deleted from database:
$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]); 


