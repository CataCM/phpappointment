<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Appointment  extends Model
{

    protected $table = 'selected_dates';


    public $primaryKey = 'id';


    public $timestamps = true;
}
?>
