# LaraPeko
測試用 Laravel package 什麼事情也不會做  
本來只是想取個什麼 Laraval Package 之類的名字，不小心就 Peko 了

# 安裝方法
clone 到本機之後（從 github 拉套件還沒研究好）
在你要安裝套件的 Laravel 專案下使用指令

```
composer config repositories.ray247k path ../larapeko
composer require ray247k/larapeko @dev
composer install
php artisan vendor:publish --provider="Ray247k\LaraPeko\LaraPekoServiceProvider"
```

我猜是
```
composer config repositories.ray247k git https://github.com/ray247k/larapeko
```
改天再研究，今天好累了