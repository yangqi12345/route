<?php
declare(strict_types=1);

namespace HPlus\Route\Annotation;

use Hyperf\HttpServer\Annotation\Controller;

/**
 * 后台插件控制器
 * @Annotation
 * @Target({"CLASS"})
 */
class AdminController extends Controller
{
    public $ignore = [];

    public $generate = [];

    public $tag;
    /**
     * @var null|string
     */
    public $prefix = '';
    /**
     * @var string
     */
    public $server = 'http';
    /**
     * @var string
     */
    public $description = '';

    /**
     * 控制器内是否全部只需登录就可以访问？
     * @var bool
     */
    public $userOpen = false;

    /**
     * 如果选择否，则控制器内所有方法都不进行权限验证，直接完全对外开放
     * @var bool
     */
    public $security = true;
}
