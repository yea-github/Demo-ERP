<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardMenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['ParentItemName', 'ChildItemName', 'LogoName', 'hasChildren'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
