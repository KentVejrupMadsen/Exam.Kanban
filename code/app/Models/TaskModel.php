<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TaskModel
        extends Model
    {
        use HasFactory;

        protected $table = '';
        public $timestamps = false;

        protected $fillable =
        [
            'identity'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
