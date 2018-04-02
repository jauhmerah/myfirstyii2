<?php

//use yii\helper\HtHtml::encode(ml;
// Html::encode();
use app\models\M_student;
?>
<h1>Hello <?= $target ?></h1>
<p>Welcome to your Yii2</p>

<div class="clearfix">
    <p></p>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-primary"><i class="fas fa-plus" aria-hidden></i> Add Student</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Num</th>
                  <th>Student Name</th>
                  <th>Student Id Number</th>
                  <th>Program Code</th>
                  <th>Student NRIC</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                        if (sizeof($list) == 0) {
                            ?>
                <tr>
                    <td colspan="6" class="text-center"><strong>No Student Data</strong></td>
                </tr>
                            <?php
                        }else{
                            // foreach ($list as $key) {
                            //     echo "<pre>";
                            //     print_r($key);
                            //     echo "</pre>";
                            // }
                            echo "<pre>";
                            print_r($list);
                            echo "</pre>";
                        }
                    ?>
                <tr>
                  <td>1</td>
                  <td>Farid</td>
                  <td>124234</td>
                  <td>Cs 250</td>
                  <td>asdfasdf</td>
                  <td><div class="btn-group btn-group-xs">
                    <button type="button" class="btn btn-warning btn-circle" title="Edit"><i class="fa fa-pencil-alt"></i></button>
                    <button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash-alt"></i></button>
                  </div></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
