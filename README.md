# Laravel 5 Log Viewer

> * 只有在本地环境下可以使用
> * 依赖第三方插件 `rap2hpoutre/laravel-log-viewer`

通过web界面查看管理日志文件，提升开发效率

> ** 说明： **
> 偶然发现`rap2hpoutre/laravel-log-viewer`插件很好用。
> 但有个问题：我需要`routers/web.php`文件，并且还需要添加判断开发环境的逻辑：
```php
if (config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
```
开发环境下挺没必要的，所以就加了个路由规则，仅限于开发环境下用喽

> 这只是我拿来练手的一个项目




## 安装

1. 通过composer安装
    ```shell
    composer require goodwong/laravel-log-viewer
    ```

4. 打开config/app.php，在providers数组里注册服务：
    ```php
    Goodwong\LogViewer\LogViewerServiceProvider::class,
    ```




## 使用

打开浏览器，访问：`http://<yourdomain>/logs`
