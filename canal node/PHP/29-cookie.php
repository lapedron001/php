<?php
//cookie
setcookie('user', 'Rodrigo oliveira', time()+3600);
setcookie('email', 'ol@gmail.com', time()-3500);
setcookie('ultima_pesquisa', 'tenia adidas', time()+3600);

var_dump($_COOKIE);