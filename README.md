# laravel-model-batch-insert
Laravel 模型数据批量插入

### 使用指南

```
composer require chenfeizhou/laravel-model-batch-insert
php artisan vendor:publish --provider="Chenfeizhou\ModelBatch\ModelBatchServiceProvider"
```

## 使用
```php
// 模型中引用
class Example extends Model
{
    use Chenfeizhou\ModelBatch\Model\Concerns\ModelBathInsertTrait;
}

$data = [
    [
      'name' => 'zhangsan',
      'age'  => '14'
    ],
    [
      'name' => 'lisi',
      'age'  => '15'
    ]
 ];

Example::batchInsert($data);
```
