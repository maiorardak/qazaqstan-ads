@extends('layouts.app')
@section('content')

    <hr>
    <div class="vc_row wpb_row vc_row-fluid page-spacing vc_custom_1543312290253">
        <div class="vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">

                    <h3 style="font-size: 24px;color: #222222;line-height: 36px;text-align: left" class="vc_custom_heading">Обратная связь</h3>
                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>

                            <div class="">
                                <div class="">
                                    <div role="form" class="wpcf7" id="wpcf7-f6-p227-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="" method="post" class="wpcf7-form" novalidate="novalidate">

                                            <div class="row">
                                                <div class="col-md-6 tonsberg_cf"><label>Имя (*)</label><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                <div class="col-md-6 tonsberg_cf"><label>Email (*)</label><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                <div class="col-md-6 tonsberg_cf"><label>Телефон</label><span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </div>
                                                <div class="col-md-12 tonsberg_cf_button"><input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

                                </div>
                            </div>
                        </div></div></div></div>
    <div class="vc_row-full-width vc_clearfix"></div>

@endsection
