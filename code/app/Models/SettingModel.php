<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class SettingModel
        extends Model
    {
        use HasFactory;

        protected $table = 'settings';
        public $timestamps = false;

        protected $fillable =
        [
            'id',

            'account_id',
            'category',
            'attributes',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
