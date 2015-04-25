@extends('layouts.site')

@section('title')Lishilu.com @stop

@section('headjs')
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3 signin">
      <div class="card">
        <div class="card-content">
          <div class="row">
            {!! Form::open(array('url' => 'user/signin', 'class' => 'col s12', 'method' => 'post')) !!}
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  {!! Form::text('username', '', array('class' => 'validate', 'id' => 'icon_username')) !!}
                  {!! Form::label('icon_username', '用户名') !!}
                </div>
                <div class="input-field col s12">
                  <i class="mdi-action-lock prefix"></i>
                  {!! Form::password('password', '', array('class' => 'validate', 'id' => 'icon_password')) !!}
                  {!! Form::label('icon_password', '密码') !!}
                </div>
                <div class="input-field col s8">
                  {!! Form::checkbox('rememberme', '1', '', array('id' => 'rememberme')) !!}
                  {!! Form::label('rememberme', '记住我') !!}
                </div>
                <div class="input-field col s4">
                  <button class="btn waves-effect waves-light orange" type="submit" name="signin">登录
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
        <div class="card-action">
          <a href="/user/signup">忘记密码</a>
          还没注册? <a href="/user/signup">我要注册</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
<script type="text/javascript">
</script>
@stop


