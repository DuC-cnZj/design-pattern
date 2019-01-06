# 装饰器模式

 > 孙悟空有 72 变，当他变成"庙宇"后，他的根本还是一只猴子，但是他又有了庙宇的功能。 2、不论一幅画有没有画框都可以挂在墙上，但是通常都是有画框的，并且实际上是画框被挂在墙上。在挂在墙上之前，画可以被蒙上玻璃，装到框子里；这时画、玻璃和画框形成了一个物体。


## 在 laravel 中实践，可以用来做缓存层

### ViewImp.php

```php
<?php

namespace App\Services;


interface ViewImp
{
    public function get();
}
```

### View.php

```php
<?php

namespace App\Services;

use App\User;

class View implements ViewImp
{
    public function get()
    {
        return User::all();
    }
}
```

### ViewCache.php

```php
<?php


namespace App\Services;


use Illuminate\Support\Facades\Cache;

class ViewCache implements ViewImp
{
    /**
     * @var ViewImp
     */
    private $imp;

    public function __construct(ViewImp $imp)
    {
        $this->imp = $imp;
    }

    public function get()
    {
        return Cache::remember('users', 60, function () {
            echo "没有使用缓存";
            return $this->imp->get();
        });
    }
}
```

### AppServiceProvider.php

```php
public function register()
{
    $this->app->singleton(ViewImp::class, function () {
        return new ViewCache(new View());
    });
}
```

### web.php

```php
Route::get('/', function (\App\Services\ViewImp $imp) {
    return $imp->get();
});
```

