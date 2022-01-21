<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>


<!-- contact section start -->
<div class="collection_text">Contact Us</div>
<div class="layout_padding contact_section">
    <div class="container">
        <h1 class="new_text"><strong>Contact Now</strong></h1>
    </div>
    <div class="container-fluid ram">
        <div class="row">
            <div class="col-md-6">
                <div class="email_box">
                    <div class="input_main">
                        <?php $form = Activeform::begin()?>
                        <div class="container">
                            <?=$form->field($model, 'name')->label(false)->textInput(['class'=>'email-btn form-control', 'placeholder'=>'Name']) ?>
                            <?=$form->field($model, 'email')->label(false)->textInput(['class'=>'email-btn form-control', 'placeholder'=>'Email']) ?>
                            <?=$form->field($model, 'phone')->label(false)->textInput(['class'=>'email-btn form-control', 'placeholder'=>'Phone']) ?>
                            <?=$form->field($model, 'subject')->label(false)->textarea(['class'=>'email-btn form-control', 'placeholder'=>'Subject']) ?>
                        </div> 
                        <div class="send_btn">
                            <?= Html::submitButton('Send',['class'=>'btn btn-lg btn-outline-danger'])?>
                        </div>                   
                        <?php ActiveForm::end();?>
                                   
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop_banner">
                    <div class="our_shop">
                        <button class="out_shop_bt">Our Shop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
