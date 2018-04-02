<?php

//use yii\helper\HtHtml::encode(ml;
// Html::encode();
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
              <button type="button" class="btn btn-primary">Add Student</button>
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
                <tr>
                  <td>1</td>
                  <td>Farid</td>
                  <td>124234</td>
                  <td>Cs 250</td>
                  <td>asdfasdf</td>
                  <td><div class="btn-group btn-group-xs">
                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i> Edit</button>
                  </div></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
