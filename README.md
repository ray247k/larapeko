# LaraPeko
測試用 Laravel package 什麼事情也不會做  
本來只是想取個什麼 Laraval Package 之類的名字，不小心就 Peko 了

# 安裝方法
clone 到本機之後在你要安裝套件的 Laravel 專案下使用指令

```
composer config repositories.ray247k path ../larapeko
composer require ray247k/larapeko @dev
composer install
php artisan vendor:publish --provider="Ray247k\LaraPeko\LaraPekoServiceProvider"
```

如果儲存庫是在遠端的話，把 config repositories 換成用 cvs 方式引用
```
composer config repositories.ray247k cvs https://github.com/ray247k/larapeko
```

如果是私有版本庫，那 url 換成 ssh 的網址 `git@github.com:ray247k/larapeko.git` 就可以了
