<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function data(){
        return [
            [
            'name' => 'Ishrat Ali',
            'company' => 'Abdullah'],
                       [
            'name' => 'Javid Ali',
            'company' => 'Akram'],
                       [
            'name' => 'Hashim Ali',
            'company' => 'Abdullah']

        ];
    }
}
