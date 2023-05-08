<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permanent_Stock extends Model
{
    public $fillable = ['date', 'description','qty','unit_rate','total','gst','grand_total','supplier_name','bill_no','pg_no','issu_date','qty_issu','name_req_deptt','bal_after_issue','deptt_pg_no','folio','remark','auction'];
}
