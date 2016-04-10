<?php

namespace Formbuilder;

use Illuminate\Database\Eloquent\Model;
/**
 *
 */
class Builder extends Model
{
    protected $table = 'forms';

    protected $fillable = ['text'];
}
