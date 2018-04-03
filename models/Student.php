<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $stu_id
 * @property string $stu_name
 * @property string $stu_idNum
 * @property int $pc_id Program Code
 * @property string $stu_icNumber
 *
 * @property ProgramCode $pc
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_name', 'stu_idNum', 'pc_id', 'stu_icNumber'], 'required'],
            [['stu_name'], 'string'],
            [['pc_id'], 'integer'],
            [['stu_idNum', 'stu_icNumber'], 'string', 'max' => 30],
            [['pc_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramCode::className(), 'targetAttribute' => ['pc_id' => 'pc_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stu_id' => Yii::t('app', 'Stu ID'),
            'stu_name' => Yii::t('app', 'Student Name'),
            'stu_idNum' => Yii::t('app', 'Student Id Num'),
            'pc_id' => Yii::t('app', 'Program Title'),
            'stu_icNumber' => Yii::t('app', 'Student Ic Number'),
            'co_id' => Yii::t('app', 'Course List'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPc()
    {
        return $this->hasOne(ProgramCode::className(), ['pc_id' => 'pc_id']);
    }

    

    public function getPcDetail()
    {
        $arr = [];
        $pc = $this->pc;
        return $pc->pc_desc;
        // $courses = $pc->getCourses();
        // foreach ($courses as $course) {
        //     $arr[] = $course->co_desc;
        // }
        // return $arr;
    }
}
