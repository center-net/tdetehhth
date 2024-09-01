<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory ;

    protected $guarded=[];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }


    public static function generateFor($table_name, $name)
    {
        self::firstOrCreate(['name'=>'عرض '.$name,'key' => 'browse_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'قراءة '.$name,'key' => 'read_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'تعديل '.$name,'key' => 'edit_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'إضافة '.$name,'key' => 'add_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'حذف '.$name,'key' => 'delete_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'إستعادة '.$name,'key' => 'restore_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'حذف مؤقت '.$name,'key' => 'forceDelete_'.$table_name, 'table_name' => $table_name]);
    }

    public static function removeFrom($table_name)
    {
        self::where(['table_name' => $table_name])->delete();
    }
}
