<?php

namespace Kingofzihua\Project\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
        //加载|扩展文件
        $this->loads();
        //发布
        $this->publishs();

    }

    /**
     * 发布资源 [移动文件]
     * 将项目文件移动到外面
     */
    public function publishs()
    {
        //config--配置文件

        //routes--路由文件

        //view--视图文件

        //assets--资源文件

    }

    /**
     *  加载文件
     */
    public function loads()
    {
        //扩展路由
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../Routing/routes.php';
        }
        //视图
//        $this->loadViewsFrom(__DIR__ . '/path/to/views', 'courier');
    }

}
