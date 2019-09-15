## 钉钉Api接口包

#### 第一步 修改项目composer.json文件：
```json
"require": {
        "monolog/monolog": "2.0.0 as 1.x-dev",
    },
```
#### 第一步 安装推展：
```
  composer require torans/dingtalk
```

#### 第二步 创建配置文件：
 ```angular2html
    php artisan vendor:publish --tag="Dingtalk"
```