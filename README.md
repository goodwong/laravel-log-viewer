# Utils\LogViewer

> * 只有在本地环境下可以使用
> * 依赖第三方插件 `rap2hpoutre/laravel-log-viewer`

通过web界面查看管理日志文件，提升开发效率




## 安装

1. 通过composer安装
    ```shell
    composer require goodwong/laravel-log-viewer
    ```

4. 打开config/app.php，在providers数组里注册服务：
    ```php
    Goodwong\LaravelLogViewer\LogViewerServiceProvider::class,
    ```




## 使用

打开浏览器，访问：`http://yourdomain/logs`
