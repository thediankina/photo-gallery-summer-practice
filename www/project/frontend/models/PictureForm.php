<?php

namespace frontend\models;

use yii\base\Model;

class PictureForm extends Model {

    public $picture;

    public function rules() {
        return [
            [['picture'], 'file',
                'extensions' => ['jpg'],
                'checkExtensionByMimeType' => true
            ],
        ];
    }

}
