<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## dèfinition le projet  :

Ce projet est une application qui fonctionne pour envoyer des messages de manière automatique en fonction de la date et de l'heure. Ceci est basé sur une base de données qui contient les informations nécessaires pour envoyer le message organisé par l'utilisateur.



## outils de ce travail:
- [utilise framework laravel (php)](https://laravel.com/docs/routing).
- [utilise Api Message bird](https://developers.messagebird.com)
- postgresql database



##  schedule commande :

j'ai utilise technologie cron job pour garantire de travaille le code 24/24h et cela a traver taper le commande : [php artisan schedule:work]  
## resultat of API Message Bird :
object(MessageBird\Objects\MessageResponse)#885 (15) {
  ["id"]=>
  string(32) "b3fb2f6cd2484c1694a6a3a0f02393c8"
  ["href"]=>
  string(70) "https://rest.messagebird.com/messages/b3fb2f6cd2484c1694a6a3a0f02393c8"
  ["direction"]=>
  string(2) "mt"
  ["type"]=>
  string(3) "sms"
  ["originator"]=>
  string(13) "+213657777750"
  ["body"]=>
  string(30) "message:HI! this is your first message"
  ["reference"]=>
  NULL
  ["validity"]=>
  NULL
  ["gateway"]=>
  int(10)
  ["typeDetails"]=>
  array(0) {
  }
  ["datacoding"]=>
  string(5) "plain"
  ["mclass"]=>
  int(1)
  ["scheduledDatetime"]=>
  NULL
  ["createdDatetime"]=>
  string(25) "2021-12-20T20:11:00+00:00"
  ["recipients"]=>
  object(MessageBird\Objects\Recipients)#944 (5) {
    ["totalCount"]=>
    int(1)
    ["totalSentCount"]=>
    int(1)
    ["totalDeliveredCount"]=>
    int(0)
    ["totalDeliveryFailedCount"]=>
    int(0)
    ["items"]=>
    array(1) {
      [0]=>
      object(MessageBird\Objects\Recipient)#945 (3) {
        ["recipient"]=>
        int(213657777750)
        ["status"]=>
        string(4) "sent"
        ["statusDatetime"]=>
        string(25) "2021-12-20T20:11:00+00:00"
      }
    }
  }
}

## comment faire execution karnel shedule function ?
le travaille de send message automatique ce basè sur la function karnel shedule (https://github.com/allia5/SIA_Project_Send_Auto_Sms/blob/master/app/Console/Kernel.php ) car il est permet de rècupirer data et  exècuter le code  source cheque minute (->everyMinute();) pour parcourire tout les message selon le dèlait de temps que en cadrè



## photo d'èxecution:
### sql data exemple:
<img src="https://github.com/allia5/SIA_Project_Send_Auto_Sms/blob/master/mes%20photo/data.PNG" >


<img src="https://github.com/allia5/SIA_Project_Send_Auto_Sms/blob/master/mes%20photo/screenshot.jpg" height="500px">



