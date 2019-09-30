namespace App;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

trait Uuids
{
    protected static function bootUuids()
    {
        parent::boot();
        static::creating(function($model){
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}