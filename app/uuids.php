namespace App;
use Webpaster\Uuid\Uuid;

trait Uuids
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}