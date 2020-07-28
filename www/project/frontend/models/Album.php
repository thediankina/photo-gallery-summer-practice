<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Description of Album
 *
 * @author Diana Galiulina
 */
class Album extends ActiveRecord
{
    public static function tableName()
    {
        return '{{album}}';
    }
    
    public function rules()
    {
        return [
            ['name', 'required'],
        ];
    }
}