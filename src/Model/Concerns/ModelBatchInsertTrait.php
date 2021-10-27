<?php
namespace Chenfeizhou\ModelBatch\Model\Concerns;
use Illuminate\Support\Facades\DB;

trait ModelBatchInsertTrait
{
    public static function batchInsert(array $data)
    {
        set_time_limit(0);
        ini_set('memory_limit', -1);

        $total = count($data);

        $totalPage = ceil($total / config('model-batch.chunk'));

        for ($page = 1; $page <= $totalPage; $page++) {

            DB::transaction(function() use ($page, $data) {

                $offset = ($page - 1) * config('model-batch.chunk');

                $limit = self::PAGE;

                $chunkData = array_slice($result, $offset, $limit);

                DB::connection($this->connection_db)->table($this->table_name)->insert($chunkData);
            });
        }
    }
}
